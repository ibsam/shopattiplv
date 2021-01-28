<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Customer;
use App\CustomerDetail;
use Auth;
class CustomerController extends Controller
{
    //
    public function __construct()
    {   
        //dd('xxxx'); 
        $this->middleware('customer-auth');
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

        // get Customer Detail
        public function getCustomerDetail($id){
            $CustomerDetail = CustomerDetail::where('customer_id',$id)->get();

            return response()->json([
                'CustomerDetail' => $CustomerDetail
            ]);
        }
        //Updating Customers Billing Address
        public function updateCustomerBillingAddress($isbiling , $customerid){
            CustomerDetail::where('customer_id',$customerid)->update([
                'is_billing' => 0
            ]);
        

            $CustomerDetail = CustomerDetail::where('id',$isbiling)->first();
            $CustomerDetail->is_billing = 1;
            $CustomerDetail->update();
            // dd($CustomerDetail);
            // exit();
            return response()->json([
                'status' => true
            ]);


        }
        public function addNewAddressDetail(Request $request){
            // dd($request->state);
            // exit();
            CustomerDetail::where('customer_id',$request->customer_id)->update([
                'is_billing' => 0
            ]);

            $CustomerDetail = CustomerDetail::insert([
            'customer_id' => $request->customer_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_no' => $request->phone_no,
            'email' => $request->email,
            'company_name' => $request->company_name,
            'country' => $request->country,
            'address1' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'is_billing' => 1
            

            ]);
            // dd($CustomerDetail);
        
            return response()->json([
                'state' => true,
                'customer_info' => [
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'phone_no' => $request->phone_no,
                    'email' => $request->email,
                    'address1' => $request->address,
                    ],
            ]);

        }
}
