<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SubCategories extends Model
{
    use HasFactory;
    protected $table='sub_categories';
    protected $fillable = [
        'name',
        'image_url',

    ];

    public function categories() :HasOne
    {
        return $this->hasOne(Categories::class, 'subcategory_id');
    }

    public function products() :HasMany
    {
        return $this->hasMany(Products::class);
    }
}
