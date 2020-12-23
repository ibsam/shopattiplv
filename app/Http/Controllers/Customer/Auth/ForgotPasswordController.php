<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;
use App\Providers\RouteServiceProvider;
use Session;
use Illuminate\Http\Request;
use Auth;
use App\Customer;
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

    // protected function guard()
    // {
    //     return Auth::guard('customers');
    // }

    protected function showLinkRequestForm(){
        return view('user.forget-password');
    }

    protected function broker()
    {
        //dd('xxxxx');
        return Password::broker('customers'); //set password broker name according to guard which you have set in config/auth.php
    }        

    protected function sendResetLinkEmail(Request $request){
        //dd($request);
        $this->validate($request,['email' => 'email|required']);

        if(Customer::where('email',$request->only('email'))->first()){
            $response = $this->broker()->sendResetLink($request->only('email'));          
            return view('user.email',['status' => true]);
        }
        else{          
            return view('user.email',['status' => false]);
        }

    }
}
