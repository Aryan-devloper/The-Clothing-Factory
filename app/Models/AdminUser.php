<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AdminUser extends Authenticatable 
{
    use Notifiable; 

    
    
    protected $table = 'adminusers';

    
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
    ];

   
    
    protected $hidden = [
        'password',
    ];

    
    
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
