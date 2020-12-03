<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class ProductReview extends Model
{
    //
    public function product(){

        return $this->belongsTo(Product::class);
    }
}
