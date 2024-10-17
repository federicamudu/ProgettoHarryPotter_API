<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactUs(){
        return view('contactUs');
    }
    public function contactUsSubmit(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        Mail::to($email)->send(new ContactMail($name, $email, $message));
        return redirect()->route('contact.us')->with('mailSuccess','Ci hai contattato con successo! Ti ricontatteremo nel minor tempo possibile!');
    }
}
