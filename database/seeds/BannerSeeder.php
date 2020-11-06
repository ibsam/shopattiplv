<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$Banners = DB::connection('mysql_old')->table('banner')->get();

    	foreach ($Banners as $banner) {
    		# code...

    		DB::table('banners')->insert([

    			'id' => $banner->banner_id,
    			'page' => $banner->page,
    			'place' => $banner->place,
    			'num' => $banner->num,
    			'status' => $banner->status,
    			'status' => $banner->status,
    			'link' => $banner->link,
    			'image_ext' => $banner->image_ext
    		]);
    	}
    }
}
