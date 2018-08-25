<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function check($email)
    {
       return $user = User::firstOrCreate(['email' => $email]);
    }
}
