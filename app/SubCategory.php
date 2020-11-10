<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\ChildSubCategory;
use App\Product;


class SubCategory extends Model
{
    //

    public function category(){

    	return $this->belongsTo(Category::class);
    }

    public function childSubCategory(){

    	return $this->hasMany(ChildSubCategory::class);
    }

    public function products(){

    	return $this->hasMany(Product::class);
    }
}
