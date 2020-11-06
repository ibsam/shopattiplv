<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;


class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Pages=DB::connection('mysql_old')->table('page')->get();
        foreach($Pages as $page){
            DB::table('pages')->insert([
                'id'=>$page->page_id,
                'status'=>$page->status,
                'page_name'=>$page->page_name,
                'parmalink'=>$page->parmalink,
                'content'=>$page->content,
                'parts'=>$page->parts,
                'tag'=>$page->tag,
                'fixed'=>$page->fixed

            ]);
        }
    }
}
