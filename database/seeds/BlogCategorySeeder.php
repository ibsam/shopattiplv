<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogcategories= DB::connection('mysql_old')->table('blog_category')->get();
        foreach($blogcategories as $blogs){
          DB::table('blog_categories')->insert([
              'id'=>$blogs->blog_category_id,
              'name'=>$blogs->name

          ]);

        }
    }
}
