<?php

use Illuminate\Database\Seeder;

class HomeSection extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_sections')->insert([
            'name'=>"Best Sellers",
            'layout_id'=>"1",
            'active'=>1,
        ]);
        DB::table('home_sections')->insert([
            'name'=>"New Arrivals",
            'layout_id'=>"2",
            'active'=>1,
        ]);
        DB::table('home_sections')->insert([
            'name'=>"Feature Products",
            'layout_id'=>"3",
            'active'=>1,
        ]);
    }
}
