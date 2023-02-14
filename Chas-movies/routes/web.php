<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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


//Route::get('/admin/show-users', [AdminController::class, 'readAll']);

Route::get('/discover', function () {
    return view('discover');
});
Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/helpcenter', function () {
    return view('helpcenter');
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
Route::get('/user', function () {
    return view('user');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/forgot-password', function () {
    return view('forgotpass');
});