<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\ProductColor;

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
        //dd(json_decode($Product->options)); 
       // dd($Product->category->parentCategory); 
       $Color = ProductColor::whereIn('id',json_decode($Product->color))->get();
        return response()->json([
            'Product' =>   $Product,
            'Product_Variants' => json_decode($Product->options),
            'Product_Color' => json_decode($Color),
            
        ]);
       // dd(json_decode($Product->options)); 
       // dd($Product->category->parentCategory); 
        return response()->json($Product);
        //dd($id);
    }    
    
    public function Brand(Type $var = null)
    {
        return view('user.shopattip.shop');
    }
    

    



    
}
