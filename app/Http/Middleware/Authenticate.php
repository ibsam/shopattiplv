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

    private $guard = array();
    protected function authenticate($request,$guard)
    {
        // TO DO: do your desired change
        //dd($guard);
        $this->guard = $guard;
    }
    protected function redirectTo($request)
    {   
        //
       //dd('xxxx');
        if($request->is('checkout') || $request->is('my-account')){
            
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

 
    }
}
