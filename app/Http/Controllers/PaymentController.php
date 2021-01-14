<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

use Auth;
use App\Cart;
use App\CartDetail;
use App\CustomerDetail;
use App\Customer;
use App\Product;
use App\ProductVariation;
use App\Order;
use App\OrderDetail;
use App\Mail\OrderMail;
use Cookie;

class PaymentController extends Controller
{
    //
    public function __construct()
    {   
        //dd('xxxx'); 
        $this->middleware('customer-auth:customers');
    }
    
    public function index(Request $request){
        //dd(Auth::guard('customers')->user()->id);
        if(!Auth::guard('customers')->user()){
            return redirect('/customer_login');
        }
        Cart::where('id',$request->cookie('ST_CartID'))->update([
            'customer_id' => Auth::guard('customers')->user()->id
            
        ]); 
        $Cart = Cart::select('id')->where('customer_id',Auth::guard('customers')->user()->id)->first();
        if(empty($Cart)){
            return redirect('/');
        }
       
        $CartDetail = CartDetail::select('cart_details.id','cart_details.qty','cart_details.price','cart_details.cart_id','cart_details.stock','products.id as pid','products.name','products.url_name')
                    ->join('products','cart_details.product_id', '=','products.id')
                    ->where('cart_details.cart_id',$Cart->id)
                    ->get();
        
        if(count($CartDetail) == 0){
            return redirect('/');
        }
        $CustomerDetail = CustomerDetail::where('customer_id',Auth::guard('customers')->user()->id)->get();
        
        if(count($CustomerDetail) > 0 ){
            return redirect('/payment');
        }

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

        $Customer = CustomerDetail::insert($request->only('customer_id','first_name','last_name','email','address1','address2','country','city','phone_no','zip_code','state'));



        if(!empty($Customer)){
            $Customer_detail = Customer::with('customerDetail')->where('id',Auth::guard('customers')->user()->id)->first();
            $Cart = Cart::select('id')->where('customer_id',Auth::guard('customers')->user()->id)->first();
            //  dd(Auth::guard('customers')->user()->id);
            $CartDetail = CartDetail::select('cart_details.id','cart_details.qty','cart_details.price','cart_details.cart_id','cart_details.stock','products.id as pid','products.name','products.url_name',)
                        ->join('products','cart_details.product_id', '=','products.id')
                        ->where('cart_details.cart_id',$Cart->id)
                        ->get();
            $totprice =0;

            foreach($CartDetail as $Cartdet){
                $totprice += $Cartdet->price * $Cartdet->qty;
            }

            return view('user.shopattip.orderdetail',[
                   'total_price' => $totprice,
                  'Customer_detail' => $Customer_detail,
                  'Cart_detail' => $CartDetail,

            ]);
        }
        else{
            return response('ERROR');
        }
        // if($Customer){

        // }

    }

    public function setItemsInOrder(Request $request){

        $Cart = Cart::with('cartDetail')->where('customer_id',Auth::guard('customers')->user()->id)->first();
        $address = CustomerDetail::select('address1')->where('customer_id',Auth::guard('customers')->user()->id)->get();
        $order = new Order();

        $order->customer_id = Auth::guard('customers')->user()->id;
        $order->customer_name = Auth::guard('customers')->user()->first_name . ' ' . Auth::guard('customers')->user()->last_name;
        $order->customer_email = Auth::guard('customers')->user()->email;
        $order->phone_no = Auth::guard('customers')->user()->phone_no;

        $order->address = $address[0]->address1;
        $order->order_state_id = 1;
        $order->payment_state_id = 1;
        $order->order_code = 'SAT-' . rand();
        $order->total_price = $request->tot_price;
        $order->save();
        //dd($Cart->cartDetail);
        foreach($Cart->cartDetail as $CartDetail){
            $orderdetail = new OrderDetail();

            $orderdetail->order_id = $order->id;
            $orderdetail->price = $CartDetail->price;
            $orderdetail->qty = $CartDetail->qty;
            $orderdetail->product_id = $CartDetail->product_id;
            $orderdetail->variation = $CartDetail->variation;
            $orderdetail->save();

            $prod =  Product::where('id',$CartDetail->product_id)->first();
            if($prod->is_static === 1){
            $prod->current_stock = $prod->current_stock - $CartDetail->qty;

            $prod->update();
            }
            else {
                $prodVar = ProductVariation::where('product_id',$CartDetail->product_id)->where('variation',$CartDetail->variation)->first();
                //dd($prodVar->stock);
                if(!empty($prodVar)){
                    $prodVar->stock = $prodVar->stock - $CartDetail->qty;
                    $prodVar->update();
                }

            }
           
           
           
        }
       
      // dd(config('MAIL_FROM_ADDRESS'));

        $Cart = Cart::where('customer_id',Auth::guard('customers')->user()->id)->first();

        CartDetail::where('cart_id',$Cart->id)->delete();
        $Cart->delete();
        Cookie::queue(
            Cookie::forget('ST_CartID')
        );
        $OrderDetails = OrderDetail::select('orders.order_code','orders.customer_name','orders.customer_email','orders.phone_no','orders.address','products.id as pid','products.name','order_details.price','order_details.qty','orders.total_price')
        ->join('orders','orders.id' ,'=','order_details.order_id')
        ->join('products','products.id','=','order_details.product_id')
        ->where('order_details.order_id',$order->id)
        ->get();
        
       // Mail::to(Auth::guard('customers')->user()->email)->send(new OrderMail($OrderDetails));
        //Mail::to(env('MAIL_FROM_ADDRESS'))->send(new OrderMail($OrderDetails));

        return view('user.shopattip.thankyou',['OrderDetails' => $OrderDetails]);


  
    
    }

    public function getOrderDetail(){
        
        $Cart = Cart::select('id')->where('customer_id',Auth::guard('customers')->user()->id)->first();
             
        $CartDetail = CartDetail::select('cart_details.id','cart_details.qty','cart_details.price','cart_details.cart_id','cart_details.stock','products.id as pid','products.name','products.url_name')
                    ->join('products','cart_details.product_id', '=','products.id')
                    ->where('cart_details.cart_id',$Cart->id)
                    ->get();
        
        if(count($CartDetail) == 0){
            return redirect('/');
        }

        $totprice = 0;
        $Customer_detail = Customer::with('customerDetail')->where('id',Auth::guard('customers')->user()->id)->first();
        foreach($CartDetail as $Cartdet){
            $totprice += $Cartdet->price * $Cartdet->qty; 
        }

        return view('user.shopattip.orderdetail',[
            'total_price' => $totprice,
            'Customer_detail' => $Customer_detail,
            'Cart_detail' => $CartDetail,

        ]);
    }



}
