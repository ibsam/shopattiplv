<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Bus\Queueable;
// use Illuminate\Queue\SerializesModels;

use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;
use Session;
use App\OrderDetail;

class StaticPagesController extends Controller
{
    //

    // public function __construct($OrderDetails)
    // {
    //     //
    //     $this->OrderDetails = $OrderDetails;
    //     // $this->CustomerDetails = $CustomerDetails;
    // }
    public function getContactUs(){
        return view('user.shopattip.contact-us');
    }

    public function contactUs(Request $request){

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactUsMail($request->input()));

        Session::flash('status','We have recieve your email and get back to you with in 24 hours');
        return redirect()->back();
    }

    // public function build()
    // {
    //     $OrderDetails = OrderDetail::select('orders.order_code','orders.customer_name','orders.customer_email','orders.phone_no','orders.address','products.id as pid','products.name','order_details.price','order_details.qty','orders.total_price')
    //     ->join('orders','orders.id' ,'=','order_details.order_id')
    //     ->join('products','products.id','=','order_details.product_id')
    //     ->where('order_details.order_id',33)
    //     ->get();

    //     return view('user.emails.emailthankyou',[
    //         'OrderDetails' =>  $OrderDetails,
    //         // 'CustomerDetails' =>  $this->CustomerDetails,
    //     ]);
    // }
}
