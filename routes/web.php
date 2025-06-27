<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;
use PHPUnit\Framework\Constraint\StringMatchesFormatDescription;

Route::get('/home', function () {
    return view('pages.home');
})->name('/');
Route::get('/aboutusssssss',function(){
    return view('pages.about');
})->name('about');

Route::get('/contact',function(){
    return view('pages.contact');
})->name('contact');