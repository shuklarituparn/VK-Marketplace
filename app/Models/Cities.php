<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cities extends Model
{
    use HasFactory;
    protected $table='cities';
    protected $fillable=['name'];
    public function warehouse():HasMany
    {
        return $this->hasMany(Warehouses::class, 'city_id');
    }
    public function local_price():HasMany

    {
        return $this->hasMany(LocalPrice::class, 'city_id');
    }
}
