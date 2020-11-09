<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sliders=DB::connection('mysql_old')->table('slider')->get();
        foreach($sliders as $slider){
            DB::table('sliders')->insert([
                'id'=>$slider->slider_id,
                'elements'=>$slider->elements,
                'status'=>$slider->status,
                'title'=>$slider->title,
                'style'=>$slider->style,
                'serial'=>$slider->serial

            ]);
        }
    }
}
