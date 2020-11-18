<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Buisinesses=DB::connection('mysql_old')->table('business_settings')->get();
        foreach($Buisinesses as $BSS){

            DB::table('business_settings')->insert([
                'id'=>$BSS->business_settings_id,
                'type'=>$BSS->type,
                'status'=>$BSS->status,
                'value'=>$BSS->value

            ]);
        }
    }
}
