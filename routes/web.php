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
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// ////////////////////////////
// User Page
// ////////////////////////////
Route::get('/user-dashboard', function () {
    return view('user.dashboard');
})->name('user-dashboard');

Route::get('/user-riwayat', function () {
    return view('user.riwayat');
})->name('user-riwayat');

Route::get('/user-sumbang', function () {
    return view('user.sumbang');
})->name('user-sumbang');

Route::get('/user-cari', function () {
    return view('user.cari');
})->name('user-cari');

Route::get('/user-profile', function () {
    return view('user.profile');
})->name('user-profile');



// ////////////////////////////
// Admin Page
// ////////////////////////////


