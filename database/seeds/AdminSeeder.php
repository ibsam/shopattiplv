<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = DB::connection('mysql_old')->table('admin')->get();
        foreach($admins as $admin){

         DB::table('admins')->insert([
            'id'=> $admin->admin_id,
            'name'=> $admin->name,
            'phone'=> $admin->phone,
            'address'=> $admin->address,
            'email'=> $admin->email,
            'password'=> $admin->password,
            'role'=> $admin->role,
            'timestamp'=> $admin->timestamp

         ]);

        }
    }
}
