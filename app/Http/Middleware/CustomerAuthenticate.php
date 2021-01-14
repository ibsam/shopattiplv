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
    protected function authenticate($request,$guard)
    {
        // TO DO: do your desired change
        //return redirect('/login');
        $this->guard = $guard;
        //dd($guard);
        
        $this->redirectTo($request);

        
    }
    protected function redirectTo($request)
    {   
        //
      //dd($this->guard);
     
        if ($this->guard == 'customers' ) {
         // dd('xxxxxxx');
         if(!$request->exceptsJson()){
            return route('customer_login');
         }
          
        }
       // dd($request);

    }
}
