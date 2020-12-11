<?php

namespace App\Http\Middleware;

use Closure;
use App\Cart;
use App\CartDetail;
use Illuminate\Support\Facades\Cookie;
use Carbon\Carbon;



class CartMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //dd(",,,,,,,,");
        if($this->getCookie($request) == null){
            
            $Cart = new Cart();
            $Cart->customer_id = 0;
            $Cart->expiry_date =  Carbon::now()->addMonths(3);
            $Cart->save();
            
            $CartDetail = new CartDetail();
            $CartDetail->cart_id = $Cart->id;
            $CartDetail->product_id = $request->product_id;
            $CartDetail->qty = $request->qty;
            //$CartDetail->variation = $request->variation;
            $CartDetail->stock = $request->stock;
            $CartDetail->price = $request->price;
            $CartDetail->save();

            

            $dt = Carbon::createFromFormat('Y-m-d H:i:s', $Cart->expiry_date);
            $expiryMinutes = $dt->addMonths(3)->diffInMinutes($Cart->expiry_date);
            $cookie = $this->setcookie($Cart->id,$expiryMinutes);

            $response = $next($request);
            return $response->withCookie($cookie);



        } else {
            //dd('xxxxxxx');
            $cookie = $this->getCookie($request);
            $this->setCartsItems($request,$cookie);          
           // $cookie = $this->getCookie($request);
            //$response = $next($request);
            //return $response->withCookie($cookie);

        }

        $response = $next($request);
        return $response->withCookie($cookie);
    }


    public function setCookie($cartId, $expiryMinutes){
       
        $cookie = cookie('ST_CartID',$cartId, $expiryMinutes);
       // dd($cookie);
        return $cookie;
    }

    public function getCookie($request){
        $value = $request->cookie('ST_CartID');

        //dd($value);
        return $value;
    }

    public function setCartsItems($request, $cartId = 0){

            
            $CartDetail  = CartDetail::where('cart_id',$cartId)->where('product_id',$request->product_id)->first();
       
            /*if($CartDetail == null){
                $CartDetail = new CartDetail();
                $CartDetail->cart_id = $cartId;
                $CartDetail->product_id = $request->product_id;
                $CartDetail->qty = $request->prod_qty;
                $CartDetail->save();
            } else {
                $CartDetail->cart_id = $cartId;
                $CartDetail->product_id = $request->product_id;
                $CartDetail->qty += $request->prod_qty;
                $CartDetail->save();
            }*/

            if($CartDetail == null){
                $CartDetail = new CartDetail();
                $CartDetail->cart_id = $cartId;
                $CartDetail->product_id = $request->product_id;
                $CartDetail->qty = $request->qty;
                $CartDetail->price = $request->price;
                $CartDetail->stock = $request->stock;
                $CartDetail->save();
            }
            else{

                $CartDetail->cart_id = $cartId;
                $CartDetail->product_id = $request->product_id;
                $CartDetail->qty += $request->qty;
                $CartDetail->price = $request->price;
                $CartDetail->stock = $request->stock;
                $CartDetail->save();
            }
 

    }

}
