<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    Public function hello() {
        return 'Hello, World!';
    }

    public function index() {
        return "Selamat Datang";
    }

    public function about() {
        $name = 'Aldamaita';
        $nim = '2241760050';
        return "Nama: $name, NIM: $nim";
    }

    public function articles($id) {
        return "Halaman Artikel dengan ID " .$id;
    }

    // PRAKTIKUM 3
    // public function greeting(){
    //     return view('blog.hello', ['name' => 'Aldamaita']);
    // }

    public function greeting(){
        return view('blog.hello')
        ->with('name','Aldamaita')
        ->with('occupation','Astronaut');
    }
}

