<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembershipPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $MPs=DB::connection('mysql_old')->table('membership_payment')->get();
        foreach($MPs as $MPS){
            DB::table("membership_payments")->insert([
                'id'=>$MPS->membership_payment_id,
                'vendor'=>$MPS->vendor,
                'timestamp'=>$MPS->timestamp,
                'amount'=>$MPS->amount,
                'details'=>$MPS->details,
                'membership'=>$MPS->membership,
                'method'=>$MPS->method,
                'status'=>$MPS->status

            ]);
        }
    }
}
