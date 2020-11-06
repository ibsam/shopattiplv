<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderStyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sliders=DB::connection('mysql_old')->table('slider_style')->get();
        foreach($sliders as $slider){
            DB::table('slider_styles')->insert([
                'id'=>$slider->slider_style_id,
                'name'=>$slider->name,
                'value'=>$slider->value

            ]);
        }
    }
}
