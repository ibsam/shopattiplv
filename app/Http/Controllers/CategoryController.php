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

        $data = Product::with('productReviews')->where('product_type_id' ,1)->orderBy('id','desc')->paginate(10);
        return response()->json($data);

    }

    //search products
    public function SearchShopProducts(Request $request){

        $data = Product::orderBy('id','desc')->where('name','like' ,'%'.$request->search.'%')->paginate(10);
        return response()->json($data);

    }
    //Filter Shop Products
    public function FilterShopProducts(Request $request){

        $Categorydata = Category::select('id')->whereIn('category_id' ,$request->Id)->get();
        $subcat= [];
        foreach ($Categorydata as $sub){
            array_push($subcat,$sub->id);

        }
        $data = Product::orderBy('id','desc')->whereIn('category_id' ,$subcat)->paginate(10);
        //   dd($data[0]);
        return response()->json($data);

    }

    //Category products
    public function CategoryShopProducts(Request $request){

        $catId = Category::select('id','category_level')->where('url_name' ,$request->category)->where('category_type_id',1)->get();
//dd($catId);
        if($catId[0]->category_level == 2){
            $Categorydata = Category::select('id')->where('category_id' ,$catId[0]->id)->get();
//            dd($Categorydata);
            $subcat= [];
            foreach ($Categorydata as $sub){
                array_push($subcat,$sub->id);

            }
            $data = Product::orderBy('id','desc')->whereIn('category_id' ,$subcat)->paginate(10);
//                        dd($data);
        }else{
            $data = Product::orderBy('id','desc')->where('category_id' ,$catId[0]->id)->paginate(10);
        }
        return response()->json($data);

    }

    // fetch all category
    public function getAllCategory()
    {
        $data = Category::with('childCategory.childCategory')->select('id','name','banner')->where('active',1)->where('category_type_id',1)->where('category_id',0)->get();
        return json_encode($data);
    }

#############################   tip mart functons ###############################################

    //view category
    public function tipmartCategory(Type $var = null)
    {
        return view('user.tipmart.shop');
    }

    // fetch all category
    public function tipmartgetAllCategory()
    {
        $data = Category::with('childCategory.childCategory')->select('id','name','banner')->where('active',1)->where('category_type_id',2)->where('category_id',0)->get();
        return json_encode($data);
    }

    //get all products
    public function tipmartShopProducts(Request $request){

        $data = Product::with('productReviews')->where('product_type_id' ,2)->orderBy('id','desc')->paginate(10);
        return response()->json($data);

    }

    //search products
    public function tipmartSearchShopProducts(Request $request){

        $data = Product::orderBy('id','desc')->where('name','like' ,'%'.$request->search.'%')->where('product_type_id' ,2)->paginate(10);
        return response()->json($data);

    }

    //Filter Shop Products
    public function tipmartFilterShopProducts(Request $request){

        $Categorydata = Category::select('id')->whereIn('category_id' ,$request->Id)->where('category_type_id' ,2)->get();
        $subcat= [];
        foreach ($Categorydata as $sub){
            array_push($subcat,$sub->id);

        }
        $data = Product::orderBy('id','desc')->whereIn('category_id' ,$subcat)->paginate(10);
        //   dd($data[0]);
        return response()->json($data);

    }

    //Category products
    public function tipmartCategoryShopProducts(Request $request){

        $catId = Category::select('id','category_level')->where('url_name' ,$request->category)->where('category_type_id' ,2)->get();
    //    dd($catId[0]->category_level);
        if($catId[0]->category_level == 1){
            // return($catId);
            $Categorydata = Category::select('id')->where('category_id' ,$catId[0]->id)->get();
            $subcat= [];
            $childSubCat= [];
            foreach ($Categorydata as $sub){
                array_push($subcat,$sub->id);

            }
            $childCategorydata = Category::select('id')->whereIn('category_id' ,$subcat)->get();
            foreach ($childCategorydata as $childSub){
                array_push($childSubCat,$childSub->id);

            }
            // return($childCategorydata);
            $data = Product::orderBy('id','desc')->whereIn('category_id' ,$childSubCat)->paginate(10);
        }
        elseif($catId[0]->category_level == 2){
            $Categorydata = Category::select('id')->whereIn('category_id' ,$catId[0]->id)->get();
            $subcat= [];
            foreach ($Categorydata as $sub){
                array_push($subcat,$sub->id);

            }
            $data = Product::orderBy('id','desc')->whereIn('category_id' ,$subcat)->paginate(10);
        }else{
            $data = Product::orderBy('id','desc')->whereIn('category_id' ,$catId)->paginate(10);
        }


        return response()->json($data);

    }


}
