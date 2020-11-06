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

       		DB::table('categories')->insert([

       			'id' => $Category->category_id,
       			'category_type_id' => $Category->category_type_id,
       			'name' => $Category->category_name,
       			'description' => $Category->description,
       			'digital' => $Category->digital,
       			'banner' => $Category->banner,
       			'data_brands' => $Category->data_brands,
       			'data_vendors' => $Category->data_vendors,
       			'data_subset' => $Category->data_subdets,
                'status' => $Category->status,
                'active'=>1
                   
       			
       		]);
       }
    }
}
