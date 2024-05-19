<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class LocalPrice extends Model
{
    use HasFactory;

    protected $table='local_product_price';
    protected $fillable=[
        'price',
    ];

    public function products():BelongsTo
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
    public function cities():BelongsTo
    {
        return $this->belongsTo(Cities::class, 'city_id');
    }

}
