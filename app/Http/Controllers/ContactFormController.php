<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        $mobile = $request->input('country_code') . $request->input('mobile');
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required',
                'mobile' => 'required'
            ],
        );
        if ($validator->fails()) {
            session()->flash('error', 'Verify the form fields and try again.');
            return redirect()->back()->withErrors($validator);
            
        }        
        // Here you will handle the form submission, like validating input and sending emails.
        $mailData = [
            'message' => $message,
            'name' => $name,
            'email'=> $email,
            'mobile' => $mobile,
            'subject' => 'New User Enquiry Recieved'

        ];
        
        Mail::to('info@pluspoint.uk')->send(new ContactMail($mailData));
        session()->flash('success', 'Thank you for your message! We will get back shortly.');
        return back();
    }
}