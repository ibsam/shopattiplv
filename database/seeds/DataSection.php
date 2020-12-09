<?php

use Illuminate\Database\Seeder;

class DataSection extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = DB::table('products')->select('id')->limit(8)->get();
        foreach($products as $product){
            DB::table('data_sections')->insert([
                'layout_id'=>1,
                 'section_id'=>1,
                 'data_id'=>$product->id,
                 'active'=>1,
              ]);
        }
    
    }
}
