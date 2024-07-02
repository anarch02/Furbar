<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'images',
        'name',
        'sku',
        'information',
        'description',
        'price',
        'colors',
        'tags',
        'status',
    ];

    protected $casts = [
        'images' => 'array',
        'colors' => 'array',
        'tags' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Product $product)
        {
            $product->slug = $product->slug ?? str($product->name)->slug();
        });
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'product_category', 'product_id', 'category_id');
    }

    public function carts(): HasMany
    {
        return $this->hasMany(Cart::class);
    }

    public function wishes(): BelongsToMany
    {
        return $this->belongsToMany(Client::class, 'wishes', 'product_id', 'client_id');
    }

}
