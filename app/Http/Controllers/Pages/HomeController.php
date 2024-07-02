<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // TODO: Надо реализовать сортировку продукттов (новые, желаенные, топ)
        return view('pages.home', [
            'newProducts' => $this->newProducts(),
        ]);
    }


    private function newProducts()
    {
        $categroies = Category::all();
        $newProducts = [];
        foreach ($categroies as $category) {
            $newProducts[$category->name] = $category->products()->orderBy('created_at', 'desc')->limit(3)->get();
        }

        return $newProducts;
        // return Product::orderBy('created_at', 'desc')->limit(10)->get();
    }

    private function topProducts()
    {
       $topProducts = [];

    }
}
