<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\EpisodeController;
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

//Admin
Route::resource('category', CategoryController::class);
Route::post('resorting', [CategoryController::class,'resorting'])->name('resorting');
Route::resource('genre', GenreController::class);
Route::resource('country', CountryController::class);
Route::resource('episode', EpisodeController::class);
Route::resource('movie', MovieController::class);

Auth::routes();

Route::get('/admininterface', [HomeController::class, 'index'])->name('home');
