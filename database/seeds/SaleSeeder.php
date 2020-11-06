<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sales=DB::connection('mysql_old')->table('sale')->get();
        foreach($sales as $sale){
            DB::table('sales')->insert([
                'id'=>$sale->sale_id,
                'sale_code'=>$sale->sale_code,
                'buyer'=>$sale->buyer,
                'guest_id'=>$sale->guest_id,
                'product_details'=>$sale->product_details,
                'shipping_address'=>$sale->shipping_address,
                'vat'=>$sale->vat,
                'vat_percent'=>$sale->vat_percent,
                'shipping'=>$sale->shipping,
                'payment_type'=>$sale->payment_type,
                'payment_status'=>$sale->payment_status,
                'payment_details'=>$sale->payment_details,
                'payment_timestamp'=>$sale->payment_timestamp,
                'grand_total'=>$sale->grand_total,
                'sale_datetime'=>$sale->sale_datetime,
                'delivary_datetime'=>$sale->delivary_datetime,
                'delivery_status'=>$sale->delivery_status,
                'viewed'=>$sale->viewed

            ]);
        }
    }
}
