<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use App\Models\ContactMessage;
use Illuminate\Mail\Mailable;

class ContactFormMail extends Mailable 
{
    use Queueable, SerializesModels;

    public ContactMessage $contact; // ✅ public hona chahiye

    public function __construct(ContactMessage $contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        return $this->subject('Thank you for contacting us')
                    ->view('contact-confirmation'); // ✅ yeh view exist karna chahiye
    }
}