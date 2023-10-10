<?php


use App\Models\Category;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "name" => "Dezi",
        "email" => "desyhandayani517@gmail.com",
        "image" => "woozi.png",

    ]);
});


Route::get('/blog', [PostController::class, 'index']);

// Halaman single post P
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// halaman categories
Route::get('/categories', function () {


    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);