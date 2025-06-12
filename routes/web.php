<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function(){
    return view('homepage');
})-> name('homepage');

Route::get('/custom', function(){
    return view('custom');
})->name('custom');

Route::get('/collections', function(){
    return view('collections');
})->name('collections');

Route::get('/order', function(){
    return view('order');
})->name('order');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
