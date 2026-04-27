<?php

namespace App\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

class AdminContactMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    // YEH LINE ZAROORI HAI: $contact ko public karein
    public $contact;

    public function __construct($contact)
    {
        // Yahan data assign karein
        $this->contact = $contact;
    }

    public function content(): Content
    {
        return new Content(
            view: 'admin-contact', // Path sahi check kar lein
        );
    }
}