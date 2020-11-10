<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ChildSubCategory;
use App\SubCategory;
use App\Product;

class Category extends Model
{
    //

    public function childSubCategory(){
    	return $this->hasMany(ChildSubCategory::class);
    }

    public function subCategory(){
    	return $this->hasMany(SubCategory::class);
    }

    public function product(){
    	return $this->hasMany(Product::class);
    }

    
}
