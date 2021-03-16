<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Commission;
use App\ProductVariation;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Brand;
use App\User;
use App\Category;
use DataTables;
use Illuminate\Filesystem\Filesystem;

class ProductController extends Controller
{

    public function __construct(){
        $this->middleware('auth:web');
    }

    public function index(Request $request)
    {
      $pageConfigs = ['showMenu' => true];
        if ($request->ajax()) {

            $user_id = auth()->user()->id;
            $user    = User::findorfail($user_id);
            if( $user_id ==1)
            {
                $added_by_id = $user_id;
                $data        = Product::orderBy('id','desc')->get();
            }
            else
            {
                $vendor_id   = $user->vendor['id'];
                $added_by_id = $vendor_id;
                $data        = Product::where('added_by_id',$added_by_id)->orderBy('id','desc')->get();
            }    
        
        return DataTables::of($data)
          ->addIndexColumn()
          ->addColumn('action', function ($row) {

            return view('admin.pages.components.crudPannelButtons')->with(['data' => $row, 'model' => 'product']);
          })
          ->editColumn('logo', function ($row) {
            return  view('admin.pages.components.listImage')->with(['data' => $row, 'model' => 'product']);
          })

          ->editColumn('created_at', function ($vendor) {
            return $vendor->created_at ? with(new Carbon($vendor->created_at))->format('d-m-Y') : '';
          })
          ->editColumn('updated_at', function ($vendor) {
            return $vendor->updated_at ? with(new Carbon($vendor->updated_at))->format('d-m-Y') : '';;
          })
          ->escapeColumns([])
          ->rawColumns(['action'])
          ->make(true);
        }
      $breadcrumbs = [
        ['link' => "/admin", 'name' => "Dashboard"],
        ['link' => route('product.index'), 'name' => "Product"],
        ['name' => "Products list"]
      ];
      return view('admin.pages.product.index',  [ 'breadcrumbs' => $breadcrumbs,'pageConfigs'=>$pageConfigs]);
    }
    public function create()
    {
        $user_id = auth()->user()->id;
        $user    = User::findorfail($user_id);
        if($user_id == 1)
        {
            $Categories = Category::select('id','name','category_level','level_name')->where('active',1)->get();
            $Brands     = Brand::orderBy('id','desc')->get();
        }
        else
        {
            $vendor_type_id = $user->vendor['vendor_type_id'];

            // dd($vendor_type_id);
            $Categories     = Category::select('id','name','category_level','level_name')
                                        ->where('active',1)
                                        ->where('category_type_id',$vendor_type_id)->get();
            $Brands         = Brand::orderBy('id','desc')
                                        ->where('brand_type_id',$vendor_type_id)->get();
        }
        
        $breadcrumbs = [
            ['link' => "/admin", 'name' => "Dashboard"],
            ['link' => route('product.index'), 'name' => "Product"],
            ['name' => "Product"]
          ];
          return view('admin.pages.product.create-form',
          [
            'breadcrumbs' => $breadcrumbs,
            'Categories' => $Categories,
            'Brands' => $Brands
          ]);
    }

    public function store(Request $request)
    {
        $commission = Commission::select('percentage')->where('status',1)->first();
        $user_id    = auth()->user()->id;
        $user       = User::findorfail($user_id);
        $product    = new Product;
        if( $user_id == 1)
        {
            $added_by_id              = $user_id;
            $added_by_type            = "admin";
            $product->product_type_id = $request->product_type_id;
        }
        else
        {
           
            $vendor_id                = $user->vendor['id'];
            $vendor_type_id           = $user->vendor['vendor_type_id'];
            $added_by_id              = $vendor_id;
            $added_by_type            = "vendor";
            $product->product_type_id = $vendor_type_id;
        }
 
        if($commission != null){
            $commission  = $commission['percentage'];
            $price       = ($commission / 100) * $request->unit_price;
        }else{
            $price       = 0;
        }
        
        $product->added_by_id    = $added_by_id;
        $product->added_by_type  = $added_by_type;
        $product->name           = $request->name;
        $product->category_id    = $request->category_id;
        $product->brand          = $request->brand_id;
        $product->current_stock  = $request->current_stock;
        $product->description    = $request->description;
        $product->sale_price     = $price+intval($request->unit_price);
        $product->actual_price   = $request->unit_price;
        $product->purchase_price = $request->purchase_price;
        $product->discount       = $request->discount;
        $product->discount_type  = $request->discount_type;
        $tags                    = array();
        if($request->tags[0] != null){
            foreach (json_decode($request->tags[0]) as $key => $tag) {
                array_push($tags, $tag->value);
            }
        }
        $product->tag              = implode(',', $tags);
        $product->num_of_imgs      = count($request->thumbnail_images);
        $product->main_image       = 120;
        $product->url_name         = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name));
        //TO BE REMOVED
        $product->number_of_view   = 120;
        $product->num_of_downloads = 120;

          if($request->has('colors_active') && $request->has('colors') && count($request->colors) > 0){
              $color_codes = implode(', ', $request->colors);
              $result_color_ids = \App\ProductColor::select('id')->whereIn('color_code', $request->colors)->get();

              $color_ids =[];
              foreach ($result_color_ids as $key => $value)
              {
                  array_push($color_ids,$value->id);
              }

              $product->color = json_encode($color_ids);
          }
          else {
              $colors = array();
              $product->color = json_encode($colors);
          }

          $choice_options = array();

          if($request->has('choice_no')){
              foreach ($request->choice_no as $key => $no) {
                  $str          = 'choice_options_'.$no;
                  $item['id']   = $key+1;
                  $item['name'] = $no;

                  $data = array();
                  foreach (json_decode($request[$str][0]) as $key => $eachValue) {
                      array_push($data, $eachValue->value);
                  }
                  $item['values'] = $data;
                  array_push($choice_options, $item);
              }
            }
        
          $product->options = json_encode($choice_options);


       ########     shipping
        if ($request->has('shipping_type')) {
          if($request->shipping_type == 'free'){
              $product->shipping_cost = 0;
          }
          elseif ($request->shipping_type == 'flat_rate') {

              $product->shipping_cost = $request->flat_shipping_cost;
          }
      }

         //combinations start
         $options = array();
         if($request->has('colors_active') && $request->has('colors') && count($request->colors) > 0){
             $colors_active = 1;
             array_push($options, $request->colors);
         }

         if($request->has('choice_no')){
             foreach ($request->choice_no as $key => $no) {
                 $name = 'choice_options_'.$no;
                 $data = array();
                 foreach (json_decode($request[$name][0]) as $key => $item) {
                     array_push($data, $item->value);
                 }
                 array_push($options, $data);
             }
         }

        //Generates the combinations of customer choice options
        $combinations = $this->combinations($options);
        if(count($combinations[0]) > 0){
            $product->is_static = 1;
            $product->save();

            $product->variant_product = 1;
            
            foreach ($combinations as $key => $combination){
                $price=0;
                $str = '';
                foreach ($combination as $key => $item){
                    if($key > 0 ){
                        $str .= '-'.str_replace(' ', '', $item);
                    }
                    else{
                        if($request->has('colors_active') && $request->has('colors') && count($request->colors) > 0){
                            $color_name = \App\ProductColor::where('color_code', $item)->first()->name;
                            $str .= $color_name;
                        }
                        else{
                            $str .= str_replace(' ', '', $item);
                        }
                    }
                }
                $product_stock = ProductVariation::where('product_id', $product->id)->where('variation', $str)->first();
                if($product_stock == null){
                    $product_stock             = new ProductVariation;
                    $product_stock->product_id = $product->id;
                }

                if($commission != null){
                    $price = ($commission / 100) * $request['price_'.str_replace('.', '_', $str)];
                }else{
                    $price = 0;
                }
                $product_stock->variation    = $str;
                $product_stock->actual_price = $request['price_'.str_replace('.', '_', $str)];
                $product_stock->price        = $price+intval($request['price_'.str_replace('.', '_', $str)]);
                // $product_stock->sku       = $request['sku_'.str_replace('.', '_', $str)];
                $product_stock->stock        = $request['qty_'.str_replace('.', '_', $str)];
                $product_stock->save();
            }
        }
        else{
            $product->is_static     = 0;
            $product->current_stock = $request->current_stock;
            $product->save();
        }
        $logo =  "product_".$product->id."_1.".$request->logo->extension();
        $request->logo->move(public_path('uploads/product_image'), $logo);
        $this->addImages($request->thumbnail_images,$product->id);
        return redirect()->back()->with('success', 'category created successfully');
    }
    
    function addImages($imgArray,$product_id)
    {
        $pro_num = 1;
        for ($i = 0; $i < count($imgArray); $i++)
        {
            $pro_num++;
            $product_image =  "product_".$product_id."_".$pro_num.".".$imgArray[$i]->extension();
            $imgArray[$i]->move(public_path('uploads/product_image'), $product_image);
        }
        return true;
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user_id = auth()->user()->id;
        $user    = User::findorfail($user_id);
        if( $user_id ==1)
        {
            $Categories = Category::select('id','name','category_level','level_name')->where('active',1)->get();
            $Brands     = Brand::orderBy('id','desc')->get();
        }
        else
        {
            $vendor_type_id = $user->vendor['vendor_type_id'];
            $Categories     = Category::select('id','name','category_level','level_name')
                                        ->where('active',1)
                                        ->where('category_type_id',$vendor_type_id)->get();
            $Brands         = Brand::orderBy('id','desc')
                                         ->where('brand_type_id',$vendor_type_id)->get();
          
        }
        $product = Product::findorfail($id);
        $tag     = json_decode($product->tag);
        $breadcrumbs = [
          ['link' => "/admin", 'name' => "Dashboard"],
          ['link' => route('product.index'), 'name' => "Product"],
          ['name' => "Product"]
        ];
        return view('admin.pages.product.update-form', [
            'breadcrumbs' => $breadcrumbs,
            'Categories'  => $Categories,
            'Brands'      => $Brands,
            'product'     =>  $product,
            'tags'        =>  $tag
        ]);
    }

    
    public function update(Request $request, $id)
    {
        $commission = Commission::select('percentage')->where('status',1)->first();
        $user_id    = auth()->user()->id;
        $user       = User::findorfail($user_id);
        $product    = Product::findOrFail($id);

        if( $user_id ==1)
        {
            $added_by_id              = $user_id;
            $added_by_type            = "admin";
            $product->product_type_id = $request->product_type_id;
        }
        else
        {
            $vendor_id                = $user->vendor['id'];
            $vendor_type_id           = $user->vendor['vendor_type_id'];
            $added_by_id              = $vendor_id;
            $added_by_type            = "vendor";
            $product->product_type_id = $vendor_type_id;
        }
        if($commission != null){
            $commission              = $commission['percentage'];
            $price                   = ($commission / 100) * $request->unit_price;
        }else{
            $price = 0;
        }
       
        $product->added_by_id    = $added_by_id;
        $product->added_by_type  = $added_by_type;
        $product->name           = $request->name;
        $product->category_id    = $request->category_id;
        $product->brand          = $request->brand_id;
        $product->current_stock  = $request->current_stock;
        $product->description    = $request->description;
        $product->sale_price     = $price+intval($request->unit_price);
        $product->actual_price   = $request->unit_price;
        $product->purchase_price = $request->purchase_price;
        $product->discount       = $request->discount;
        $product->discount_type  = $request->discount_type;
        if ($request->thumbnail_images) {
            $product->num_of_imgs = count($request->thumbnail_images);
        }

        $tags = array();
        if($request->tags[0] != null){
            foreach (json_decode($request->tags[0]) as $key => $tag) {
                array_push($tags, $tag->value);
            }
        }
        $product->tag              = implode(',', $tags);
        $product->main_image       = 120;
        $product->url_name         = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name));
        //TO BE REMOVED
        $product->number_of_view   = 120;
        $product->num_of_downloads = 120;

         
        if($request->has('colors_active') && $request->has('colors') && count($request->colors) > 0){
            $color_codes = implode(', ', $request->colors);
            $result_color_ids = \App\ProductColor::select('id')->whereIn('color_code', $request->colors)->get();

            $color_ids =[];
            foreach ($result_color_ids as $key => $value)
            {
                array_push($color_ids,$value->id);
            }

            $product->color = json_encode($color_ids);
        }
        else {
            $colors = array();
            $product->color = json_encode($colors);
        }

        $choice_options = array();

        if($request->has('choice_no')){
            foreach ($request->choice_no as $key => $no) {
                $str          = 'choice_options_'.$no;
                $item['id']   = $key+1;
                $item['name'] = $no;
                $data         = array();
                foreach (json_decode($request[$str][0]) as $key => $eachValue) {
                    array_push($data, $eachValue->value);
                }
                $item['values'] = $data;
                array_push($choice_options, $item);
            }
        }

        $product->options = json_encode($choice_options);


        ########     shipping
         if ($request->has('shipping_type')) {
           if($request->shipping_type == 'free'){
               $product->shipping_cost = 0;
           }
           elseif ($request->shipping_type == 'flat_rate') {
 
               $product->shipping_cost = $request->flat_shipping_cost;
           }
        }

        // ok till here

        // foreach ($product->stocks as $key => $stock) {
        //     $stock->delete();
        // }

        // if (!empty($request->choice_no)) {
        //     $product->attributes = json_encode($request->choice_no);
        // }
        // else {
        //     $product->attributes = json_encode(array());
        // }

        // $product->choice_options = json_encode($choice_options);


        //combinations start
        $options = array();
         if($request->has('colors_active') && $request->has('colors') && count($request->colors) > 0){
             $colors_active = 1;
             array_push($options, $request->colors);
         }

         if($request->has('choice_no')){
             foreach ($request->choice_no as $key => $no) {
                 $name = 'choice_options_'.$no;
                 $data = array();
                 foreach (json_decode($request[$name][0]) as $key => $item) {
                     array_push($data, $item->value);
                 }
                 array_push($options, $data);
             }
         }

        //Generates the combinations of customer choice options
        $combinations = $this->combinations($options);
        if(count($combinations[0]) > 0){
            $product->is_static = 1;
            $product->save();

            $product->variant_product = 1;
            
            foreach ($combinations as $key => $combination){
                $price=0;
                $str = '';
                foreach ($combination as $key => $item){
                    if($key > 0 ){
                        $str .= '-'.str_replace(' ', '', $item);
                    }
                    else{
                        if($request->has('colors_active') && $request->has('colors') && count($request->colors) > 0){
                            $color_name = \App\ProductColor::where('color_code', $item)->first()->name;
                            $str .= $color_name;
                        }
                        else{
                            $str .= str_replace(' ', '', $item);
                        }
                    }
                }
                $product_stock = ProductVariation::where('product_id', $product->id)->where('variation', $str)->first();
                if($product_stock == null){
                    $product_stock = new ProductVariation;
                    $product_stock->product_id = $product->id;
                }

                if($commission != null){
                    $price                       = ($commission / 100) * $request['price_'.str_replace('.', '_', $str)];
                }else{
                    $price = 0;
                }
                
                
                $product_stock->variation    = $str;
                $product_stock->actual_price = $request['price_'.str_replace('.', '_', $str)];
                $product_stock->price        = $price+intval($request['price_'.str_replace('.', '_', $str)]);
                // $product_stock->sku = $request['sku_'.str_replace('.', '_', $str)];
                $product_stock->stock        = $request['qty_'.str_replace('.', '_', $str)];
                $product_stock->save();

            }
        }
        else{

            $product->current_stock = $request->current_stock;
            $product->is_static = 0;

            $product->save();
        }

        if ($request->logo) {
            $logo =  "product_".$product->id."_1.".$request->logo->extension();
            $request->logo->move(public_path('uploads/product_image'), $logo);
            if ($request->thumbnail_images) {
                $this->addImages($request->thumbnail_images,$product->id);
            }
        }
        return redirect()->back()->with('success', 'category created successfully');
    }

    public function destroy($id)
    {      
       $product = Product::findorfail($id);
     
       product::find($id)->delete();
      return back()->with('success', 'product deleted successfully');
    
    }

    public function combinations($arrays) {
      $result = array(array());
      foreach ($arrays as $property => $property_values) {
          $tmp = array();
          foreach ($result as $result_item) {
              foreach ($property_values as $property_value) {
                  $tmp[] = array_merge($result_item, array($property => $property_value));
              }
          }
          $result = $tmp;
      }
      return $result;
    }
    public function sku_combination(Request $request)
    {
        $options = array();
        if($request->has('colors_active') && $request->has('colors') && count($request->colors) > 0){
            $colors_active = 1;
            array_push($options, $request->colors);
        }
        else {
            $colors_active = 0;
        }

        $unit_price = $request->unit_price;
        $product_name = $request->name;

        if($request->has('choice_no')){
            foreach ($request->choice_no as $key => $no) {
                $name = 'choice_options_'.$no;
                $data = array();
                foreach (json_decode($request[$name][0]) as $key => $item) {
                    array_push($data, $item->value);
                }
                array_push($options, $data);
            }
        }

        $combinations = $this->combinations($options);
        return view('admin.pages.product.sku_combinations', compact('combinations', 'unit_price', 'colors_active', 'product_name'));

//        return view('admin.pages.products.sku_combinations', compact('combinations', 'unit_price', 'colors_active', 'product_name'));
    }

    public function sku_combination_edit(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $options = array();
        if($request->has('colors_active') && $request->has('colors') && count($request->colors) > 0){
            $colors_active = 1;
            array_push($options, $request->colors);
        }
        else {
            $colors_active = 0;
        }

        $product_name = $request->name;
        $unit_price = $request->unit_price;
        if($request->has('choice_no')){
            foreach ($request->choice_no as $key => $no) {
                $name = 'choice_options_'.$no;
                $data = array();
                foreach (json_decode($request[$name][0]) as $key => $item) {
                    array_push($data, $item->value);
                }
                array_push($options, $data);
            }
        }

        $combinations =  $this->combinations($options);
        return view('admin.pages.product.sku_combinations_edit', compact('combinations', 'unit_price', 'colors_active', 'product_name', 'product'));
    }

//    public function sku_combination(Request $request)
//    {
//
//        $options = array();
//        if($request->has('colors_active') && $request->has('colors') && count($request->colors) > 0){
//            $colors_active = 1;
//            array_push($options, $request->colors);
//        }
//        else {
//            $colors_active = 0;
//        }
//        $unit_price = $request->unit_price;
//        $product_name = $request->name;
//
//        if($request->has('choice_no')){
//            foreach ($request->choice_no as $key => $no) {
//                $name = 'choice_options_'.$no;
//                $data = array();
//                foreach (json_decode($request[$name][0]) as $key => $item) {
//                    array_push($data, $item->value);
//                }
//                array_push($options, $data);
//            }
//        }
//        // dd($request);
//
//        $combinations = $this->combinations($options);
//        return view('admin.pages.product.sku_combinations', compact('combinations', 'unit_price', 'colors_active', 'product_name'));
//    }
}
