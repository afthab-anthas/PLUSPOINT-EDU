<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\registration_mail;

class EmailController extends Controller
{

    public function SendRegisterEmail($email, $name, $role)
    {
        $toEmail = $email;
        $customName = $name;
        $customrole = $role;
        //$mailmessage = 'This is a test registration email';
        $subject = 'Account Creation Successful With Plus Point';
        $mailmessage = "Dear $customName,";
        $mailrole = " $customrole";


        Mail::to($toEmail)->send(new registration_mail($mailmessage, $subject, $mailrole));
    }

}
