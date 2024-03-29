<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use Auth;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */
    use ResetsPasswords;

    public function __construct()
    {
        $this->middleware('guest:customers');
    }

    
    //use CustomerResetPasswordNotification;


    protected function guard()
    {
        return Auth::guard('customers');
    }

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::Payment;

    protected function showResetForm(Request $request, $token = null)
    {   
        return view('user.reset')->with(
        ['token' => $token, 'email' => $request->email]
        );
    }

    protected function broker()
    {   //dd('xxx');
        return Password::broker('customers'); //set password broker name according to guard which you have set in config/auth.php
    }

}
