@component('mail::message')
# New Contact Form Submission

A new contact form has been submitted on your website.

**Name:** {{ $submission->name }}

**Email:** {{ $submission->email }}

**Subject:** {{ $submission->subject }}

**Message:**
{{ $submission->message }}

@if($submission->phone)
**Phone:** {{ $submission->phone }}
@endif

@if($submission->company)
**Company:** {{ $submission->company }}
@endif

**Submitted from:** {{ $submission->ip_address }}

**Submitted at:** {{ $submission->created_at->format('Y-m-d H:i:s') }}

@component('mail::button', ['url' => config('app.url')])
View Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent