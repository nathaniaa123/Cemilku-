<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\SnackController;
use App\Http\Controllers\admin\CustomizeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CollectionController;
use App\Http\Controllers\Admin\DecorationController;
use App\Http\Controllers\UserController;

// ADMIN

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    //buat export bang
    Route::get('/snack/export', [App\Http\Controllers\Admin\SnackController::class, 'export'])->name('snack.export');
    //buat import bang
    Route::post('/snack/import', [App\Http\Controllers\Admin\SnackController::class, 'import'])->name('snack.import');

    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('snack', SnackController::class);
    Route::resource('decoration', DecorationController::class);
    Route::resource('collection', CollectionController::class);
    Route::resource('order', OrderController::class);
    Route::resource('user', UserController::class);
    Route::resource('customize', CustomizeController::class);
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes(['verify' => true]);

Route::get('/auth-google-redirect', [RegisterController::class, 'google_redirect'])->name('google-redirect');
Route::get('/auth-google-callback', [RegisterController::class, 'google_callback'])->name('google-callback');

Route::middleware('auth', 'verified')->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/mysterybox', function() {
        return view('mysterybox');
    });
});
