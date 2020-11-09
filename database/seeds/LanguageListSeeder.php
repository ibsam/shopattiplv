<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LanguageListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $LangLists=DB::connection('mysql_old')->table('language_list')->get();
        foreach($LangLists as $LLS){
            DB::table("language_lists")->insert([
                'id'=>$LLS->language_list_id,
                'name'=>$LLS->name,
                'db_field'=>$LLS->db_field,
                'status'=>$LLS->status

            ]);
        }
    }
}
