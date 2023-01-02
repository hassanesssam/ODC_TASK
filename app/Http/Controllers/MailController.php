<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendMail ($recive){
        Mail::to ($recive)->send(new RegisterMail);
    }
}
