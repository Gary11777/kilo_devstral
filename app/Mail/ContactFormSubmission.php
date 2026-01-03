<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\ContactFormSubmission as ContactFormSubmissionModel;

class ContactFormSubmission extends Mailable
{
    use Queueable, SerializesModels;

    public $submission;

    public function __construct(ContactFormSubmissionModel $submission)
    {
        $this->submission = $submission;
    }

    public function build()
    {
        return $this->subject('New Contact Form Submission: ' . $this->submission->subject)
                    ->markdown('emails.contact_form_submission')
                    ->with([
                        'submission' => $this->submission,
                    ]);
    }
}