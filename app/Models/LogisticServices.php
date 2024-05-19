<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LogisticServices extends Model
{
    use HasFactory;
    protected $table='logistic_services';
    protected $fillable=[
        'name',
    ];

    public function deliveries():HasMany
    {
        return $this->hasMany(Deliveries::class, 'delivery_id');
    }
}
