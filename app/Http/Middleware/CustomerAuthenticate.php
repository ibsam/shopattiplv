<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Auth;
class CustomerAuthenticate extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected function redirectTo($request)
    {   
        //
      //dd($this->guard);
     
        if (!Auth::guard('customers')->user() ) {
         // dd('xxxxxxx');
          return route('customer_login');
        }
       // dd($request);
      //dd($request->expectsJson());
        //return $next($request);
    }
}
