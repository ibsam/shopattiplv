<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stocks=DB::connection('mysql_old')->table('stock')->get();
        foreach($stocks as $stock){
            DB::table('stocks')->insert([
                'id'=>$stock->stock_id,
                'type'=>$stock->type,
                'category'=>$stock->category,
                'sub_category'=>$stock->sub_category,
                'product'=>$stock->product,
                'quantity'=>$stock->quantity,
                'rate'=>$stock->rate,
                'total'=>$stock->total,
                'reason_note'=>$stock->reason_note,
                'datetime'=>$stock->datetime,
                'sale_id'=>$stock->sale_id,
                'added_by'=>$stock->added_by

            ]);
        }
    }
}
