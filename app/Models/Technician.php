<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens; 
use Illuminate\Notifications\Notifiable; 

class Technician extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'technician_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'job_type_id',
        'location_id',
        'password',
    ]; 

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function requests()
    {
        return $this->hasMany(MaintenanceRequest::class);
    }
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    public function jobType()
    {
        return $this->belongsTo(JobType::class);
    }
}
