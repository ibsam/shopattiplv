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
<<<<<<< HEAD
      // dd($this->guard);
       
        if($request->is('checkout')){
=======
       //dd('xxxx');
        if($request->is('checkout') || $request->is('my-account')){
>>>>>>> 4323a88fc9a9947363ac1cda9a875ede7a07861c
            
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
