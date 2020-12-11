<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
class CategoryController extends Controller
{
    //view category
    public function Category(Type $var = null)
    {
        return view('user.shopattip.shop');
    }

    public function getProducts($url_name){
        $Category = Category::select('id')->where('url_name',$url_name)->first();

        $Products = Product::select('id','name','current_price')->where('category_id',$Category->id)->get();

        return response()->json($Products);
    }

    //get all products
    public function ShopProducts(Request $request){

        //        dd($request->search);
        $data = Product::orderBy('id')->paginate(10);
        return response()->json($data);

    }

    //search products
    public function SearchShopProducts(Request $request){

        $data = Product::orderBy('id')->where('name','like' ,'%'.$request->search.'%')->paginate(10);
        return response()->json($data);

    }
    //Filter Shop Products
    public function FilterShopProducts(Request $request){

        $Categorydata = Category::select('id')->whereIn('category_id' ,$request->Id)->get();
        $subcat= [];
        foreach ($Categorydata as $sub){
            array_push($subcat,$sub->id);

        }
//           dd($subcat);
        $data = Product::orderBy('id')->whereIn('category_id' ,$subcat)->paginate(10);
        //   dd($data[0]);
        return response()->json($data);

    }
    //Category products
    public function CategoryShopProducts(Request $request){

        $catId = Category::select('id')->where('url_name' ,$request->category)->get();
        $Categorydata = Category::select('id')->whereIn('category_id' ,$catId)->get();
        $subcat= [];
        foreach ($Categorydata as $sub){
            array_push($subcat,$sub->id);

        }
//           dd($subcat);
        $data = Product::orderBy('id')->whereIn('category_id' ,$subcat)->paginate(10);
        return response()->json($data);

    }



    // fetch all category
    public function getAllCategory()
    {
        $data = Category::with('childCategory.childCategory')->select('id','name','banner')->where('active',1)->where('category_type_id',1)->where('category_id',0)->get();
        return json_encode($data);
    }


}
