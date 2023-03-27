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

Route::get('/login', [
    'as'   => 'login',
    'uses' => 'App\Http\Controllers\UserLoginController@showLogin',
]);

Route::post('/login', 'App\Http\Controllers\UserLoginController@postLogin');

Route::post('/logout', 'App\Http\Controllers\UserLogoutController@logout')->name('logout');

Route::get('/register', [
    'as'   => 'register',
    'uses' => 'App\Http\Controllers\UserRegisterController@showRegister',
]);
Route::post('/register', 'App\Http\Controllers\UserRegisterController@postRegister');

Route::get('/thankyou', [
    'as'   => 'thankyou',
    'uses' => 'App\Http\Controllers\ThankyouController@showThankyou',
]);

Route::get('/home', [
    'as'   => 'home',
    'uses' => 'App\Http\Controllers\HomeController@showHome',
]);

Route::get('/demo-live', [
    'as'   => 'demo-live',
    'uses' => 'App\Http\Controllers\HomeController@showDemo',
]);

Route::get('/live', [
    'as'   => 'live',
    'uses' => 'App\Http\Controllers\HomeController@showLive',
]);

Route::get('/report', [
    'as'   => 'report',
    'uses' => 'App\Http\Controllers\ReportController@index',
]);

Route::view('/agenda', "agenda");

Route::view('/zoom', "zoom");

Route::get('/report/export/{lastLogin}/', [
    'as'   => 'reportExport',
    'uses' => 'App\Http\Controllers\ReportController@showExport',
]);

Route::get('/last-login', [
    'as'   => 'reportLogin',
    'uses' => 'App\Http\Controllers\ReportController@lastLogin',
]);
