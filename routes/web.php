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

Route::get('/', [
    'as'   => 'index',
    'uses' => 'App\Http\Controllers\IndexController@showIndex',
]);

Route::get('/register', [
    'as'   => 'register',
    'uses' => 'App\Http\Controllers\UserRegisterController@showRegister',
]);
Route::post('/register', 'App\Http\Controllers\UserRegisterController@postRegister');

Route::get('/thankyou', [
    'as'   => 'thankyou',
    'uses' => 'App\Http\Controllers\ThankyouController@showThankyou',
]);