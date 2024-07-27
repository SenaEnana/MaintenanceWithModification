<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens; 
use Illuminate\Notifications\Notifiable; 

class Customer extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable; 
   
    protected $fillable = [
        'customer_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'location',
        'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function requests()
    {
        return $this->hasMany(MaintenanceRequest::class);
    }

    public function equipment()
    {
        return $this->hasMany(Equipment::class);
    }
}
