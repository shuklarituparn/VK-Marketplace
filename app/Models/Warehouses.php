<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Warehouses extends Model
{
    use HasFactory;

    protected $table='warehouses';
    protected $fillable=[
        'name',
    ];

    public function cities():BelongsTo
    {
        return $this->belongsTo(Cities::class, 'city_id');
    }
    public function warehouseinventory():HasMany
    {
        return $this->hasMany(WarehouseInventory::class);
    }
}
