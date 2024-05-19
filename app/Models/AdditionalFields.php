<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AdditionalFields extends Model
{
    use HasFactory;
    protected $table='additional_fields';
    protected $fillable = [
        'name',
        'value',
        "product_id",
    ];

    public function subcategories():BelongsToMany
    {
       return $this->belongsToMany(Products::class, 'product_id');
    }

}
