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
    public function Shop(Type $var = null)
    {
        return view('user.shopattip.shop');
    }

    public function ShopProducts(Type $var = null){

    $data = Product::orderBy('id')->paginate(10);
    return response()->json($data);
    
        // $data = Product::orderBy('id')->get();
        // // dd($data);
        // return response()->json($data);
    }

    
}
