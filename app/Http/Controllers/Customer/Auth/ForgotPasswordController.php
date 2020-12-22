<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

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

    protected function showConfirmForm(){

        // dd("getAllCartDetails");
        return view('user.shopattip.forgatepassword');

    } 
    public function __construct()
    {  
        $this->middleware('guest:customers');
    }

    protected function showResetForm(){
        return view('user.forget-password');
    }

    public function broker()
    {
        //dd('xxxxx');
        return Password::broker('customer'); //set password broker name according to guard which you have set in config/auth.php
    }

    protected function sendResetLinkEmail(){
        //dd($req);
        //$this->broker();
        Session::put('status','We Have Send You An Email');
        return view('user.email');
    }
      
}
