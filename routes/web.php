<?php

use Illuminate\Support\Facades\Route;

// PRAKTIKUM 1
Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/SelamatDatang', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return '2241760050 Aldamaita';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articels/{id}', function ($Id) {
    return 'Halaman Artikel dengan ID '.$Id;
});

// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name;
// });

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

Route::get('/user/profile', function () {
    //
})->name('profile');

// PRAKTIKUM 2

   
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
