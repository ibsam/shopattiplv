<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\CartDetail;
use Illuminate\Support\Facades\Cookie;
class CartController extends Controller
{
    //
    //private static $Cookie;
    public function __construct()
    {   //dd('middleware');
        //$this->middleware('cart');
    }

    public function getCookie(){
        return $this->Cookie;
    }

    public function setCookie($Cookie){
        $this->Cookie = $Cookie; 
        //dd($this->getCookie());
    }


    public function viewCart(Request $request){
        //dd($request);
        //Cart::where('id',$request->cookie('ST_CartID'))->first();
        //$this->setCookie($request->cookie('ST_CartID'));
        //dd($this->getCookie());
        
        return view('user.shopattip.shoping-cart');
    }

    public function apiGetCookie(){

        //dd();
        return response()->json([
            'status' => true,
            'Cookie' => Cookie::get('ST_CartID')
        ]);
    }

    public function apiGetCart($id){

        $Cart = Cart::select('id')->where('id',$id)->first();

        $CartDetail = CartDetail::select('cart_details.id','cart_details.qty','cart_details.price','cart_details.cart_id','cart_details.stock','products.id as pid','products.name','products.url_name')
                    ->join('products','cart_details.product_id', '=','products.id')
                    ->where('cart_details.cart_id',$Cart->id)
                    ->get();

        return response()->json([
            'status' => true,
            'CartDetail' => $CartDetail
        ]);

    }

    public function apiUpdateCart(Request $request){

        $CartDetail = CartDetail::where('id',$request->id)->first();

        $CartDetail->qty  = $request->qty;
        $res = $CartDetail->save();

        if($res){
            return response()->json([
                'status' => true
            ]);
        }
        else{
            return response()->json([
                'status' => false
            ]);
        }
    }

    public function apiDeleteCart($id){
       // dd($cartid);
        CartDetail::where('id',$id)->delete();

        // $CartDetail = CartDetail::select('cart_details.id','cart_details.qty','cart_details.price','cart_details.cart_id','cart_details.stock','products.id as pid','products.name','products.url_name')
        //             ->join('products','cart_details.product_id', '=','products.id')
        //             ->where('cart_details.cart_id',$cartid)
        //             ->get();

        return response()->json([
            'status' => true,
            //'' => $CartDetail
        ]);

    }

}
