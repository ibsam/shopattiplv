<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Customer;
use Auth;
class CustomerController extends Controller
{
    //
    public function __construct()
    {   
        //dd('xxxx'); 
        $this->middleware('auth:customers');
    }

    public function profile(){

        $Customer = Customer::with(['orders','orders.orderstate','customerDetail'])
                    ->where('id',Auth::guard('customers')->user()->id)
                    ->first();
        //dd($Customer);
        return view('user.shopattip.user-account',[
            'Customer' => $Customer
        ]);
        

    }
    public function update(Request $request){

        $validator = $this->validator($request->input());

        if($validator->fails()){
           // dd($validator);
            return redirect()->back()->withErrors($validator);
        }
        
        $Customer = Cusotmer::insert($request->except('_token'));

        return redirect('/payment');
    }

    public function validator(array $data)
    {   //dd("xxx");
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone_no' => ['required','string'],
        ]);
    }
}
