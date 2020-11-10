<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChildSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Childs=DB::connection('mysql_old')->table('child_sub_category')->get();
        foreach($Childs as $Child){
          DB::table('child_sub_categories')->insert([
              'id'=>$Child->child_sub_category_id,
              'child_sub_category_type_id'=>$Child->child_sub_category_type_id,
              'child_sub_category_name'=>$Child->child_sub_category_name,
              'category_id'=>$Child->category,
              'sub_category_id'=>$Child->sub_category,
              'brand'=>$Child->brand,
              'digital'=>$Child->digital,
              'banner'=>$Child->banner,
              'status'=>$Child->status

          ]);

        }
    }
}
