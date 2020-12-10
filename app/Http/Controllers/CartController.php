<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\CartDetail;
class CartController extends Controller
{
    //
    private $Cookie;
    public function __construct()
    {   //dd('middleware');
        //$this->middleware('cart');
    }

    public function getCookie(){
        return $this->Cookie;
    }

    public function setCookie($Cookie){
        $this->Cookie = $Cookie; 
    }


    public function getCart(Request $request){
        //dd($request);
        //Cart::where('id',$request->cookie('ST_CartID'))->first();
        $this->setCookie($request->cookie('ST_CartID'));
        return view('user.shopattip.shoping-cart');
    }

    public function apiGetCookie(){


    }

}
