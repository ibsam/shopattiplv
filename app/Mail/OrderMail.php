<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $OrderDetails;
    protected $CustomerDetails;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($OrderDetails,$CustomerDetails)
    {
        //
        $this->OrderDetails = $OrderDetails;
        $this->CustomerDetails = $CustomerDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build($OrderDetails)
    {
        return $this->view('user.order',[
            'OrderDetails' =>  $this->OrderDetails,
        ]);
    }
}
