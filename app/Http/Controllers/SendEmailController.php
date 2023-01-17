<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\DemoMail;
use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    public function index()
    {

      Mail::to('majidursarkar333@gmail.com')->send(new DemoMail());

    }
}
