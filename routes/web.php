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

Route::get('/', function () {
    return view('home', [
        "title" => "Bernady Land Slawu"
    ]);
});

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

Route::get('/login', function () {
    return view('registration/login', [
        "title" => "Login - Bernady Land Slawu"
    ]);
});

Route::get('/register', function () {
    return view('registration/register', [
        "title" => "Register - Bernady Land Slawu"
    ]);
});