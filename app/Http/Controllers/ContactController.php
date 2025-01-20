<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
         ]);

        $formData = $request->only(['name', 'email', 'message']);

        // Send the email to your predefined address
        Mail::to('m7mdgidrah@gmail.com')->send(new ContactMail($formData));

        return redirect()->back()->with('success', 'Thank you for contacting us!');
    }
}
