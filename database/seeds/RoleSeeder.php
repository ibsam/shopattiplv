<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles=DB::connection('mysql_old')->table('role')->get();
        foreach($roles as $role){
            DB::table('roles')->insert([
                'id'=>$role->role_id,
                'name'=>$role->name,
                'permission'=>$role->permission,
                'description'=>$role->description

            ]);
        }
    }
}
