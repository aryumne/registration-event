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
    Route::get('/', [AccountController::class, 'login'])->name('login');
    Route::post('/', [AccountController::class, 'authenticate'])->name('accounts.login');
    Route::middleware(['auth', 'prevent-back-history'])->group(function () {
        Route::get('/accounts', [AccountController::class, 'index'])->name('accounts.index')->middleware('can:mng-accounts');
        Route::post('/register', [AccountController::class, 'storeAccount'])->name('accounts.store')->middleware('can:create-account');
        Route::get('/account/{uuid}', [AccountController::class, 'edit'])->name('accounts.setting')->middleware('can:edit-account');
        Route::patch('/account/{uuid}', [AccountController::class, 'update'])->name('accounts.update')->middleware('can:edit-account');
        Route::post('/logout', [AccountController::class, 'destroy'])->name('accounts.destroy');
        Route::get('/dashboard', [IndexController::class, 'dashboard'])->name('dashboard')->middleware('can:mng-users');
        Route::post('/users/download', [UserRegisterController::class, 'exportUsers'])->name('users.export')->middleware('can:mng-users');
        Route::delete('/users/{uuid}', [UserRegisterController::class, 'destroy'])->name('users.destroy')->middleware('can:mng-users');
        Route::get('/events', [EventController::class, 'index'])->name('events.index')->middleware('can:mng-events');
        Route::post('/events', [EventController::class, 'store'])->name('events.store')->middleware('can:create-event');
        Route::patch('/events/{uuid}', [EventController::class, 'update'])->name('events.update')->middleware('can:edit-event');
        Route::get('/gates', [AuthorizationController::class, 'index'])->name('gates.index')->middleware('can:mng-gates');;
    });
    Route::get('/download', [UserRegisterController::class, 'download'])->name('download');
});

Route::post('/register', 'App\Http\Controllers\UserRegisterController@postRegister');

Route::get('/thankyou', [
    'as'   => 'thankyou',
    'uses' => 'App\Http\Controllers\ThankyouController@showThankyou',
]);