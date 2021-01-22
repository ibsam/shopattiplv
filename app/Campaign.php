<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CampaignDetail;
use App\Category;

class Campaign extends Model
{
    //
    public function campaignDetail(){
        return $this->hasMany(CamapaignDetail::class);
    }

    public function category(){
        return $thi->belongsTo(Category::class);
    }
}
