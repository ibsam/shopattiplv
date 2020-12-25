<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Auth;
use App\Cart;
use App\Providers\RouteServiceProvider;
class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {   
        //
       //dd('xxxx');
        if($request->is('checkout')){
            
            if (! $request->expectsJson()) {
               //dd($request);
               
                return route('customer_login');
            }
            else{
                
                if(Auth::guard('customers')->check()){
                    //dd($request->cookie('ST_CartID'));
                   if($request->cookie('ST_CartID')){
                        Cart::where('id',$request->cookie('ST_CartID'))->update([
                            'customer_id' => Auth::guard('customers')->user()->id
                            
                        ]); 
                        //dd($request->cookie('ST_CartID'));;
                        //return redirect(RouteServiceProvider::Payment);
                   }
                   else{
                        return redirect('/');
                   }
        
                   
                    
                }
            }
        }
        else{
            if (! $request->expectsJson()) {
                return route('login');
            }
        }
      //dd($request->expectsJson());
      return $next($request);
    }
}
