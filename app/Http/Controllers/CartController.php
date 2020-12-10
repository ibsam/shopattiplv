<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\CartDetail;
class CartController extends Controller
{
    //
    public function __construct()
    {   //dd('middleware');
        //$this->middleware('cart');
    }


    public function getCart(Request $request){
        //dd($request);
        //Cart::where('id',$request->cookie('ST_CartID'))->first();
        return view('user.shopattip.shoping-cart');
    }

}
