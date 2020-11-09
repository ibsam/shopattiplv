<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiSessionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $CiSessions=DB::connection('mysql_old')->table('ci_sessions')->get();
        foreach($CiSessions as $CSS){
            DB::table('ci_sessions')->insert([
                'sessionid'=>$CSS->id,
                'ip_address'=>$CSS->ip_address,
                'timestamp'=>$CSS->timestamp,
                'data'=>$CSS->data

            ]);
        }
    }
}
