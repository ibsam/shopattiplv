<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\OrderDetail;
use App\OrderState;
use App\PaymentState;
use App\Customer;
use App\Product;
use App\Vendor;

class Order extends Model
{
    public function orderDetail(){
        return $this->hasMany(OrderDetail::class);
    }
    public function orderstate(){
        return $this->belongsTo(OrderState::class,'order_state_id');
    }
    public function paymentstate(){
        return $this->belongsTo(PaymentState::class,'payment_state_id');
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function product(){
    	return $this->belongsTo(Product::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
