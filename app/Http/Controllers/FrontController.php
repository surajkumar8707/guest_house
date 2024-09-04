<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function aboutUs()
    {
        return view('about');
    }
    public function room()
    {
        return view('room');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function blog()
    {
        return view('blog');
    }

    public function contactUs()
    {
        return view('contact');
    }
}
