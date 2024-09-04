<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    Public function hello() {
        return 'Hello, World!';
    }

    public function index() {
        return "Selamat Datang Di Politeknik Negeri Malang";
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
