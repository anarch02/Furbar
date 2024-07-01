<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'total',
        'status',
        'payment_method',
        'payment_status',
    ];

    const STATUS_PENDING = '0';
    const STATUS_PROCESSING = '1';
    const STATUS_COMPLETED = '2';

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Cart::class, 'order_product', 'order_id', 'cart_id');
    }
}
