<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;
use App\Cart;
class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {   
        
        if($guard == "customers" &&  Auth::guard($guard)->check()){
            //dd($request->cookie('ST_CartID'));
            //dd(Auth::guard($guard));
            Cart::where('id',$request->cookie('ST_CartID'))->update([
                'customer_id' => Auth::guard('customers')->user()->id
                
            ]); 
           
            return redirect(RouteServiceProvider::Payment);
        }
        else if ($guard=="web" && Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
