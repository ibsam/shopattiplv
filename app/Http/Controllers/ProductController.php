<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\ProductColor;
use App\ProductReview;
use App\ProductSpacification;
use App\ProductVariation;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //

    public function getProductDetail($url_name,$id){

    	$Products = Product::whereBetween('id',[$id+1,$id+9])->get();
    	// dd($req);
        return view('user.shopattip.product-single',['RelatedProducts' => $Products]);

    }

    public function getProductDetailApi($id){
        
        if(Auth::guard('customers')->user()){
            $bit = 1;
        }else{
            $bit =0;
        }
        $Product = Product::with(['category.parentCategory.parentCategory','vendor:id,name','brand:id,name'])
                    ->where('id',$id)->first();
        //dd(json_decode($Product->options)); 
       // dd($Product->category->parentCategory); 
       $Color = ProductColor::whereIn('id',json_decode($Product->color))->get();
        return response()->json([
            'Product' =>   $Product,
            'Product_Variants' => json_decode($Product->options),
            'Product_Color' => json_decode($Color),
            'bit' => $bit,
        ]);
       // dd(json_decode($Product->options)); 
       // dd($Product->category->parentCategory); 
        //return response()->json($Product);
        //dd($id);
    }    
    
    public function Brand(Type $var = null)
    {
        return view('user.shopattip.shop');
    }
    


    

    public function addReview(Request $request){


        ProductReview::insert($request->input());
        
        $ProductReviews = ProductReview::where('product_id',$request->product_id)->get();

        return response()->json([
            'ProductReviews' => $ProductReviews
        ]);
    }

    public function getRevivews($id){

        $ProductReviews = ProductReview::where('product_id',$id)->get();
       // dd($ProductReviews);
        return response()->json([
            'ProductReviews' => $ProductReviews
        ]); 
    }

    public function getLatestReviews($id){
        $TotalStar = ProductReview::where('product_id',$id)->orderBy('id','desc')->limit(5)->get();
        $FiveStar = ProductReview::where('product_id',$id)->orderBy('id','desc')->where('stars',5)->limit(5)->get();
        $FourStar = ProductReview::where('product_id',$id)->orderBy('id','desc')->where('stars',4)->limit(5)->get();
        $ThreeStar = ProductReview::where('product_id',$id)->orderBy('id','desc')->where('stars',3)->limit(5)->get();
        $TwoStar = ProductReview::where('product_id',$id)->orderBy('id','desc')->where('stars',2)->limit(5)->get();
        $OneStar = ProductReview::where('product_id',$id)->orderBy('id','desc')->where('stars',1)->limit(5)->get();

        return response()->json([
            'TotalStar' => count($TotalStar),
            'FiveStar' => count($FiveStar),
            'FourStar' => count($FourStar),
            'ThreeStar' => count($ThreeStar),
            'TwoStar' => count($TwoStar),
            'OneStar' => count($OneStar),
        ]);

    }

    public function getSpecifications($pid){
        $ProuductSpec = ProductSpacification::where('product_id',$pid)->get();

        return response()->json([
            'ProuductSpec' => $ProuductSpec
        ]); 
    }

    public function getVariations($variant,$id){
        
        $ProductSpecs = ProductVariation::select('price','stock')->where('variation',$variant)->where('product_id',$id)->first();
        
        //print_r($ProductSpecs);
        return response()->json([
            'ProductSpecs' => $ProductSpecs,
            //'stock' => $ProductSpecs->stock
        ]); 
    }
}
