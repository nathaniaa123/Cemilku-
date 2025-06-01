<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Attributes\Group;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify'=>true]);

Route::get('/auth-google-redirect', [RegisterController::class, 'google_redirect'])->name('google-redirect');
Route::get('/auth-google-callback', [RegisterController::class, 'google_callback'])->name('google-callback');

Route::middleware('auth', 'verified')->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
