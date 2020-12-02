<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\ProductColor;
use App\ProductReview;
use App\ProductSpacification;

class ProductController extends Controller
{
    //

    public function getProductDetail($url_name,$id){

    	$Products = Product::whereBetween('id',[$id+1,$id+9])->get();
    	// dd($req);
        return view('user.shopattip.product-single',['RelatedProducts' => $Products]);

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
    


    

    public function addReview(Request $request){


        ProductReview::insert($request->input());
        
        $ProductReviews = ProductReview::get();

        return response()->json([
            'ProductReviews' => $ProductReviews
        ]);
    }

    public function getRevivews($id){

        $ProductReviews = ProductReview::where('product_id',$id)->get();
        //dd($ProductReviews);
        return response()->json([
            'ProductReviews' => $ProductReviews
        ]); 
    }


    public function getSpecifications($pid){
        $ProuductSpec = ProductSpacification::where('product_id',$pid)->get();

        return response()->json([
            'ProuductSpec' => $ProuductSpec
        ]); 
    }

    public function getVariations($variant,$id){
        
    }
}
