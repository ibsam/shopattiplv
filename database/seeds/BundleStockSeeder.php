<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BundleStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Blundles = DB::connection('mysql_old')->table('bundle_stock')->get();
        foreach($Blundles as $bundle){
            DB::table('bundle_stocks')->insert([
                'id'=>$bundle->stock_id,
                'type'=>$bundle->type,
                'product_bundle'=>$bundle->product_bundle,
                'quantity'=>$bundle->quantity,
                'rate'=>$bundle->rate,
                'total'=>$bundle->total,
                'reason_note'=>$bundle->reason_note,
                'datetime'=>$bundle->datetime,
                'sale_id'=>$bundle->sale_id,
                'added_by'=>$bundle->added_by

            ]);
        }
    }
}
