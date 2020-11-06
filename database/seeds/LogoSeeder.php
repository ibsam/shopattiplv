<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $logos=DB::connection('mysql-old')->table('logo')->get();
        foreach($logos as $logo){
            DB::table('logos')->insert([
                'id'=>$logo->logo_id,
                'name'=>$logo->name

            ]);
        }
    }
}
