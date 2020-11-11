<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $products=DB::connection('mysql_old')->table('product')->get();
       foreach($products as $product){
           // variable for url
           $url_name=rtrim($product->title,' ');
           
           DB::table('products')->insert([
               'id'=>$product->product_id,
               'product_type_id'=>$product->product_type_id,
               'rating_num'=>$product->rating_num,
               'rating_total'=>$product->rating_total,
               'rating_user'=>$product->rating_user,
               'name'=>$product->title,

               'url_name'=>str_replace(' ','',strtolower($url_name)),
               'added_by'=>$product->added_by,
               'category_id'=>$product->category,
               'description'=>$product->description,
               'sub_category_id'=>$product->sub_category,
               'child_sub_category_id'=>$product->child_sub_category,
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
               'options'=>$product->options,
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
               'add_review'=>$product->add_review
              


           ]);
       }
    }
}
