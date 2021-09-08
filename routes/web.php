<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\DelegationController;

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

Route::get('/', [PublicController::class, 'pageLanding'])->name('landing');
Route::get('/form', [PublicController::class, 'pageForm'])->name('form');
Route::post('/form/send', [PublicController::class, 'sendForm'])->name('form.send');

Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function () {
    Route::prefix('home')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::post('/table', [HomeController::class, 'table'])->name('home.table');
        Route::get('/preview/{id}', [HomeController::class, 'preview'])->name('home.preview');
    });

    Route::prefix('agencies')->group(function () {
        Route::get('/', [AgencyController::class, 'index'])->name('agencies')->middleware(['can:admin']);
        Route::post('/store', [AgencyController::class, 'store'])->name('agency.store');
        Route::get('/d/{id}', [AgencyController::class, 'destroy'])->name('agency.destroy');
    });

    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users')->middleware(['can:admin']);
        Route::get('/table', [UserController::class, 'table'])->name('users.table');
        Route::post('/register', [UserController::class, 'register'])->name('users.register');
        Route::get('/create', [UserController::class, 'create'])->name('users.create');
        Route::get('/show/{id}', [UserController::class, 'show'])->name('users.show');
        Route::post('/update', [UserController::class, 'update'])->name('users.update');
        Route::get('/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    });

    Route::prefix('delegations')->group(function () {
        Route::get('/', [DelegationController::class, 'index'])->name('delegations')->middleware(['can:admin']);
        Route::post('/table', [DelegationController::class, 'table'])->name('delegations.table');
        Route::get('/create', [DelegationController::class, 'create'])->name('delegations.create');
        Route::post('/store', [DelegationController::class, 'store'])->name('delegations.store');
    });
});
