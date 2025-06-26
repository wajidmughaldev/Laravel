<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;
use PHPUnit\Framework\Constraint\StringMatchesFormatDescription;

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



// route parameter

// Route parameters are always encased within {} braces and should consist of alphabetic characters. Underscores (_) are also acceptable within route parameter names. Route parameters are injected into route callbacks / controllers based on their order - the names of the route callback / controller arguments do not matter.


// Route::get('/product/{id}/review/{content}',function(String $id, String $content=null ){
//     return view('product',['pid'=>$id,'comment'=>$content]);
// });

// Optional Parameters
// Occasionally you may need to specify a route parameter that may not always be present in the URI. You may do so by placing a ? mark after the parameter name. Make sure to give the route's corresponding variable a default value:
    Route::get('/product',function(){
        return view('product');
    });

Route::get('/product/{id?}/review/{content?}',function(?String $id ="2", ?String $content='great' ){
    return view('product',['pid'=>$id,'comment'=>$content]);
});

Route::get('/user/{name?}',function(?String $name){
    return view('profile',['username'=>$name]);
})->where('name','[a-zA-Z]+');

Route::get('/user/{name?}/age/{age?}',function(?String $name=null, ?String $age=null){
    return view('profile',['username'=>$name,'age'=>$age]);
})->where([
    'name','[a-zA-Z]+',
    'age','[0-9]+'
]);


// For convenience, some commonly used regular expression patterns have helper methods that allow you to quickly add pattern constraints to your routes:

// Route::get('/user/{id}/{name}', function (string $id, string $name) {
//     // ...
// })->whereNumber('id')->whereAlpha('name');

// Route::get('/user/{name}', function (string $name) {
//     // ...
// })->whereAlphaNumeric('name');

// Route::get('/user/{id}', function (string $id) {
//     // ...
// })->whereUuid('id');

// Route::get('/user/{id}', function (string $id) {
//     // ...
// })->whereUlid('id');

// Route::get('/category/{category}', function (string $category) {
//     // ...
// })->whereIn('category', ['movie', 'song', 'painting']);

// Route::get('/category/{category}', function (string $category) {
//     // ...
// })->whereIn('category', CategoryEnum::cases());