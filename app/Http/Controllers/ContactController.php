<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'phone' => 'required|string|min:10|max:14', // Phone number must be between 10 and 14 characters
        ]);

        $data = $request->all();
        Mail::to('support@announcevent.com')->send(new ContactMail($data));

        // return back()->with('success', 'Your message has been sent.');
        // Return a JSON response after success
        return response()->json(['success' => true]);
    }
}
