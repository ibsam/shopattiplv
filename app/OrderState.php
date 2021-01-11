<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;
class OrderState extends Model
{
    public function order(){
        return $this->hasMany(Order::class,'order_state_id');
    }
}
