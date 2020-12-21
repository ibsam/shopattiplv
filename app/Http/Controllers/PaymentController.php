<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Cart;
use App\CartDetail;
use App\CustomerDetail;

class PaymentController extends Controller
{   
    //
    public function __construct()
    {   
        //dd('xxxx');
        $this->middleware('auth:customers');
    }
    
    public function index(){

        $Cart = Cart::select('id')->where('id',Auth::guard('customers')->user()->id)->first();
        // dd($Cart);
        $CartDetail = CartDetail::select('cart_details.id','cart_details.qty','cart_details.price','cart_details.cart_id','cart_details.stock','products.id as pid','products.name','products.url_name')
                    ->join('products','cart_details.product_id', '=','products.id')
                    ->where('cart_details.cart_id',$Cart->id)
                    ->get();

        return view('user.shopattip.checkout',['CartDetail' => $CartDetail]);
    }

    public function addPaymentInfo(Request $request){
       //dd($request->input());
      $validate =  Validator::make($request->input(),[
        'email' => ['required', 'string', 'email',],
        'first_name' => ['required', 'string'],
        'last_name' => ['required','string'],
        'address1' => ['required','string'],
       ]);

        if($validate->fails()){
            return redirect()->back()->withError($validate);
        }

        $Customer = CustomerDetail::insert($request->only('customer_id','first_name','last_name','email','address1','address2','country','city','phone_no','zip_code'));


        if(!empty($Customer)){
            return view('user.shopattip.orderdetail');
        }
        else{
            return response('ERROR');
        }
        // if($Customer){

        // }

    }
}
