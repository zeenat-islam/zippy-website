<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; 
use App\Mail\ContactFormMail;
use App\Mail\AdminContactMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'full_name'   => 'required|string|max:255',
            'email'       => 'required|email',
            'phone'       => 'required|string',
            'service'     => 'nullable|string',
            'job_inquiry' => 'nullable|string',
            'details'     => 'required|string|min:10',
        ]);

     $contact = ContactMessage::create([
            'name'        => $validated['full_name'],
            'email'       => $validated['email'],
            'phone'       => $validated['phone'],
            'service'     => $validated['service'] ?? null,
            'job_inquiry' => $validated['job_inquiry'] ?? null,
            'message'     => $validated['details'],
        ]);

        Mail::to('zeenatislam987a@gmail.com')->queue(new AdminContactMail($contact));
        
        // Hum Mailtrap use kar rahe hain, toh yahan aap apni email likh sakti hain
       
       
    Mail::to($validated['email'])
    ->later(now()->addSeconds(10), new ContactFormMail($contact));

        return back()->with('success', 'Message sent! We will contact you soon.');
    }

    
}