<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Customer;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
class RegisterController extends Controller
{
    //
        /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::Payment;
    protected $guard = 'customers';
    //protected $guard  = 'customers';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   //dd('xxxx');
        $this->middleware('cart')->except(['register','showRegistrationForm']);
        $this->middleware('guest:customers');
    }

    protected function showRegistrationForm(){

        return view('user.shopattip.user-sign-up');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


    protected function validator(array $data)
    {   //dd("xxx");
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone_no' => ['requierd','string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
       //dd($data);
        return Customer::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone_no' => $data['phone'],
            'is_guest' => 0,
            'active' => 1,
            
        ]);
    }

    protected function register(Request $request){
        //dd($request);
        $validator = $this->validator($request->input());

        if($validator->fails()){
            //dd($validator);
            return redirect()->back()->withErrors($validator);
        }
        //dd('xxxxx');
        $response = $this->create($request->input());
       
      //After registration login the use then redirect
        if (Auth::guard('customers')
            ->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->intended($this->redirectTo);
        }
        else{
            return redirect(); 
        }

    }

    public function apiRegister(Request $request){
        //dd($request);
        $validator = $this->validator($request->input());

        if($validator->fails()){
            //dd($validator);
            return response()->json([
                'status' => false,
                'Validation' => $validator->messages()
            ]);
            //return redirect()->back()->withErrors($validator);
        }
        //dd('xxxxx');
        $response = $this->create($request->input());
       
      //After registration login the use then redirect
        if (Auth::guard('customers')
            ->attempt(['email' => $request->email, 'password' => $request->password])) {

            return response()->json([
                'status' => true
                    
            ]);
        }
        else{
            return response()->json([
                'status' => false,
                'errors' => 'Some issues with the server'
                    
            ]);
        }

    }
}
