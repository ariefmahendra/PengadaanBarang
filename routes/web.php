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
    return view('profil');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/chart', function () {
    return view('chart');
});
