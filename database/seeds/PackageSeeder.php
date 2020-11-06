<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pakages=DB::connection('mysql_old')->table('package')->get();
        foreach($pakages as $pakage){
            DB::table('packages')->insert([
                'id'=>$pakage->package_id,
                'name'=>$pakage->name,
                'amount'=>$pakage->amount,
                'upload_amount'=>$pakage->upload_amount,
                'image'=>$pakage->image

            ]);
        }
    }
}
