<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'zip',
        'country',
        'password',
    ];

    public function wishes(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'wishes', 'client_id', 'product_id');
    }
}
