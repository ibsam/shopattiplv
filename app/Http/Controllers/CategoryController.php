<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
class CategoryController extends Controller
{
    //
    public function getProducts($url_name){
        $Category = Category::select('id')->where('url_name',$url_name)->first();
        
        $Products = Product::select('id','name','current_price')->where('category_id',$Cateegory->id)->get();

        return response()->json($Products);
    }

    
}
