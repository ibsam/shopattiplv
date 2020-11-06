<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UiSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $uis=DB::connection('mysql_old')->table('ui_settings')->get();
        foreach($uis as $ui){
            DB::table('ui_settings')->insert([
                'id'=>$ui->ui_settings_id,
                'type'=>$ui->type,
                'value'=>$ui->value

            ]);
        }
    }
}
