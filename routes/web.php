<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\SnackController;
use App\Http\Controllers\admin\CustomizeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CollectionController;
use App\Http\Controllers\Admin\DecorationController;

// ADMIN

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    //buat export bang
    Route::get('/snack/export', [App\Http\Controllers\Admin\SnackController::class, 'export'])->name('snack.export');
    //buat import bang
    Route::post('/snack/import', [App\Http\Controllers\Admin\SnackController::class, 'import'])->name('snack.import');

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('snack', SnackController::class);
    Route::resource('decoration', DecorationController::class);
    Route::resource('collection', CollectionController::class);
    Route::resource('order', OrderController::class);
    Route::resource('user', UserController::class);
    Route::resource('customize', CustomizeController::class);

});




// Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
// USER

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Address
use App\Http\Controllers\AddressController;

Route::middleware(['auth'])->group(function () {
    Route::patch('/addresses/{address}/set-primary', [AddressController::class, 'setPrimary'])->name('addresses.setPrimary');
});
