<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands=DB::connection('mysql_old')->table('brand')->get();
        foreach($brands as $brand){
          $url_name=rtrim($brand->name,' ');

          DB::table('brands')->insert([
             'id'=>$brand->brand_id,
             'brand_type_id'=>$brand->brand_type_id, 
             'name'=>$brand->name, 
             'url_name'=>str_replace(' ','-',strtolower($url_name)),
             'description'=>$brand->description, 
             'logo'=>$brand->logo 

          ]);



        }
    }
}
