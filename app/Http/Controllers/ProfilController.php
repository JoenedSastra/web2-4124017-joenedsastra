<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ProfilController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Joened Sastra',
            'nim' => '4124017',
            'prodi' => 'Sistem Informasi',
            'semester' => 4,
            'keahlian' => ['Laravel', 'PHP', 'MySQL', 'Git']
        ];
        return view('profil', $data);
    }
     public function show($nim)
    {
        return "<h1>Profil Mahasiswa dengan NIM: $nim</h1>";
    }
}
