<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestType extends Model
{
    use HasFactory;

    protected $table = 'request_types';
    protected $primaryKey = 'request_type_id'; 

    protected $fillable = [
        'request_type_id',
        'name',
        'description',
    ]; 

    public function maintenanceRequests()
    {
        return $this->hasMany(MaintenanceRequest::class);
    }

}
