<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WalletLoadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wallets=DB::connection('mysql_old')->table('wallet_load')->get();
        foreach($wallets as $wallet){
            DB::table('wallet_loads')->insert([
                'id'=>$wallet->wallet_load_id,
                'user'=>$wallet->user,
                'amount'=>$wallet->amount,
                'method'=>$wallet->method,
                'status'=>$wallet->status,
                'timestamp'=>$wallet->timestamp,
                'payment_details'=>$wallet->payment_details

            ]);
        }
    }
}
