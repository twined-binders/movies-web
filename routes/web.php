<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\Checkout;
use App\Models\Film;

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

Route::get('/film/home', function () {
    $films = DB::table('films')->get();
    return view('film.home', compact('films'));
});

Route::get('/film/about', function () {
    return view('film.aboutus');
});

Route::get('/film/trending', function () {
    $films = DB::table('films')->orderBy('created_at', 'desc')->get();
    return view('film.trending', compact('films'));
});

Route::resource('film', FilmController::class);
Route::resource('film/checkout', Checkout::class);


