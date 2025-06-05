<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes(['verify' => true]);

Route::get('/auth-google-redirect', [RegisterController::class, 'google_redirect'])->name('google-redirect');
Route::get('/auth-google-callback', [RegisterController::class, 'google_callback'])->name('google-callback');

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
