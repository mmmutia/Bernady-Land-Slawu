<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\ClusterSimpanController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ClusterController;
use App\Http\Controllers\ProgresController;

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
    Route::get('/logout', [LoginController::class, 'index'])->name('logout-user');
    Route::get('/profil', [ProfilController::class, 'index'])->middleware('CheckRole:user');
    Route::get('/list-pemesanan', [PemesananController::class, 'index'])->middleware('CheckRole:user');
    Route::get('/pembayaran', [PembayaranController::class, 'index'])->middleware('CheckRole:user');
    Route::get('/progres', [ProgresController::class, 'index'])->middleware('CheckRole:user');
    Route::get('/cluster-tersimpan', [ClusterSimpanController::class, 'index'])->middleware('CheckRole:user');

});
Route::get('/cluster', [ClusterController::class, 'index'])->name('cluster');
Route::get('/tambahcluster', [ClusterController::class, 'tambahclusterindex'])->name('tambahcluster');
Route::post('/prosescluster', [ClusterController::class, 'store'])->name('prosestambahcluster');
Route::get('/editcluster/{id}', [ClusterController::class, 'edit'])->name('editcluster');
Route::post('/updatecluster/{id}', [ClusterController::class, 'update'])->name('updatecluster');

Auth::routes();
