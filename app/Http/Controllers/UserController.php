<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function showUser($nama)
    {
        return "<h1>Halo, $nama</h1><p>Selamat datang di halaman user.</p>";
    }
    public function showProduk($id)
    {
        return "<h1>Produk ID: $id</h1><p>Ini adalah halaman detail produk.</p>";
    }
}