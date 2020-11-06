<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialLinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $socials=DB::connection('mysql_old')->table('social_links')->get();
        foreach($socials as $social){
            DB::table('social_links')->insert([
                'id'=>$social->social_links_id,
                'type'=>$social->type,
                'value'=>$social->value

            ]);
        }
    }
}
