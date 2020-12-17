<?php

namespace App\Http\Controllers\Customer\Auth;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Customer;

class LoginController extends Controller
{
    //
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::Payment;

    protected $guard = 'customers';

    public function __construct()
    {   
        //dd($this->redirectTo);
        $this->middleware('guest')->except('logout');
    }

    public function login(){
        //dd('xxxx');
        return view('user.shopattip.user-login');
    }

    public function loggedIn(Request $request){
       // dd("xxxxx");
        //return view('user.shopattip.user-login');

    }


}
