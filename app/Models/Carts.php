<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carts extends Model
{
    use HasFactory;
    protected $table='carts';
    protected $fillable = [
        'user_id',
        'quantity',
        "product_id",
    ];

    public function user():BelongsTo
    {
            return $this->belongsTo(User::class, 'user_id');
    }
    public function products():HasMany
    {
        return $this->hasMany(Products::class, 'cart_id');
    }
}
