<?php

use Illuminate\Database\Seeder;

class HomeLayout extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
        DB::table('home_layouts')->insert([
            
            'name'=>"Products",
            'active'=>1
            
        ]);
        DB::table('home_layouts')->insert([
            
            'name'=>"Category",
            'active'=>1
           
            
        ]);
         DB::table('home_layouts')->insert([
            'name'=>"Brand",
            'active'=>1,
            
        ]);
        
         
    }
}
