<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $table = 'equipments'; 
    protected $primaryKey = 'equipment_id'; 

    protected $fillable = [
        'equipment_id',
        'name',
    ];  

    public function maintenanceRequests()
    {
        return $this->hasMany(MaintenanceRequest::class);
    }

}
