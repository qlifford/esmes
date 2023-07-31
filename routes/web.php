<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserPostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])
->name('dashboard');
// ->middleware('auth');

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'register_user']);
// ->middleware('guest');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login_user']);

Route::post('logout', [LogoutController::class, 'logout_user'])->name('logout');
Route::get('logout', [LogoutController::class, 'logout_user']);

Route::get('posts', [PostController::class, 'index'])->name('posts');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts_show');
Route::post('posts', [PostController::class, 'store']);
Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('post_delete');

Route::post('posts/{post}/likes', [PostLikeController::class, 'store'])->name('likes');
Route::delete('posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('likes');

Route::get('users/{user:username}/posts', [UserPostController::class, 'index'])->name('user_posts');



