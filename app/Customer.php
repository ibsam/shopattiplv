<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CustomerDetail;

class Customer extends Model
{
    //
    public function customerDetail(){
        return $this->hasMany(CustomerDetail::class)
    }
    
}
