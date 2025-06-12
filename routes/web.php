<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD

=======
>>>>>>> c2813c6a99c29391f2613bfec4bba03146304670

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\SnackController;
use App\Http\Controllers\admin\CustomizeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CollectionController;
use App\Http\Controllers\Admin\DecorationController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\UserController;

// ADMIN

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    // Snack Export/Import
    Route::get('/snack/export', [SnackController::class, 'export'])->name('snack.export');
    Route::post('/snack/import', [SnackController::class, 'import'])->name('snack.import');
    // Snack Recycle Bin
    Route::get('/snack/trash', [SnackController::class, 'trash'])->name('snack.trash');

    // Snack Restore soft delete
    Route::put('/snack/{id}/restore', [SnackController::class, 'restore'])->name('snack.restore');

    Route::put('/snack/restore-all', [SnackController::class, 'restoreAll'])->name('snack.restore-all');

    // Snack Force delete
    Route::delete('/snack/{id}/force-delete', [SnackController::class, 'forceDelete'])->name('snack.force-delete');

    // Decoration Export/Import
    Route::get('/decoration/export', [DecorationController::class, 'export'])->name('decoration.export');
    Route::post('/decoration/import', [DecorationController::class, 'import'])->name('decoration.import');

    // Decoration Recycle Bin
    Route::get('/decoration/trash', [DecorationController::class, 'trash'])->name('decoration.trash');

    // Decoration Restore soft delete
    Route::put('/decoration/{id}/restore', [DecorationController::class, 'restore'])->name('decoration.restore');

    Route::put('/decoration/restore-all', [DecorationController::class, 'restoreAll'])->name('decoration.restore-all');

    // Decoration Force delete
    Route::delete('/decoration/{id}/force-delete', [DecorationController::class, 'forceDelete'])->name('decoration.force-delete');

    // Collection Export/Import
    Route::get('/collection/export', [CollectionController::class, 'export'])->name('collection.export');
    Route::post('/collection/import', [CollectionController::class, 'import'])->name('collection.import');

    // Collection Recycle Bin
    Route::get('/collection/trash', [CollectionController::class, 'trash'])->name('collection.trash');

    // Collection Restore soft delete
    Route::put('/collection/{id}/restore', [CollectionController::class, 'restore'])->name('collection.restore');
    Route::put('/collection/restore-all', [CollectionController::class, 'restoreAll'])->name('collection.restore-all');

    // Collection Force delete
    Route::delete('/collection/{id}/force-delete', [CollectionController::class, 'forceDelete'])->name('collection.force-delete');

    // Resource routes
    // Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('snack', SnackController::class);
    Route::resource('decoration', DecorationController::class);
    Route::resource('collection', CollectionController::class);
    Route::resource('order', OrderController::class);
    Route::resource('user', UserController::class);
    Route::resource('customize', CustomizeController::class);
});

<<<<<<< HEAD
Route::get('/index', function () {
    return view('index');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


=======
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


// HOMEPAGE

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes(['verify' => true]);

Route::get('/auth-google-redirect', [RegisterController::class, 'google_redirect'])->name('google-redirect');
Route::get('/auth-google-callback', [RegisterController::class, 'google_callback'])->name('google-callback');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('user', UserController::class);
    Route::resource('address', AddressController::class);
    Route::get('/profile', [UserController::class, 'index'])->name('profile');
    Route::get('/mysterybox', function () {
        $mode = 'Budget';
        return view('mysterybox', compact('mode'));
    });
});


// Route::middleware(['auth'])->group(function () {
//     Route::patch('/addresses/{address}/set-primary', [AddressController::class, 'setPrimary'])->name('addresses.setPrimary');
// });

// MYSTERYBOX PAGE
Route::match(['get', 'post'], '/mysterybox', function (Request $request) {
    if ($request->isMethod('post')) {
        // Jika ada POST ke /mysterybox, langsung redirect ke GET /mysterybox
        return redirect()->route('mysterybox');
    }
    $mode = session('mode', 'Budget');
    $budget = session('budget');
    $mood = session('mood');
    return view('mysterybox', compact('mode', 'budget', 'mood'));
})->name('mysterybox');

Route::post('/set-budget', function (Request $request) {
    $request->validate(['budget' => 'required']);
    session(['budget' => $request->budget, 'mode' => 'Mood']);
    return redirect()->route('mysterybox');
})->name('set-budget');

Route::post('/set-mood', function (Request $request) {
    $request->validate(['mood' => 'required']);
    session(['mood' => $request->mood, 'mode' => 'Done']);
    return redirect()->route('mysterybox');
})->name('set-mood');

Route::post('/reset-session', function () {
    session()->forget(['budget', 'mood', 'mode']);
    return response()->json(['status' => 'reset']);
})->name('reset-session');
>>>>>>> c2813c6a99c29391f2613bfec4bba03146304670
