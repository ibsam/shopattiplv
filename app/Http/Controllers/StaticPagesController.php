<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;
use Session;

class StaticPagesController extends Controller
{
    //
    public function getContactUs(){
        return view('user.shopattip.contact-us');
    }

    public function contactUs(Request $request){

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactUsMail($request->input()));

        Session::flash('status','We have recieve your email and get back to you with in 24 hours');
        return redirect()->back();
    }
}
