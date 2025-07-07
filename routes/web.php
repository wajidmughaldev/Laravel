<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestController;

Route::controller(PageController::class)->group(function(){
    Route::get('/','showHome')->name('home');
    Route::get('/about','showAbout')->name('about');
    Route::get('/contact','showContact')->name('contact');
});
Route::get('/test', TestController::class)->name('test');
