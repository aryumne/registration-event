<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserRegisterController;

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

Route::get('/', [
    'as'   => 'index',
    'uses' => 'App\Http\Controllers\IndexController@showIndex',
]);

Route::get('/register', [
    'as'   => 'register',
    'uses' => 'App\Http\Controllers\UserRegisterController@showRegister',
]);
Route::prefix('admin')->group(function () {
    Route::get('/', [LoginController::class, 'create'])->name('login');
    Route::get('/dashboard', [IndexController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [UserRegisterController::class, 'index'])->name('users');
});

Route::post('/register', 'App\Http\Controllers\UserRegisterController@postRegister');

Route::get('/thankyou', [
    'as'   => 'thankyou',
    'uses' => 'App\Http\Controllers\ThankyouController@showThankyou',
]);