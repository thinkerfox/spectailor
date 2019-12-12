<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class EmailController extends Controller
{

    /**
     * @param Request $request
     * @return string
     */
    public function contact(Request $request)
    {
        Mail::to('firat@spectailor.co')->send(new ContactMail($request->name, $request->email, $request->body));
        return 'Hello World';
    }
}