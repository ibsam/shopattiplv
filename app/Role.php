<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Model;
use App\User;

class Role extends Model
{
    //
    public function user(){
        return $this->belongsTo(User::class);
    }

}
