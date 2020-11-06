<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackagePaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $PPSs=DB::connection('mysql_old')->table('package_payment')->get();
        foreach($PPSs as $PPS){
            DB::table('package_payments')->insert([
                'id'=>$PPS->package_payment_id,
                'package_id'=>$PPS->package_id,
                'user_id'=>$PPS->user_id,
                'payment_type'=>$PPS->payment_type,
                'payment_status'=>$PPS->payment_status,
                'payment_details'=>$PPS->payment_details,
                'amount'=>$PPS->amount,
                'purchase_datetime'=>$PPS->purchase_datetime,
                'payment_code'=>$PPS->payment_code,
                'payment_timestamp'=>$PPS->payment_timestamp,
                'expire'=>$PPS->expire,
                'expire_timestamp'=>$PPS->expire_timestamp

            ]);
        }
    }
}
