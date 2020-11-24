<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    //

    public function getProductDetail($url_name,$id){

    	//$Product = Product::with('category.parentCategory.parentCategory')->first();
    	// dd($req);
        return view('user.shopattip.product-single');

    }

    public function getProductDetailApi($id){
        $Product = Product::with(['category.parentCategory.parentCategory','vendor:id,name','brand:id,name'])
                    ->where('id',$id)->first();
<<<<<<< Updated upstream
        dd(json_decode($Product->options)); 
=======
       // dd($Product->category->parentCategory); 
>>>>>>> Stashed changes
        return response()->json($Product);
        //dd($id);
    }

    
}
