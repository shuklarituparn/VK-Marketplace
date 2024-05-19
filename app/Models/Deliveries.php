<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Deliveries extends Model
{
    use HasFactory;

    protected $table='deliveries';
    protected $fillable=[
        'status',
    ];
    public function order():BelongsTo
    {
        return $this->belongsTo(Orders::class, 'order_id');

    }
    public function logistics():BelongsTo
    {
        return $this->belongsTo(LogisticServices::class, 'logistic_service_id');
    }
}
