<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function orderDetail(){

        return $this->hasMany(OrederDetail::class);

    }
    public function orderstate(){
        return $this->hasMany(OrderState::class);
    }
    public function paymentstate(){
        return $this->hasMany(PaymentState::class);
    }
}
