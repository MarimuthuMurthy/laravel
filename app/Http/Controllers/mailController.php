<?php

namespace App\Http\Controllers;

use App\Mail\testMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title'=>'Mail from murthy',
            'body'=>'This is from testing mail using gmail'
        ];
        Mail::to('marimuthumurthy2001@gmail.com')->send(new testMail($details));
        return "Email sent";
    }
}
