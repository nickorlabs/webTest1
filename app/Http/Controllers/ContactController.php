<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('Contact-Us');
    }

    public function store(Request $request)
{
    // Validation rules
    $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'company' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'message' => 'required|string|max:250',
        'g-recaptcha-response' => 'required|recaptcha',
    ];

    // Custom validation error messages
    $messages = [
        'g-recaptcha-response.required' => 'Please complete the reCAPTCHA.',
        'recaptcha' => 'reCAPTCHA verification failed. Please try again.',
    ];

    // Validate the request data
    $request->validate($rules, $messages);

     $email = [
            'name' => $request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'company'=>$request->company,
            'message'=>$request->message
        ];



        // Send the email
        try {
            Mail::send('emails.contact', ['email' => $email], function ($message) {
                $message->to('yasirmubeen306@gmail.com', 'Yasir')->subject('Contact Form Submission');
            });
        } catch (\Exception $e) {
            // Log the error message
            error_log("Email send failed: " . $e->getMessage());
        }
    // Redirect back with a success message
    return redirect('/contact-us')->with('success', 'Your message has been sent successfully.');
}

}


