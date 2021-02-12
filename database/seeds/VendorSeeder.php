<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create([
            'name' => 'admin',
            'email' => 'admin@shopattip.com',
            'password' => Hash::make(123123123),
            // 'role_id' => 1,
        ]);
        $vendors=DB::connection('mysql_old')->table('vendor')->get();
        foreach($vendors as $vendor){

            $userData =  User::create([
                'name' => $vendor->name,
                'email' => $vendor->email,
                'password' => Hash::make(123123123),
                // 'role_id' => 2,
            ]);

            DB::table('vendors')->insert([
                'id'=>$vendor->vendor_id,
                'vendor_type_id'=>$vendor->vendor_type_id,
                'user_id' => $userData->id,
                'vendor_type'=>$vendor->vendor_type,
                'name'=>$vendor->name,
                'email'=>$vendor->email,
                'password'=>$vendor->password,
                'company'=>$vendor->company,
                'display_name'=>$vendor->display_name,
                'address'=>$vendor->address1,
                'address2'=>$vendor->address2,
                'status'=>$vendor->status,
                'membership'=>$vendor->membership,
                'create_timestamp'=>$vendor->create_timestamp,
                'approve_timestamp'=>$vendor->approve_timestamp,
                'member_timestamp'=>$vendor->member_timestamp,
                'member_expire_timestamp'=>$vendor->member_expire_timestamp,
                'details'=>$vendor->details,
                'last_login'=>$vendor->last_login,
                'facebook'=>$vendor->facebook,
                'skype'=>$vendor->skype,
                'google_plus'=>$vendor->google_plus,
                'twitter'=>$vendor->twitter,
                'youtube'=>$vendor->youtube,
                'pinterest'=>$vendor->pinterest,
                'stripe_details'=>$vendor->stripe_details,
                'paypal_email'=>$vendor->paypal_email,
                'preferred_payment'=>$vendor->preferred_payment,
                'cash_set'=>$vendor->cash_set,
                'stripe_set'=>$vendor->stripe_set,
                'paypal_set'=>$vendor->paypal_set,
                'phone'=>$vendor->phone,
                'keywords'=>$vendor->keywords,
                'description'=>$vendor->description,
                'lat_lang'=>$vendor->lat_lang,
                'country'=>$vendor->country,
                'city'=>$vendor->city,
                'zip'=>$vendor->zip,
                'state'=>$vendor->state,
                'c2_set'=>$vendor->c2_set,
                'c2_user'=>$vendor->c2_user,
                'c2_secret'=>$vendor->c2_secret,
                'vp_set'=>$vendor->vp_set,
                'vp_merchant_id'=>$vendor->vp_merchant_id,
                'pum_set'=>$vendor->pum_set,
                'pum_merchant_key'=>$vendor->pum_merchant_key,
                'pum_merchant_salt'=>$vendor->pum_merchant_salt,
                'Name_Of_Courier_Company'=>$vendor->Name_Of_Courier_Company,
                'COD_Account_Number'=>$vendor->COD_Account_Number,
                'Vendors_Business_Facebook_PageLink'=>$vendor->Vendors_Business_Facebook_PageLink,
                'Vendors_Business_Website_Link'=>$vendor->Vendors_Business_Website_Link,
                'Bank_Name'=>$vendor->Bank_Name,
                'Account_Number'=>$vendor->Account_Number,
                'commission_amount'=>$vendor->commission_amount

            ]);
        }
    }
}
