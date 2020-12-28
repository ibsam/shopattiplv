<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Auth;
use App\Cart;
class CheckingGuardMiddleware
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
        if(Auth::guard('customers')->check()){
            //dd($request->cookie('ST_CartID'));
           if($request->cookie('ST_CartID')){
                Cart::where('id',$request->cookie('ST_CartID'))->update([
                    'customer_id' => Auth::guard('customers')->user()->id
                    
                ]); 
                //dd($request->cookie('ST_CartID'));;
                return redirect(RouteServiceProvider::Payment);
           }
           else{
                return redirect('/');
           }

           
            
        }
        return $next($request);
    }
}
