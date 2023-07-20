<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\LogMiddleware;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::view('/', 'home.index')->name('home');
Route::get('test', TestController::class)->name('test')->middleware(LogMiddleware::class);

// Регистрация и вход
Route::middleware('guest')->group(function () {
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');
    
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login.store'); 
});

// Посты блога
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{post}', [BlogController::class, 'show'])->name('blog.show');
Route::post('blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');


// Посты юзеров
Route::prefix('user')->middleware('auth')->group(function () {
    Route::redirect('/', '/posts')->name('user');
    Route::get('posts', [PostController::class, 'index'])->name('user.posts');
    Route::get('posts/create', [PostController::class, 'create'])->name('user.posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('user.posts.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('user.posts.show');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('user.posts.edit');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('user.posts.update');
    Route::delete('posts/{post}', [PostController::class, 'delete'])->name('user.posts.delete');
});


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::redirect('/', '/admin/posts')->name('admin');
    Route::get('posts', [PostController::class, 'index'])->name('admin.posts');
    Route::get('posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('admin.posts.show');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('posts/{post}', [PostController::class, 'delete'])->name('admin.posts.delete');
    Route::delete('posts/{post}/like', [PostController::class, 'like'])->name('admin.posts.like');
});

Route::resource('posts/{post}/comment', CommentController::class)->only(['index', 'show']);