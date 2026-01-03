<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http as HttpFacade;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactFormSubmission;
use App\Models\ContactFormSubmission as ContactFormSubmissionModel;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'honeypot' => 'required|string|size:0', // Honeypot field should be empty
            'cf-turnstile-response' => 'required|string', // Cloudflare Turnstile
        ], [
            'honeypot.size' => 'Bot detection triggered',
            'cf-turnstile-response.required' => 'Please complete the CAPTCHA verification',
        ]);

        // Check if honeypot field is filled (bot detection)
        if ($request->filled('honeypot')) {
            return back()->with('error', 'Bot detection triggered');
        }

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        // Verify Cloudflare Turnstile token
        if (!$this->verifyTurnstileToken($request->input('cf-turnstile-response'))) {
            return back()
                ->withErrors(['cf-turnstile-response' => 'CAPTCHA verification failed. Please try again.'])
                ->withInput();
        }

        // Store the submission in database
        $submission = ContactFormSubmissionModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'phone' => $request->phone,
            'company' => $request->company,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        // Send email notification
        try {
            Mail::to(config('mail.from.address'))->send(
                new ContactFormSubmission($submission)
            );
        } catch (\Exception $e) {
            // Log email error but don't fail the request
            \Illuminate\Support\Facades\Log::error('Contact form email failed: ' . $e->getMessage());
        }

        return back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }

    protected function verifyTurnstileToken($token)
    {
        if (empty($token)) {
            return false;
        }

        $secretKey = config('services.turnstile.secret_key');
        if (empty($secretKey)) {
            // If no secret key is configured, skip verification (for development)
            return true;
        }

        try {
            $data = http_build_query([
                'secret' => $secretKey,
                'response' => $token,
                'remoteip' => request()->ip(),
            ]);

            $options = [
                'http' => [
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method' => 'POST',
                    'content' => $data,
                ],
            ];

            $context = stream_context_create($options);
            $result = file_get_contents('https://challenges.cloudflare.com/turnstile/v0/siteverify', false, $context);
            $response = json_decode($result, true);

            return $response['success'] ?? false;
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Turnstile verification failed: ' . $e->getMessage());
            return false;
        }
    }
}