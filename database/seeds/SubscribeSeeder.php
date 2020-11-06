<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscribeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subs=DB::connection('mysql_old')->table('subscribe')->get();
        foreach($subs as $sub){
            DB::table('subscribes')->insert([
                'id'=>$sub->subscribe_id,
                'email'=>$sub->email

            ]);
        }
    }
}
