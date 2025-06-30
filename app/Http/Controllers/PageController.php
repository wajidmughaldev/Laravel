<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome(){
        return view('welcome');
    }
    public function showAbout(){
        return view('pages/about');
    }
    public function showContact(){
        return view('pages/contact');
    }
    public function showjs(){
        return view('pages.jsinlaravel');
    }
}
