<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $memberships=DB::connection('mysql_old')->table('membership')->get();
        foreach($memberships as $MS)
        {
            DB::table('memberships')->insert([
                'id'=>$MS->membership_id,
                'title'=>$MS->title,
                'price'=>$MS->price,
                'timespan'=>$MS->timespan,
                'pay_interval'=>$MS->pay_interval,
                'product_limit'=>$MS->product_limit

            ]);
        }
    }
}
