<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function orderDetail(){

        return $this->hasMany(OrederDetail::class);

    }
    public function orderstate(){
        return $this->belongsTo(OrderState::class);
    }
    public function paymentstate(){
        return $this->belongsTo(PaymentState::class);
    }
}
