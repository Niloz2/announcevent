<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Exception;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'phone' => 'required|string|min:10|max:13', // Phone number must be between 10 and 14 characters
        ]);

        try {
            // Send email
            $data = $request->all();
            Mail::to('support@announcevent.com')->send(new ContactMail($data));

            // Return success response if email is sent
            return response()->json(['success' => true, 'message' => 'Message sent successfully.'], 200);

        } catch (Exception $e) {
            // Catch email sending failure
            return response()->json(['success' => false, 'message' => 'Failed to send message. Please try again later.'], 500);
        }
    }
}
