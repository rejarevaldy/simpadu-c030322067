<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.auth-login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.app.dashboard-simpadu', ['type_menu' => 'dashboard']);
    })->name('home');
});


// Route::get('/login', function () {
//     return view('auth.auth-login');
// })->name('login');
// Route::get('/register', function () {
//     return view('auth.auth-register');
// })->name('register');
// Route::get('/forgot', function () {
//     return view('auth.auth-forgot-password');
// })->name('forgot-password');
// Route::get('/reset', function () {
//     return view('auth.auth-reset-password');
// })->name('reset-password');
