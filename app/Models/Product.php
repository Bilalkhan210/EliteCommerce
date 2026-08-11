<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'brand', 'category', 'price', 'originalPrice', 'rating',
        'reviewsCount', 'stockCount', 'inStock', 'isNew', 'isSale',
        'image', 'galleryImages', 'sku', 'colors', 'description', 'status'
    ];

    protected $casts = [
        'galleryImages' => 'array',
        'colors' => 'array',
        'inStock' => 'boolean',
        'isNew' => 'boolean',
        'isSale' => 'boolean',
        'price' => 'float',
        'originalPrice' => 'float',
        'rating' => 'float',
    ];
}
