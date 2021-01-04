<?php

namespace App\Http\Controllers\Customer\Auth;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Auth;
use Socialite;
use App\Cart;
use App\Customer;
use Cookie;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    //
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::Payment;

    protected $guard = 'customers';

    protected function guard(){
        return Auth::guard('customers');
    }

    public function __construct()
    {   
        //dd($this->redirectTo);
        //dd()
       // dd(if($this->middleware('guest:customers')->except('cusotmer-login')));
        $this->middleware('guest:customers')->except('logout');
        $this->middleware('checking-guard')->except('logout');
    }

    protected function showLoginForm(){
        //dd('xxxx');
        return view('user.shopattip.user-login');
    }

    protected function login(Request $request)
    {

        $validator = Validator::make($request->input(), [
            // 'first_name' => ['required', 'string', 'max:255'],
            // 'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:8'],
            // 'phone_no' => ['requierd','string'],
        ]);


        if($validator->fails()){
            //dd($validator);
            return redirect()->back()->withErrors($validator);
        }

        if(Auth::guard('customers')->attempt($request->only('email','password'), $request->remember))
        {  
            return redirect()->intended($this->redirectTo);
        }
        $errors = new MessageBag(['password' => ['Email and/or password invalid.']]);
        //$queries = DB::getQueryLog(); 
        //dd($queries);
        ///dd(Auth::guard('customers')->attempt($request->only('email','password'), $request->remember));
        // if unsuccessful
        return redirect()->back()->withInput($request->only('email','remember'))->withErrors($errors);
    }

    public function logout(Request $request){
        
        //dd('xxxxx');
        Auth::guard('customers')->logout();
        $request->session()->flush();

        $request->session()->regenerate();
        return redirect('/customer_login');
    }

    public function getLoginWithGoogle(){

        return Socialite::driver('google')->redirect();
    }

    public function loginWithGoogle(){

        try{
            //dd('xxxx');
            $user = Socialite::driver('google')->user();
            $Customer = Customer::where('google_id',$user->id)->first();
            //dd($user->user['given_name']);
            if($Customer){
                Auth::guard('customers')->login($Customer);
                //dd(Auth::guard('customers')->user());
                return redirect('/checkout');
            }

            $NewCustomer = Customer::create([
                'first_name' => $user->user['given_name'],
                'last_name' => $user->user['family_name'],
                'email' =>  $user->user['email'],
                'password' => Hash::make('google12345'),
                'phone_no' => 'none',
                'google_id' => $user->user['id'],
                'is_guest' => 0,
                'active' => 1,
                
            ]);
            //dd($NewCustomer);
            Auth::guard('customers')->login($NewCustomer);
            //dd(Auth::guard('customers')->user());
            return redirect('/checkout');
        }
        catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function getLoginWithFacebook(){

        return Socialite::driver('facebook')->redirect();
    }

    public function LoginWithFacebook(){

        return Socialite::driver('google')->redirect();
    }

}
