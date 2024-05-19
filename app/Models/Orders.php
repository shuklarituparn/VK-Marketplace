<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Orders extends Model
{
    use HasFactory;

    protected $table='orders';
    protected $fillable=[
        'total_price',
        'status',
        'date_ordered',
        'date_delivered',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function deliveries():HasMany
    {
        return $this->hasMany(Deliveries::class, 'order_id');
    }
}
