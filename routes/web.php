<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    return view('welcome');
})->name('home');
Route::get('/about',function(){
    return view('pages.about');
})->name('about');
Route::get('/contact',function(){
    return view('pages.contact');
})->name('contact');

Route::get('/jsinlaravel',function(){
    return view('pages.jsinlaravel');
})->name('jsinlaravel');
