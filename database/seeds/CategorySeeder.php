<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

      $Categories = DB::connection('mysql_old')->table('category')->get();

       foreach ($Categories as $Category) {
           $url_name=rtrim($Category->category_name,' ');  
       		$id = DB::table('categories')->insertGetId([


       			//'id' => $Category->category_id,
            'category_id' => 0,
       			'category_type_id' => $Category->category_type_id,
            'category_level' => 1,
            'level_name' => 'Category',
             'name' => $Category->category_name,
             'url_name'=>str_replace(' ','-',strtolower($url_name)),
       			'description' => $Category->description,
       			'digital' => $Category->digital,
       			'banner' => $Category->banner,
       			'data_brands' => $Category->data_brands,
       			'data_vendors' => $Category->data_vendors,
       			'data_subset' => $Category->data_subdets,
            'status' => $Category->status,
            'active'=>1
       		]);

          $this->insertSubCategories($id,$Category->category_id);
       }
    }


    public function insertSubCategories($new_catid,$old_catid){

      $Categories = DB::connection('mysql_old')->table('sub_category')->where('category',$old_catid)->get();

      if(!empty($Categories)){
       foreach ($Categories as $Category) {
           $url_name=rtrim($Category->sub_category_name,' ');  

          $id = DB::table('categories')->insertGetId([


            //'id' => $Category->category_id,
            'category_id' => $new_catid,
            'category_type_id' => $Category->sub_category_type_id,
            'category_level' => 2,
            'level_name' => 'Sub-Category',
            'name' => $Category->sub_category_name,
            'url_name'=>str_replace(' ','-',strtolower($url_name)),

            //'description' => $Category->description,
            'digital' => $Category->digital,
            'banner' => $Category->banner,
            //'data_brands' => $Category->data_brands,
            //'data_vendors' => $Category->data_vendors,
            //'data_subset' => $Category->data_subdets,
            'status' => $Category->status,
            'active'=>1
          ]);
          //dd($Category);
          $this->insertChildSubCategories($id,$Category->sub_category_id);
       }
    }

    }


    public function insertChildSubCategories($new_catid,$old_catid){

      $Categories = DB::connection('mysql_old')->table('child_sub_category')->where('sub_category',$old_catid)->get();
      if(!empty($Categories)){
       foreach ($Categories as $Category) {
           $url_name=rtrim($Category->child_sub_category_name,' ');  

          $id = DB::table('categories')->insertGetId([


            //'id' => $Category->category_id,
            'category_id' => $new_catid,
            'category_type_id' => $Category->child_sub_category_type_id,
            'category_level' => 3,
            'level_name' => 'Child-Sub-Category',
            'name' => $Category->child_sub_category_name,
            'url_name'=>str_replace(' ','-',strtolower($url_name)),

            //'description' => $Category->description,
            'digital' => $Category->digital,
            'banner' => $Category->banner,
            //'data_brands' => $Category->data_brands,
            //'data_vendors' => $Category->data_vendors,
            //'data_subset' => $Category->data_subdets,
            'status' => $Category->status,
            'active'=>1
          ]);

        $this->insertProducts($Category->child_sub_category_id,$id);
       }
      }

    }

    public function insertProducts($old_catid,$new_catid){

       $products=DB::connection('mysql_old')->table('product')->where('child_sub_category',$old_catid)->get();
       
       //dd($products);
       foreach($products as $product){
           // variable for url
           $url_name=rtrim($product->title,' ');
           
           DB::table('products')->insert([
               'id'=>$product->product_id,
               'product_type_id'=>$product->product_type_id,
              //  'rating_num'=>$product->rating_num,
              //  'rating_total'=>$product->rating_total,
              //  'rating_user'=>$product->rating_user,
               //'rating_num'=>$product->rating_num,
               //'rating_total'=>$product->rating_total,
               //'rating_user'=>$product->rating_user,
               'name'=>$product->title,

               'url_name'=>str_replace(' ','-',strtolower($url_name)),
               'added_by'=>$product->added_by,
               'category_id'=>$new_catid,
               'description'=>$product->description,
               // 'sub_category_id'=>$product->sub_category,
               // 'child_sub_category_id'=>$product->child_sub_category,
               'num_of_imgs'=>$product->num_of_imgs,
               'sale_price'=>$product->sale_price,
               'purchase_price'=>$product->purchase_price,
               'shipping_cost'=>$product->shipping_cost,
               'add_timestamp'=>$product->add_timestamp,
               'featured'=>$product->featured,
               'tag'=>$product->tag,
               'status'=>$product->status,
               'front_image'=>$product->front_image,
               'brand'=>$product->brand,
               'current_stock'=>$product->current_stock,
               'unit'=>$product->unit,
               'additional_fields'=>$product->additional_fields,
               'number_of_view'=>$product->number_of_view,
               'background'=>$product->background,
               'discount'=>$product->discount,
               'discount_type'=>$product->discount_type,
               'tax'=>$product->tax,
               'tax_type'=>$product->tax_type,
               'color'=>$product->color,
               'options'=>$this->getOption($product->options),
               'main_image'=>$product->main_image,
               'download'=>$product->download,
               'download_name'=>$product->download_name,
               'deal'=>$product->deal,
               'num_of_downloads'=>$product->num_of_downloads,
               'update_time'=>$product->update_time,
               'requirements'=>$product->requirements,
               'logo'=>$product->logo,
               'video'=>$product->video,
               'last_viewed'=>$product->last_viewed,
               'products'=>$product->products,
               'is_bundle'=>$product->is_bundle,
               'vendor_featured'=>$product->vendor_featured,
              //  'add_review'=>$product->add_review
               //'add_review'=>$product->add_review
               
              


           ]);


       }
    }


    public function getColor($data){
      //$color["color"] = explode(',',$data);

      //return json_encode($color);
    }

    public function getOption($data){
      $array_data = array();
      $option = json_decode($data);
      
      if($option != null){
         
          //dd($option[0]->option);

          foreach($option[0]->option as $rsOption){
            $temp['name'] = $rsOption;
            $temp['stock'] = 5;

            array_push($array_data,$temp);
          }

          $option[0]->option = $array_data;

          //dd($option);

          return json_encode($option);

    }
    else {
      return $data;
    }
  }

}
