<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\OrderDetail;
use App\OrderState;
use App\PaymentState;
use App\Customer;

class Order extends Model
{
    public function orderDetail(){

        return $this->hasMany(OrederDetail::class);

    }
    public function orderstate(){
        //dd(OrderState::class);
        return $this->belongsTo(OrderState::class,'order_state_id');
    }
    public function paymentstate(){
        return $this->belongsTo(PaymentState::class);
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
