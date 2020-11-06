<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $TMSs=DB::connection('mysql_old')->table('ticket_message')-get();
        foreach($TMSs as $TMS){
            DB::table('ticket_messages')->insert([
                'id'=>$TMS->ticket_message_id,
                'time'=>$TMS->time,
                'from_where'=>$TMS->from_where,
                'to_where'=>$TMS->to_where,
                'ticket_id'=>$TMS->ticket_id,
                'subject'=>$TMS->subject,
                'view_status'=>$TMS->view_status,
                'message'=>$TMS->message

            ]);
        }
    }
}
