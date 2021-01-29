<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Brand;
use App\Vendor;
use App\ChildSubCategory;
use App\SubCategory;
use App\ProductReview;
use App\OrderDetail;
use App\ProductVariation;
use App\CampaignDetail;
use App\Commission;

class Product extends Model
{
    //

    public function category(){

    	return $this->belongsTo(Category::class);
    }

    public function brand(){

    	return $this->belongsTo(Brand::class);
    }

    public function vendor(){
    	return $this->belongsTo(Vendor::class);
    }

    public function productReviews(){

        return $this->hasMany(ProductReview::class);
    }
    public function getPriceAttribute($price)
    {
        return $this->attributes['price'] = sprintf(number_format($price, 2));
    }
    public function orderDetail(){
        return $this->hasOne(OrderDetail::class);
    }
    public function variation(){
        return $this->hasMany(ProductVariation::class);
    }
    public function campaignDetail(){
        return $this->hasOne(CampaignDetail::class);
    }
    public function commission(){
        return $this->belongsTo(Commission::class);
    }


}
