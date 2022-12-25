<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/belipanen', function () {
    return view('belipanen');
});

Route::get('/jualpanen', function () {
    return view('jualpanen');
});

Route::get('/modalin', function () {
    return view('modalin');
});

Route::get('/konsultasi', function () {
    return view('konsultasi');
});

Route::get('/transaksi', function () {
    return view('transaksi');
});

Route::get('/modalmastani', function () {
    return view('modalinmastani');
});

Route::get('/modalpaktani', function () {
    return view('modalinpaktani');
});

Route::get('/modaltani', function () {
    return view('modalintani');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/register', function () {
    return view('register');
});

