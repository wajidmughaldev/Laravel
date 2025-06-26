<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    return $request;
});
Route::get('/about',function(){
    return view('pages.about');
});
Route::get('/contact',function(){
    return view('pages.contact');
});

// only returning view 

Route::view('/welcome','welcome');

// 3rd parameter is optional to pass data to route
// Route::view('/welcome','welcome',['name'=>'wajid']);
