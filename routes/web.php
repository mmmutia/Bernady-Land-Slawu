<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('homeuser', [
        "title" => "Bernady Land Slawu"
    ]);
});

Route::get('/login', function () {
    LoginController::cek_user();
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    RegisterController::cek_user();
    return view('auth.register');
})->name('register');

Route::get('/about', function () {
    return view('about',[
        "title" => "Tentang - Bernady Land Slawu"
    ]);
});

Route::get('/services', function () {
    return view('services', [
        "title" => "Layanan - Bernady Land Slawu"
    ]);
});

Route::get('/portofolio', function () {
    return view('portofolio', [
        "title" => "Cluster - Bernady Land Slawu"
    ]);
});

Route::get('/team', function () {
    return view('team',[
        "title" => "Tim - Bernady Land Slawu"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Kontak - Bernady Land Slawu"
    ]);
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');








