<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\CustomerDetail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\CustomerResetPasswordNotification;

class Customer extends Authenticatable
{
    //
    use Notifiable;
    

    /**
    * Send the password reset notification.
    *
    * @param string $token
    * @return void
    *
    **
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $guard = 'customers';
    protected $fillable = [
        'first_name', 'last_name','email', 'password','phone_no'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function customerDetail(){
        return $this->hasMany(CustomerDetail::class);
    }

    public function sendPasswordResetNotification($token)
    {   //dd($token);
        $this->notify(new CustomerResetPasswordNotification($token));
    }
    
}
