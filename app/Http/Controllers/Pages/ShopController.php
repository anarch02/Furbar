<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    const BANNER = 'shop';

    public function index()
    {
        return view('pages.shop', [
            'banner' => self::BANNER,
            'products' => Product::paginate(12),
        ]);
    }
}
