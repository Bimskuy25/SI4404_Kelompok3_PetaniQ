<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProductController;
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
})->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home');

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/login',function () {
//     return view('login');
// });

// For Authenticate
Route::get('/login', 'App\Http\Controllers\RoleController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\RoleController@login');
Route::post('/logout', 'App\Http\Controllers\RoleController@logout')->name('logout');

Route::get('/adminlogin', 'App\Http\Controllers\RoleController@showAdminLoginForm')->name('adminlogin');
Route::post('/adminlogin', 'App\Http\Controllers\RoleController@AdminLogin');

Route::get('/register', 'App\Http\Controllers\RoleController@showRegisterForm')->name('register');
Route::post('/register', 'App\Http\Controllers\RoleController@register');

Route::resource('/product', 'App\Http\Controllers\ProductController');

// Route::post('/login', 'Auth\LoginController@login');

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

// Route::get('/belipanen', function () {
//     return view('belipanen');
// });

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

Route::get('/modalku', function () {
    return view('modalku');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/detail', function () {
    return view('detail');
});


