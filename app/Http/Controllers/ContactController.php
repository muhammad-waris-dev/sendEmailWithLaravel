<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function getData(Request $request)
    {
        $details = [
            'subject' => $request->input('subject'),
            'body' =>  $request->input('body')
        ];

        Mail::to($request->input('email'))->send(new ContactMail($details));
        
        return back()->with('success', "Email Send");
    }
}
