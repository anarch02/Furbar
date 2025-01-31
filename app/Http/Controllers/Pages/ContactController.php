<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    const BANNER = 'contact';

    public function index()
    {
        return view('pages.contact', [
            'banner' => self::BANNER,
        ]);
    }
    //
}
