<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Halaman Utama Project Laravel';
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