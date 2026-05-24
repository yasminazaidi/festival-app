<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    // Display the contact form
    public function show()
    {
        return view('contact');
    }

    // Process the form submission
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Simulate sending an email by writing to the application logs
        Log::info("New contact message from: " . $request->name . " (" . $request->email . ")");
        Log::info("Message content: " . $request->message);

        return redirect()->back()->with('success', 'Your message has been successfully sent to the administrator!');
    }
}