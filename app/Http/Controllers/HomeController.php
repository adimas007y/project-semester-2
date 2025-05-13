<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function book()
    {
        return view('book.index');
    }

    public function about()
    {
        return view('about.index');
    }

    public function contact()
    {
        return view('contact.index');
    }

    public function profile()
    {
        return view('custom-dashboard');
    }

    public function login()
    {
        return view('auth.custom-login');
    }
}
