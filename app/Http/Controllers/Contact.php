<?php

namespace App\Http\Controllers;

use App\Contact; 
use Illuminate\Http\Request;

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

        Contact::create($validatedData); // استخدام نموذج الاتصال لإنشاء سجل جديد

        return redirect()->back()->with('success', 'تم إرسال الاتصال بنجاح!');
    }
}
