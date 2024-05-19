<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    use HasFactory;
    protected $table='groups';
    protected $fillable = [
        'name',
        'image_url',

    ];

    public function categories(): HasMany
    {
        return $this->hasMany(Categories::class);
    }
}
