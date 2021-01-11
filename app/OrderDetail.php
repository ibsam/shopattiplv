<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public function orders(){
        return $this->belongsTo(Order::class);
    }
    // public function getPriceAttribute($price)
    // {
    //     return $this->attributes['price'] = sprintf(number_format($price, 2));
    // }
    
}
