<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{

    function send(Request $request) {
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'message' =>  'required'
        ]);

        $data = array(
            'name'      =>  $request->name,
            'email'      =>  $request->email,
            'message'   =>   $request->message
        );

        Mail::to( env('MAIL_USERNAME') )->send(new SendMail($data));

        return redirect()->route('home')->with('success', 'Thanks for contacting us!');
    }


    function contact(){
        return view('posts.contactUs');
    }

}


