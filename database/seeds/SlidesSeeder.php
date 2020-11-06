<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlidesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slides=DB::connection('mysql_old')->table('slides')->get();
        foreach($slides as $slide){
            DB::table('slides')->insert([
                'id'=>$slide->slides_id,
                'button_color'=>$slide->button_color,
                'text_color'=>$slide->text_color,
                'button_text'=>$slide->button_text,
                'button_link'=>$slide->button_link,
                'uploaded_by'=>$slide->uploaded_by,
                'added_by'=>$slide->added_by,
                'status'=>$slide->status

            ]);
        }
    }
}
