<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request)
    {
        $seo = ['title' => 'Система ЖКХ', 'description' => 'Система ЖКХ'];

        return view('pages.home', compact('seo'));
    }
}
