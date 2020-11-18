<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    //

    public function getProductDetail(Request $req){

    	//$Product = Product::with('category.parentCategory.parentCategory')->first();


    	// dd($req);
        return view('user.shopattip.product-single');

    }

    
}
