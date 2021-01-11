<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentState extends Model
{
    public function order(){
        return $this->hasMany(Order::class);
    }
}
