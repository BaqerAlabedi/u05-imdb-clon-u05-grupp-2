<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
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


//Följande funktion borde ligga i RegisteredUserController.php under en readAll()-funktion kanske?
Route::get('/dashboard', function () {
    $users = User::all();
    return view('dashboard', ["users" => $users]);
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/discover', function () {
    return view('discover');
});


Route::get('/', function () {
    return view('home');
});


Route::get('/helpcenter', function () {
    return view('helpcenter');
});


Route::get('/kategori', function () {
    return view('kategori');
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



require __DIR__ . '/auth.php';
