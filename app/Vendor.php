<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\User;
use App\Order;
class Vendor extends Model
{
    //
    public function products(){

    	return $this->hasMany(Product::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function order(){
        return $this->hasMany(Order::class);
    }
}
