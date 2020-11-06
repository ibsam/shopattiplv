<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tables=DB::connection("mysql_old")->table('add_table')->get();
        foreach($tables as $table){
            DB::table('tables')->insert([
                'id'=>$table->id,
                'Comment'=>$table->Comment,
                'Customer_id'=>$table->Customer_id,
                'Product_id'=>$table->Product_id

            ]);
        }
    }
}
