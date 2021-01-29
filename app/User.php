<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\AdminPasswordReset;
use App\Role;
use App\Vendor;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime', 
    ];

    public function sendPasswordResetNotification($token)
    {   //dd($token);
        $this->notify(new AdminPasswordReset($token));
    }
    public function vendor(){
        return $this->hasOne(Vendor::class);
    }
    public function role(){
        return $this->belongsTo(Role::class);
    }
}
