<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;

class CustomerDetail extends Model
{
    //
    // protected $fillable = [
    //     'first_name', 'last_name','email', 'password','phone_no','customer_id','country','address1'
    // ];
    
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
