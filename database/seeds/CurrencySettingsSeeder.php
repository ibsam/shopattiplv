<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curruncies=DB::connection('mysql')->table('currency_settings')->get();
        foreach($curruncies as $curruncy){
            DB::table('currency_settings')->insert([
                'id'=>$curruncy->currency_settings_id,
                'name'=>$curruncy->name,
                'symbol'=>$curruncy->symbol,
                'exchange_rate'=>$curruncy->exchange_rate,
                'status'=>$curruncy->status,
                'code'=>$curruncy->code,
                'exchange_rate_def'=>$curruncy->exchange_rate_def,
                'created_at'=>$curruncy->created_at,
                'updated_at'=>$curruncy->updated_at

            ]);
        }
    }
}
