<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\BD;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcats=DB::connection('mysql_old')->table('sub_category')->get();
        foreach($subcats as $subcat){
            DB::table('sub_categories')->insert([
                'id'=>$subcat->sub_category_id,
                'sub_category_name'=>$subcat->sub_category_name,
                'category_id'=>$subcat->category,
                'sub_category_type_id'=>$subcat->sub_category_type_id,
                'brand'=>$subcat->brand,
                'digital'=>$subcat->digital,
                'banner'=>$subcat->banner,
                'status'=>$subcat->status

            ]);
        }
    }
}
