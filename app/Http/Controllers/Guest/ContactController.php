<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\Mail\Guest\ContactMail;

class ContactController extends Controller
{
    public function sendContact(Request $request){
    	$myEmail = 'hanusoft.dev@gmail.com';
    	Mail::to($myEmail)->send(new ContactMail($request));
    }
}
