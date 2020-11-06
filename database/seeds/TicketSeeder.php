<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tickets=DB::connection('mysql_old')->table('ticket')->get();
        foreach($tickets as $ticket){
            DB::table('tickets')->insert([
                'id'=>$ticket->ticket_id,
                'time'=>$ticket->time,
                'from_where'=>$ticket->from_where,
                'to_where'=>$ticket->to_where,
                'subject'=>$ticket->subject,
                'view_status'=>$ticket->view_status

            ]);
        }
    }
}
