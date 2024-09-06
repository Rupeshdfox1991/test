<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactInquiryMail;
use App\Mail\ThankYouMail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }


    public function submitContactForm(Request $request)
    {
        // dd($request->all());
        // Validate the form inputs, including reCAPTCHA
        $request->validate([
            'name' => 'required',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'regex:/^\w+[-\.\w]*@(?!(?:outlook|myemail|yahoo)\.com$)\w+[-\.\w]*?\.\w{2,4}$/',
            ],
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
            'comment' => 'required|string',
            'g-recaptcha-response' => 'required|recaptcha',

        ]);


        // If validation passes, proceed with the rest of your logic

        // Send email
        $details = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('country_code') . $request->input('phone'),
            'message' => $request->input('comment'),
        ];


        Mail::to('rupesh@dfoxmediadigital.com')->bcc('mayur@dfoxmedia.com')->send(new ContactInquiryMail($details));

        // Send thank-you email to the user
        Mail::to($details['email'])->send(new ThankYouMail($details));

        return redirect()->route('thank-you')->with('success', 'Message sent successfully!');
        // return back()->with('success', 'Your message has been sent successfully.');

    }


    public function thankYou()
    {
        return view('thank-you');
    }
}