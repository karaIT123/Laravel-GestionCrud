<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        $title = "A propos";
        $numbers = [1,2,3];
        return view('pages/about', compact('title', 'numbers'));
    }

    public function contact()
    {

    }
}

