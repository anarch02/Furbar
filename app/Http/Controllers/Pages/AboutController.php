<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    const BANNER = 'about';

    public function index()
    {
        return view('pages.about', [
            'banner' => self::BANNER,
        ]);
    }
    //
}
