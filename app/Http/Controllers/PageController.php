<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function programs()
    {
        return view('programs');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function media()
    {
        return view('media');
    }

    public function news()
    {
        return view('news');
    }

    public function contact()
    {
        return view('contact');
    }

    public function involved()
    {
        return view('involved');
    }

}