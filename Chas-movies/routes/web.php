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

Route::get('/discover', function () {
    return view('discover');
});
Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});


Route::get('/kategori', function () {
    return view('kategori');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/film-view', function () {
    return view('film-view');
});