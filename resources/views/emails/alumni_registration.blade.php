<!-- resources/views/emails/alumni/registered.blade.php -->

@component('mail::message')
# New Alumni Registration

A new alumni has registered:

- **Full Name:** {{ $alumni->full_name }}
- **Email:** {{ $alumni->email }}
- **Phone:** {{ $alumni->phone }}
- **Graduation Year:** {{ $alumni->graduation_year }}

@component('mail::button', ['url' => ''])
View Alumni Profile
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent



function sendEmail() {
    Email.send({
        SecureToken: "4781515e-03b9-443c-be37-1d160e1d4c01",

        To: 'cb011366@students.apiit.lk',
        From: document.getElementByID("email").value,
        Subject: "New Contact Form Enquiry",
        Body: "And this is the body"
    }).then(
        message => alert(message)
    );
}


onsubmit="sendEmail(); reset(); return false;
