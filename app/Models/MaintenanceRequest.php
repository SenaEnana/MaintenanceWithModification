<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'equipment_id',
        'request_type_id',
        'description',
        'status',
    ];

    const STATUS_PENDING = 'Pending';
    const STATUS_COMPLETED = 'Completed';

    public function markAsPending()
    {
        $this->update(['status' => self::STATUS_PENDING]);
    }

    public function markAsCompleted()
    {
        $this->update(['status' => self::STATUS_COMPLETED]);
    }

    // Relationships
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }

    public function requestType()
    {
        return $this->belongsTo(RequestType::class);
    }
}
