<?php

namespace App\Http\Controllers;

use App\Models\lain;
use Illuminate\Http\Request;
use {{ namespacedModel }};

class SendEmailController extends Controller
{

    function index()
    {
        return view('send_email');
    }
    function send(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        $data = array (
            'name' => $request->name ,
            'message' => $request->message
        );
        Mail :: to('s5935512038@phuket.psu.ac.th')->send(new SendMail($data));
        return back()->with('success','Thanks for contacting us!');
    }
}
