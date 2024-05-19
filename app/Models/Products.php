<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Products extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable = [
        'name',
        'image_url',
        'price',
        'quantity',


    ];

    public function subcategories() :BelongsTo
    {
        return $this->belongsTo(SubCategories::class, 'sub_categories_id');
    }
    public function cart():BelongsTo
    {
        return $this->belongsTo(Carts::class, 'cart_id');
    }
    public function localproductprice():HasMany
    {
        return $this->hasMany(LocalPrice::class,'product=_id');
    }
}
