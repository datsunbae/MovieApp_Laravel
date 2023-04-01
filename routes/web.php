<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;

//Admin
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\EpisodeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [IndexController::class, 'home'])->name('homepage');
Route::get('/categoryurl/{slug}', [IndexController::class, 'category'])->name('category');
Route::get('/genreurl/{slug}', [IndexController::class, 'genre'])->name('genre');
Route::get('/countryurl/{slug}', [IndexController::class, 'country'])->name('country');
Route::get('/moviesurl/{slug}', [IndexController::class, 'movies'])->name('movies');
Route::get('/tvshowsurl', [IndexController::class, 'tvshows'])->name('tvshows');
Route::get('/signupurl', [IndexController::class, 'signup'])->name('signup');
Route::get('/signinurl', [IndexController::class, 'signin'])->name('signin');
Route::get('/forgotpasswordurl', [IndexController::class, 'forgotpassword'])->name('forgotpassword');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Admin
Route::resource('category', CategoryController::class);
Route::post('resorting', [CategoryController::class,'resorting'])->name('resorting');
Route::resource('genre', GenreController::class);
Route::resource('country', CountryController::class);
Route::resource('episode', EpisodeController::class);
Route::resource('movie', MovieController::class);
