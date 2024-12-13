<?php

namespace App\Http\Controllers;

use App\Models\Contactus;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact_form');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'number' => 'required|regex:/^\+1\s\(\d{3}\)\s\d{3}-\d{4}$/',
            'service' => 'required',
            'message' => 'required|string|max:1000',
        ]);

        Contactus::create($validatedData);
        
        return redirect()->route('contact.form')->with('success', 'Form submitted successfully!');
    }
}
?>