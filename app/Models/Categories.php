<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Categories extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable = [
        'name',
        'image_url',

    ];

    public function group() :BelongsTo
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function subcategories() :HasMany
    {
        return $this->hasMany(SubCategories::class, 'category_id');
    }

}
