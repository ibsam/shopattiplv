<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Campaign;
use App\Product;
class CampaignDetail extends Model
{
    //
    public function campaign(){
        return $this->belongsTo(Campaign::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
