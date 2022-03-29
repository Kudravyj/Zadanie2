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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users', [App\Http\Controllers\ProfileController::class, 'index'])->name('dashboard');

Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');

Route::post('/p', [App\Http\Controllers\UserController::class, 'store']);

Route::get('/p/{user}/delete', [App\Http\Controllers\UserController::class, 'destroy']);
