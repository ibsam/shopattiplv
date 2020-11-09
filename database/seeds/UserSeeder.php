<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=DB::connection('mysql_old')->table('user')->get();
        foreach($users as $user){
            DB::table('customers')->insert([
                'id'=>$user->user_id,
                'username'=>$user->username,
                'surname'=>$user->surname,
                'email'=>$user->email,
                'phone'=>$user->phone,
                'address1'=>$user->address1,
                'address2'=>$user->address2,
                'city'=>$user->city,
                'zip'=>$user->zip,
                'langlat'=>$user->langlat,
                'password'=>$user->password,
                'fb_id'=>$user->fb_id,
                'g_id'=>$user->g_id,
                'g_photo'=>$user->g_photo,
                'creation_date'=>$user->creation_date,
                'google_plus'=>$user->google_plus,
                'skype'=>$user->skype,
                'facebook'=>$user->facebook,
                'wishlist'=>$user->wishlist,
                'last_login'=>$user->last_login,
                'user_type'=>$user->user_type,
                'user_type_till'=>$user->user_type_till,
                'left_product_type'=>$user->left_product_type,
                'downloads'=>$user->downloads,
                'country'=>$user->country,
                'state'=>$user->state,
                'wallet'=>$user->wallet,
                'product_upload'=>$user->product_upload,
                'package_info'=>$user->package_info

            ]);
        }
    }
}
