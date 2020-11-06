<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages=DB::connection('mysql_old')->table('language')->get();
        foreach($languages as $language){
            DB::table('languages')->insert([
                'id'=>$language->word_id,
                'word'=>$language->word,
                'english'=>$language->english,
                'Bangla'=>$language->Bangla,
                'Arabic'=>$language->Arabic,
                'French'=>$language->French,
                'Chinese'=>$language->Chinese

            ]);
        }
    }
}
