<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;
use PHPUnit\Framework\Constraint\StringMatchesFormatDescription;


// routes/web.php

// Route::prefix('pages')->group(function () {

    Route::get('/home', function () {
        return view('pages.home');
    })->name('home');

    Route::get('/aboutus', function () {
        return view('pages.about');
    })->name('about');

    Route::get('/contact', function () {
        return view('pages.contact');
    })->name('contact');

// });
Route::get('/welcome',function(){
    return view('welcome',['name'=>'wajid']);
});

Route::redirect('/welcome','/home');

