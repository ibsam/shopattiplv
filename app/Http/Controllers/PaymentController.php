<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{   
    //
    public function __construct()
    {   
        //dd('xxxx');
        $this->middleware('auth:customers');
    }
    
    public function index(){
        return view('user.shopattip.checkout');
    }
}
