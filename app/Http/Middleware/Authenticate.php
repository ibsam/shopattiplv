<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

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
       //dd('xxxxx');
        if($request->is('checkout')){
            
            if (! $request->expectsJson()) {
               // dd($request);
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
