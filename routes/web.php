<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;



// PRAKTIKUM 2

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
   Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

// Route::get('/hello', [WelcomeController::class,'hello']);

// Route::get('/', [WelcomeController::class, 'index']);

// Route::get('/about', [WelcomeController::class, 'about']);

// Route::get('/articles/{id}', [WelcomeController::class, 'articles']);
// ---------------------------------------

// Route::get('/hello', [HomeController::class,'hello']);

// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [HomeController::class, 'about']);

// Route::get('/articles/{id}', [HomeController::class, 'articles']);
// ---------------------------------------

Route::get('/hello', [ArticleController::class,'hello']);

Route::get('/', [ArticleController::class, 'index']);

Route::get('/about', [ArticleController::class, 'about']);

Route::get('/articles/{id}', [ArticleController::class, 'articles']);
// ---------------------------------------

// Route::get('/hello', [AboutController::class,'hello']);

// Route::get('/', [AboutController::class, 'index']);

// Route::get('/about', [AboutController::class, 'about']);

// Route::get('/articles/{id}', [AboutController::class, 'articles']);

// PRAKTIKUM 1
// Route::get('/hello', function () {
//     return 'Hello World';
// });

Route::get('/world', function () {
    return 'World';
});

// Route::get('/SelamatDatang', function () {
//     return 'Selamat Datang';
// });

// Route::get('/about', function () {
//     return '2241760050 Aldamaita';
// });

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Route::get('/articels/{id}', function ($Id) {
//     return 'Halaman Artikel dengan ID '.$Id;
// });

// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name;
// });

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

Route::get('/user/profile', function () {
    //
})->name('profile');

   
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

// Route::get('/', function () {
//     return view('welcome');
// });
