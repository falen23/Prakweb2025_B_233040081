<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DasboardPostController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts', [PostController::class, 'index'])->middleware('auth')->name('posts.index');

Route::get('/posts{post:slug}', [PostController::class, 'show'])->middleware('auth')->name('Posts.show');


Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/home', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);



Route::controller(RegisterController::class)->middleware('guest')->group(function () {
    Route::get('/register', 'showRegistrationForm')->name('showRegister');
    Route::post('/register', 'register')->name('register');
});

Route::controller(LoginController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', 'showLoginForm')->name('showLogin');
        Route::post('/login', 'login')->name('login');
    });
    Route::post('/logout', 'logout')->middleware('auth')->name('logout');
});





Route::controller(DasboardPostController::class)->prefix('/dashboard')->name('dashboard.')->middleware('auth', 'verified')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('store');
    Route::get('/create', 'create')->name('create');
    Route::get('/{post:slug}', 'show')->name('show');
    Route::delete('/{post:slug}', 'destroy')->name('destroy');
});

Route::get('/dashboard/{post:slug}/edit', [DasboardPostController::class, 'edit'])
    ->name('dashboard.edit');

Route::put('/dashboard/{post:slug}', [DasboardPostController::class, 'update'])
    ->name('dashboard.update');


Route::get('/{post:slug}/edit', [DasboardPostController::class, 'edit'])->middleware(['auth', 'verified'])->name('dashboard.edit');
Route::put('/{post:slug}', [DasboardPostController::class, 'update'])->middleware(['auth', 'verified'])->name('dashboard.update');
    







// //index menampilkan  semua post milik user
// Route::get('/dasboard', [DasboardPostController::class, 'index'])->middleware(['auth', 'verified'])->name('dasboard.index');
// // Create - form untuk membuat post baru
// Route::get('/dasboard/create', [DasboardPostController::class, 'create'])->middleware('auth', 'verified')->name('dasboard.create');
// //Store- menyimpan post baru
// Route::post('/dasboard', [DasboardPostController::class 'store'])->middleware(['auth', 'verified'])->name('dasboard.store');
// //show - menampilkan detail post berdasarkan slug
// Route::get('/dasboard/{post::slug}', [DasboardPostController::class, 'show'])->middleware(['auth', 'verified'])->name('dasboard.show');


// Route::get('/contact', [ContactController::class, 'index']);
// Route::get('/blog', [BlogController::class, 'index']);