<?php
// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
 

    public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $name = $validated['name'];
        $email = $validated['email'];
        $messageContent = $validated['message'];

        // Send the email
        Mail::to('m7mdgidrah@gmail.com')->send(new ContactFormMail($name, $email, $messageContent));

        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}
