<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Contacts=DB::connection('mysql_old')->table('contact_message')->get();
        foreach($Contacts as $contact){
            DB::table('contact_messages')->insert([
                'id'=>$contact->contact_message_id,
                'name'=>$contact->name,
                'subject'=>$contact->subject,
                'email'=>$contact->email,
                'message'=>$contact->message,
                'timestamp'=>$contact->timestamp,
                'view'=>$contact->view,
                'reply'=>$contact->reply,
                'other'=>$contact->other

            ]);
        }
    }
}
