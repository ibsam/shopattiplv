<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;
use Session;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function guard()
    {
        return Auth::guard('customers');
    }

    protected function showResetForm(){
        return view('user.forget-password');
    }

    protected function broker()
    {
        dd('xxxxx');
        return Password::broker('customers'); //set password broker name according to guard which you have set in config/auth.php
    }

    protected function sendResetLinkEmail(){
        //dd($req);
        Session::put('status','We Have Send You An Email');
        return view('user.email');
    }
     
}
