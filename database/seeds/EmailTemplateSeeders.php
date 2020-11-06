<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailTemplateSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emails=DB::connection('mysql_old')->table('email_template')->get();
        foreach($emails as $email){
            DB::table('email_templates')->insert([
                'id'=>$email->email_template_id,
                'title'=>$email->title,
                'subject'=>$email->subject,
                'body'=>$email->body

            ]);
        }
    }
}
