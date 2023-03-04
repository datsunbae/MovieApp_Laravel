<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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
Route::get('/danh-muc', [IndexController::class, 'category'])->name('category');
Route::get('/the-loai', [IndexController::class, 'genre'])->name('genre');
Route::get('/quoc-gia', [IndexController::class, 'country'])->name('country');
Route::get('/phim', [IndexController::class, 'movies'])->name('movies');
Route::get('/phim-bo', [IndexController::class, 'tvshows'])->name('tvshows');
Route::get('/dang-ky', [IndexController::class, 'signup'])->name('signup');
Route::get('/dang-nhap', [IndexController::class, 'signin'])->name('signin');
Route::get('/quen-mat-khau', [IndexController::class, 'forgotpassword'])->name('forgotpassword');