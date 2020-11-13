<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Brand;
use App\Vendor;
use App\ChildSubCategory;
use App\SubCategory;
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

}
