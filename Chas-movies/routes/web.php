<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\regUserController;
use App\Models\User;
use App\Models\Film;
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

Route::get('/', function () {
    $users = User::all();
    return view('home', ["users" => $users]);
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

Route::get('/movie', function () {
    $users = User::all();
    return view('movie', ["users" => $users])->name('movie');
});

Route::get('/show', function () {
    $users = User::all();
    return view('show', ["users" => $users])->name('show');
});

Route::get('/watchlist', function () {
    $users = User::all();
    return view('watchlist', ["users" => $users])->name('watchlist');
});;

Route::post('movie/add-movie', [RegisteredUserController::class, 'createMovie'])->middleware(['auth', 'verified'])->name('add.movie'); // Test route!
Route::post('movie/add-show', [RegisteredUserController::class, 'createShow'])->middleware(['auth', 'verified'])->name('add.show');
Route::get('/movie', [RegisteredUserController::class, 'readAllMovies'])->name('movie');
Route::get('/show', [RegisteredUserController::class, 'readAllShows'])->name('show');
Route::get('/watchlist', [RegisteredUserController::class, 'createWatchlist'])->middleware(['auth', 'verified'])->name('watchlist');
Route::delete('movie/deletemovie/{id}', [RegisteredUserController::class, "deleteMovies"])->middleware(['auth', 'verified'])->name('movie.delete');
Route::delete('dashboard/d/{id}', [RegisteredUserController::class, "deleteUser"])->middleware(['auth', 'verified'])->name('user.delete');
Route::put('dashboard/admin/{id}', [RegisteredUserController::class, "makeAdmin"])->middleware(['auth', 'verified'])->name('user.admin');
Route::delete('show/deleteshow/{id}', [RegisteredUserController::class, "deleteShows"])->middleware(['auth', 'verified'])->name('show.delete');
Route::delete('comments/{id}', [RegisteredUserController::class, "deleteComment"]);
Route::get('/kategori', [RegisteredUserController::class, "displayGenre"]);
Route::get('film-view/{id}', [RegisteredUserController::class, "filmView"])->name('film-view');


require __DIR__ . '/auth.php';
