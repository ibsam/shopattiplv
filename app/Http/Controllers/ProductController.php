<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function productDetail(){

        return view('user.product-single');

    }
}
