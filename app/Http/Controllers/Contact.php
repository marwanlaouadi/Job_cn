<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Import the Controller class

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required',
        ]);

        Contact::create($validatedData);

        return redirect()->back()->with('success', 'Message successfully sent!'); // Include a success message
    }
}
