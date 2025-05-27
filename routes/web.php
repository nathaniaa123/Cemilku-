<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mysterybox', function() {
    return view('mysterybox');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
