<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function advantages()
    {
        return view('advantages');
    }

    public function specifications()
    {
        return view('specifications');
    }

    public function comparing()
    {
        return view('comparing');
    }

    public function photos()
    {
        return view('photos');
    }

    public function buy()
    {
        return view('buy');
    }

    public function about()
    {
        return view('about');
    }
}
