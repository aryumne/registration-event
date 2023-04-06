<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\EventController;
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
    Route::get('/', [AccountController::class, 'showLogin'])->name('accounts.showLogin');
    Route::post('/', [AccountController::class, 'login'])->name('accounts.login');
    Route::get('/accounts', [AccountController::class, 'index'])->name('accounts.index');
    Route::post('/register', [AccountController::class, 'storeAccount'])->name('accounts.store');
    Route::post('/deactivate/{uuid}', [AccountController::class, 'deactivateAccount'])->name('accounts.deactivate');
    Route::get('/logout', [AccountController::class, 'destroy'])->name('accounts.destroy');
    Route::get('/dashboard', [IndexController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [UserRegisterController::class, 'index'])->name('users.index');
    Route::get('/users/download/{event}', [UserRegisterController::class, 'exportUsers'])->name('users.export');
    Route::get('/events', [EventController::class, 'index'])->name('events.index');
    Route::get('/gates', [AuthorizationController::class, 'index'])->name('gates.index');
});

Route::post('/register', 'App\Http\Controllers\UserRegisterController@postRegister');

Route::get('/thankyou', [
    'as'   => 'thankyou',
    'uses' => 'App\Http\Controllers\ThankyouController@showThankyou',
]);