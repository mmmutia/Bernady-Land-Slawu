<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use Illuminate\Database\Query\IndexHint;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ClusterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProgresController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeKontenController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\SerahTerimaController;
use App\Http\Controllers\HomeKeuanganController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ClusterSimpanController;
use App\Http\Controllers\ListPemesananController;
use App\Http\Controllers\RiwayatPemesananController;
use App\Http\Controllers\PortofolioDetailsController;
use App\Http\Controllers\SpesifikasiTeknisController;

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

});
Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan');
Route::post('/prosespemesanan', [PemesananController::class, 'store'])->name('prosespemesanan');
Route::get('/riwayat-pemesanan', [RiwayatPemesananController::class, 'index'])->name('riwayat-pemesanan');
Route::get('/progres', [ProgresController::class, 'index'])->name('progres');
Route::get('/cluster-tersimpan', [ClusterSimpanController::class, 'index'])->name('cluster-tersimpan');

Route::get('/homekonten', [HomeKontenController::class, 'index'])->name('homeadmin');

Route::get('/cluster', [ClusterController::class, 'index'])->name('cluster');
Route::get('/tambahcluster', [ClusterController::class, 'tambahclusterindex'])->name('tambahcluster');
Route::post('/prosescluster', [ClusterController::class, 'store'])->name('prosestambahcluster');
Route::get('/editcluster/{id}', [ClusterController::class, 'edit'])->name('editcluster');
Route::post('/updatecluster/{id}', [ClusterController::class, 'update'])->name('updatecluster');

Route::get('/tambahspek', [SpesifikasiTeknisController::class, 'tambahspekindex'])->name('tambahspek');
Route::post('/prosesspek', [SpesifikasiTeknisController::class, 'store'])->name('prosestambahspek');

Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio');
Route::get('/portofolio-details', [PortofolioDetailsController::class, 'index'])->name('portofolio-details');

Route::get('/homekeuangan', [HomeKeuanganController::class, 'index'])->name('homekeuangan');
Route::get('/list-pemesanan', [ListPemesananController::class, 'index'])->name('list-pemesanan');
Route::get('/progres', [ProgresController::class, 'index'])->name('progres');

Route::get('/pembayaran-user', [PembayaranController::class, 'index'])->name('pembayaran-user');
Route::get('/pembayaran', [PembayaranController::class, 'indexdp'])->name('pembayaran');
Route::get('/pembayaran', [PembayaranController::class, 'indexinhouse'])->name('pembayaran');
Route::post('/tambahpembayarandp', [PembayaranController::class, 'storedp'])->name('tambahpembayarandp');
Route::post('/tambahpembayaraninhouse', [PembayaranController::class, 'storeinhouse'])->name('tambahpembayaraninhouse');
Route::get('/riwayat-pembayaran-dpadamin', [PembayaranController::class, 'lihatpembayarandp'])->name('riwayat-pembayaran-dpadmin');
Route::get('/riwayat-pembayaran-dp', [PembayaranController::class, 'riwayatpembayarandp'])->name('riwayat-pembayaran-dp');
Route::get('/riwayat-pembayaran-inhouse', [PembayaranController::class, 'riwayatpembayaraninhouse'])->name('riwayat-pembayaran-inhouse');
Route::get('/riwayat-pembayaran-inhouseadmin', [PembayaranController::class, 'lihatpembayaraninhouse'])->name('riwayat-pembayaran-inhouseadmin');
Route::get('/serah-terima-admin', [SerahTerimaController::class, 'index'])->name('serah-terima-admin');
Route::post('/prosestambahserahterima', [SerahTerimaController::class, 'store'])->name('prosestambahserahterima');

Auth::routes();
