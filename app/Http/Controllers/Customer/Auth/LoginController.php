<?php

namespace App\Http\Controllers\Customer\Auth;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Cart;


class LoginController extends Controller
{
    //
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::Payment;

    protected $guard = 'customers';

    public function __construct()
    {   
        //dd($this->redirectTo);
        //dd()
       // dd(if($this->middleware('guest:customers')->except('cusotmer-login')));
        $this->middleware('guest:customers')->except('logout');
    }

    protected function showLoginForm(){
        //dd('xxxx');
        return view('user.shopattip.user-login');
    }

    protected function login(Request $request)
    {
        // Validate form data
        
        $validator = Validator::make($request->input(), [
            // 'first_name' => ['required', 'string', 'max:255'],
            // 'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:8'],
            // 'phone_no' => ['requierd','string'],
        ]);

        //dd($validator);
        //dd($request->password);
        if($validator->fails()){
            //dd($validator);
            return redirect()->back()->withErrors($validator);
        }
        //dd(Auth::guard('customers')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember));
        // Attempt to log the user in
        //DB::enableQueryLog();
        if(Auth::guard('customers')->attempt($request->only('email','password'), $request->remember))
        {   
            return redirect()->intended($this->redirectTo);
        }
        //$queries = DB::getQueryLog();
        ///dd(Auth::guard('customers')->attempt($request->only('email','password'), $request->remember));
        // if unsuccessful
        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout(Request $request){
        
        //dd('xxxxx');
        Auth::guard('customers')->logout();
        $request->session()->flush();

        $request->session()->regenerate();
        return redirect('/customer_login');
    }


}
