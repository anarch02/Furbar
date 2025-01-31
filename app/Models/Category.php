<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'description'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Category $category)
        {
            $category->slug = $category->slug ?? str($category->name)->slug();
        });
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_category', 'category_id', 'product_id');
    }

}
