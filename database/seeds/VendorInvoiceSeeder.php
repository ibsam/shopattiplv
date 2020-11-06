<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendorInvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vendors=DB::connection('mysql_old')->table('vendor_invoice')->get();
        foreach($vendors as $vendor){
            DB::table('vendor_invoices')->insert([
                'id'=>$vendor->vendor_invoice_id,
                'vendor_id'=>$vendor->vendor_id,
                'amount'=>$vendor->amount,
                'timestamp'=>$vendor->timestamp,
                'status'=>$vendor->status,
                'method'=>$vendor->method,
                'payment_details'=>$vendor->payment_details

            ]);
        }
    }
}
