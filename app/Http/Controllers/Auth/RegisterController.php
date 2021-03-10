<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Admin\VendorRegisterController;

use GuzzleHttp\Psr7\Request;

class RegisterController extends Controller
{
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function showRegistrationForm(){
        return view('admin.auth.register');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        // dd($data);
        $userData =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 2,
        ]);
        $vendor = new VendorRegisterController();
        $vendorData['user_id'] = $userData->id;
        $vendorData['name']    = $data['name'];
        $vendorData['vendor_type_id'] = $data['vendor_type_id'];
        if($data['vendor_type_id']==1)
        {
            $vendorData['vendor_type'] = "General";
        }
        else
        {
            $vendorData['vendor_type'] = "Groccery";
        }
        $vendorData['email'] = $data['email'];
        $vendorData['company'] = $data['company'];
        $vendorData['address'] = $data['address'];
        $vendorData['phone'] = $data['phone'];
        $vendorData['password'] =  $userData->password;
        // $vendorData['create_timestamp'] = date('y-m-d');
        $vendor->insert($vendorData);
        return $userData;
    }
}
