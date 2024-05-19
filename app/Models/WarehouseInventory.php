<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WarehouseInventory extends Model
{
    use HasFactory;

    protected $table='warehouse_inventory';
    protected $fillable=[
        'quantity'
    ];
    public function warehouse():BelongsTo
    {
        return $this->belongsTo(Warehouses::class, 'warehouse_id');

    }
    public function products():BelongsTo
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
