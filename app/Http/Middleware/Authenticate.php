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

    //private $guard = array();
 
    protected function redirectTo($request)
    {   
        //
        //dd($this->guard);
        
        // else{
            
          if (! $request->expectsJson()) {
            //dd(route('login'));
            return route('admin.login');
          }
        // }      

 
    }
}
