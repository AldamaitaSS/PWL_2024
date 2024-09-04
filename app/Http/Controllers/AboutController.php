<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    Public function hello() {
        return 'Hello, World!';
    }

    public function index() {
        return "Selamat Datang di Mata kuliah Pemograman Web Lanjut";
    }

    public function about() {
        $name = 'Aldamaita';
        $nim = '2241760050';
        return "Nama: $name, NIM: $nim";
    }

    public function articles($id) {
        return "Halaman Artikel dengan ID " .$id;
    }
}
