<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }

    public function contact(){
        return view('contact');
    }

    public function location(){
        return view('location');
    }

    public function staff(){
        return view('auth.login');
    }
}

