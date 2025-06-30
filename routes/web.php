<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    return view('welcome');
});
Route::get('/about',function(){
    return view('pages.about');
});
Route::get('/contact',function(){
    return view('pages.contact');
});
