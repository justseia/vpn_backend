<?php

namespace App\Http\Controllers;

class AllController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }

    public function price()
    {
        return view('price');
    }

    public function blog()
    {
        return view('blog');
    }

    public function profile()
    {
        return view('profile');
    }

    public function pay() {
        return view('pay');
    }
}
