<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', [HomeUserController::class, 'index']);

Route::group(['middleware' => ['auth']], function() {
    Route::get('/homeuser', [HomeUserController::class, 'index'])->middleware('CheckRole:user')->name('homeuser');
    Route::get('/about', [AboutController::class, 'index'])->middleware('CheckRole:user');
    Route::get('/services', [ServicesController::class, 'index'])->middleware('CheckRole:user');
    Route::get('/team', [TeamController::class, 'index'])->middleware('CheckRole:user');
    Route::get('/contact', [ContactController::class, 'index'])->middleware('CheckRole:user');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


});

Auth::routes();
