<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

// ログインAPI
Route::post('api/login', [LoginController::class, 'login']);

Route::get('api/sanctum/csrf-cookie', '\Laravel\Sanctum\Http\Controllers\CsrfCookieController@show');

// Auth::routes();

// Route::get('/', [HomeController::class, 'index'])->name('index');
// Route::view('/about', 'about');
// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::post('/store', [HomeController::class, 'store'])->name('store');
// Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('edit');
// Route::post('/update', [HomeController::class, 'update'])->name('update');
// Route::post('/destroy', [HomeController::class, 'destory'])->name('destory');