<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perkenalan', function () {

    return '<h1>Halo! Nama saya Joened Sastra</h1>

            <p>NIM: 4124017 | Prodi: Sistem Informasi</p>

            <p>Saya siap belajar Laravel! 🚀</p>';
});

//aku sebagai kolaburator 
Route::get('/sitimasito', function () {
    return '<h1>Halo! Nama saya Sitimasito</h1>
            <p>Kolaborator project Laravel</p>';
});

//aku sebagai kolaburator
Route::get('/perkenalan', function () {

    return '<h1>Halo! Nama saya Joened Sastra</h1>

            <p>NIM: 4124017 | Prodi: Sistem Informasi</p>

            <p>Saya siap belajar Laravel! 🚀</p>';
});


//tiga route statis
Route::get('/about', function () {
    return '<h1>Halaman About</h1>
            <p>Ini adalah halaman tentang website Laravel.</p>';
});

Route::get('/kontak', function () {
    return '<h1>Halaman Kontak</h1>
            <p>Email: admin@email.com</p>';
});

Route::get('/info', function () {
    return '<h1>Halaman Info</h1>
            <p>Website ini dibuat menggunakan Laravel.</p>';
});

//dua route controller
use App\Http\Controllers\UserController;
Route::get('/user/{nama}', [UserController::class, 'showUser']);
Route::get('/produk/{id}', [UserController::class, 'showProduk']);


//route controller profil
use App\Http\Controllers\ProfilController;
Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/profil/{nim}', [ProfilController::class, 'show']);

//route controller katalog
use App\Http\Controllers\KatalogController;
Route::get('/katalog', [KatalogController::class, 'index']);
Route::get('/katalog/{id}', [KatalogController::class, 'show']);