<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coupons=DB::connection('mysql_old')->table('coupon')->get();
        foreach($coupons as $coupon){
            DB::table('coupons')->insert([
                'id'=>$coupon->coupon_id,
                'title'=>$coupon->title,
                'spec'=>$coupon->spec,
                'added_by'=>$coupon->added_by,
                'till'=>$coupon->till,
                'code'=>$coupon->code,
                'status'=>$coupon->status

            ]);
        }
    }
}
