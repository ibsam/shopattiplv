<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generals=DB::connection('mysql_old')->table('general_settings')->get();
        foreach($generals as $general){
            DB::table('general_settings')->insert([
                'id'=>$general->general_settings_id,
                'type'=>$general->type,
                'value'=>$general->value,
                'created_at'=>$general->created_at,
                'updated_at'=>$general->updated_at

            ]);
        }
    }
}
