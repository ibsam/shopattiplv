<?php

use Illuminate\Database\Seeder;
use Illuminate\Spport\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions=DB::connection('mysql_old')->table('permission')->get();
        foreach($permissions as $permission){
            DB::table('permissions')->insert([
                'id'=> $permission->permission_id,
                'name'=> $permission->name,
                'codename'=> $permission->codename,
                'parent_status'=> $permission->parent_status,
                'description'=> $permission->description

            ]);
        }
    }
}
