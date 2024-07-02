<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'product_id',
        'quantity',
        'total',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Cart $cart)
        {
            $cart->total = $cart->product->price * $cart->quantity;
        });
    }

    public function order(): BelongsToMany
    {
        return $this->belongsToMany(Order::class, 'order_cart', 'cart_id', 'order_id');
    }
}
