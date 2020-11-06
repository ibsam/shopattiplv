<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\DB;

class CustomerProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers=connection('mysql_old')->table('customer_product')->get();
        foreach($customers as $customer){
            DB::table('customer_products')->insert([
                'id'=>$customer->customer_product_id,
                'rating_num'=>$customer->rating_num,
                'rating_total'=>$customer->rating_total,
                'rating_user'=>$customer->rating_user,
                'title'=>$customer->title,
                'added_by'=>$customer->added_by,
                'category'=>$customer->category,
                'description'=>$customer->description,
                'prod_condition'=>$customer->prod_condition,
                'location'=>$customer->location,
                'sub_category'=>$customer->sub_category,
                'num_of_imgs'=>$customer->num_of_imgs,
                'sale_price'=>$customer->sale_price,
                'add_timestamp'=>$customer->add_timestamp,
                'tag'=>$customer->tag,
                'status'=>$customer->status,
                'admin_status'=>$customer->admin_status,
                'front_image'=>$customer->front_image,
                'brand'=>$customer->brand,
                'unit'=>$customer->unit,
                'additional_fields'=>$customer->additional_fields,
                'number_of_view'=>$customer->number_of_view,
                'discount'=>$customer->discount,
                'discount_type'=>$customer->discount_type,
                'tax'=>$customer->tax,
                'tax_type'=>$customer->tax_type,
                'color'=>$customer->color,
                'options'=>$customer->options,
                'main_image'=>$customer->main_image,
                'update_time'=>$customer->update_time,
                'last_viewed'=>$customer->last_viewed,
                'is_sold'=>$customer->is_sold

            ]);
        }
    }
}
