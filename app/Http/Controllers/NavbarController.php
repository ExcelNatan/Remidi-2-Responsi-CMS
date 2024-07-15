<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function profile()
    {
        return view('profile');
    }

    public function contact()
    {
        return view('contact');
    }

    public function login()
    {
        return view('login');
    }
}
