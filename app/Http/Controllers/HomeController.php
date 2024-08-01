<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function music()
    {
        return view('music');
    }

    public function shop()
    {
        return view('shop');
    }

    public function video()
    {
        return view('video');
    }

    public function about()
    {
        return view('about');
    }

}


