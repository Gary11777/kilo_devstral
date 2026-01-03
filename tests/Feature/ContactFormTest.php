<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\ContactFormSubmission;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;

class ContactFormTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();
        
        // Configure rate limiter for tests
        RateLimiter::for('contact-form', function ($request) {
            return Limit::perMinute(5)->by($request->ip());
        });
        
        // Mock HTTP requests for Turnstile verification
        Http::fake([
            'challenges.cloudflare.com/turnstile/v0/siteverify' => Http::response(['success' => true], 200),
        ]);
    }

    public function test_contact_form_validation_works()
    {
        $response = $this->post('/contact', [
            'name' => '',
            'email' => 'invalid-email',
            'subject' => '',
            'message' => 'short',
            'honeypot' => '', // Must be empty for validation to work
            'cf-turnstile-response' => 'test-token',
        ]);

        $response->assertSessionHasErrors(['name', 'email', 'subject', 'message']);
    }

    public function test_contact_form_honeypot_detection_works()
    {
        $response = $this->post('/contact', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'subject' => 'Test Subject',
            'message' => 'This is a test message with more than 10 characters.',
            'honeypot' => 'bot-filled-field',
            'cf-turnstile-response' => 'test-token',
        ]);

        $response->assertSessionHas('error');
        $this->assertEquals('Bot detection triggered', session('error'));
    }

    public function test_contact_form_submission_works()
    {
        $formData = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'subject' => 'Test Subject',
            'message' => 'This is a test message with more than 10 characters.',
            'phone' => '1234567890',
            'company' => 'Test Company',
            'honeypot' => '', // Must be empty string to pass validation
            'cf-turnstile-response' => 'test-token',
        ];

        $response = $this->post('/contact', $formData);

        $response->assertRedirect('/contact');
        $response->assertSessionHas('success');
        $this->assertEquals('Thank you for your message! We will get back to you soon.', session('success'));

        // Check database
        $this->assertDatabaseHas('contact_form_submissions', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'subject' => 'Test Subject',
        ]);
    }

    public function test_contact_form_sends_email()
    {
        Mail::fake();

        $formData = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'subject' => 'Test Subject',
            'message' => 'This is a test message with more than 10 characters.',
            'honeypot' => '',
            'cf-turnstile-response' => 'test-token',
        ];

        $response = $this->post('/contact', $formData);

        // Assert email was sent
        Mail::assertSent(\App\Mail\ContactFormSubmission::class, function ($mail) {
            return $mail->submission->email === 'test@example.com';
        });
    }

    public function test_contact_form_stores_ip_and_user_agent()
    {
        $formData = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'subject' => 'Test Subject',
            'message' => 'This is a test message with more than 10 characters.',
            'honeypot' => '',
            'cf-turnstile-response' => 'test-token',
        ];

        $response = $this->post('/contact', $formData);

        $submission = ContactFormSubmission::first();

        $this->assertNotNull($submission->ip_address);
        $this->assertNotNull($submission->user_agent);
    }

    public function test_contact_form_turnstile_verification_fails()
    {
        // Mock Turnstile to fail
        Http::fake([
            'challenges.cloudflare.com/turnstile/v0/siteverify' => Http::response(['success' => false], 200),
        ]);

        $formData = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'subject' => 'Test Subject',
            'message' => 'This is a test message with more than 10 characters.',
            'honeypot' => '',
            'cf-turnstile-response' => 'invalid-token',
        ];

        $response = $this->post('/contact', $formData);

        $response->assertSessionHasErrors(['cf-turnstile-response']);
        $this->assertEquals('CAPTCHA verification failed. Please try again.', session('errors')->first('cf-turnstile-response'));
    }
}