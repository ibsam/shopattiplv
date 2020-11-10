<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\SubCategory;
use App\Product;


class ChildSubCategory extends Model
{
    //
    public function category(){

    	return $this->belongsTo(Category::class);
    }

    public function subCategory(){

    	return $this->belongsTo(SubCategory::class);
    }

    public function products(){

    	return $this->hasMany(Product::class);
    }
}
