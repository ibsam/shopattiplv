<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Product;

class Category extends Model
{
    //

    public function product(){
    	return $this->hasMany(Product::class);
    }


    public function parentCategory(){

        return $this->belongsTo(self::class,'category_id');
    }
    
    public function childCategory(){

        return $this->hasMany(self::class,'category_id');
    }

    
}
