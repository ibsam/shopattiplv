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
    // private $guard;
    // public function __construct($guard){
    //     $this->guard = $guard;
    // }
    protected function redirectTo($request)
    {   
        //
      // dd($this->guard);
       
        if($request->is('checkout')){
            
            if (! $request->expectsJson()) {
               //dd($request);
               
                return route('customer_login');
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
