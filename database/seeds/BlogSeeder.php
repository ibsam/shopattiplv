<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogs = DB::connection('mysql_old')->table('blog')->get();
        foreach($blogs as $blog){
         DB::table('blogs')->insert([
            'id'=>$blog->blog_id,
            'title'=>$blog->title,
            'summery'=>$blog->summery,
            'author'=>$blog->author,
            'date'=>$blog->date,
            'description'=>$blog->description,
            'status'=>$blog->status,
            'blog_category'=>$blog->blog_category,
            'number_of_view'=>$blog->number_of_view

         ]);



        }
    }
}
