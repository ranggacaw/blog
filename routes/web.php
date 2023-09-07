<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

// Home
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Profile
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile-edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile-edit-store', [App\Http\Controllers\ProfileController::class, 'editStore'])->name('profile.edit.store');

// Blog
Route::get('/', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog-create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');
Route::post('/blog-create-store', [App\Http\Controllers\BlogController::class, 'createStore'])->name('blog.create.store');
Route::get('/blog-details/{id}', [App\Http\Controllers\BlogController::class, 'details'])->name('blog.details');

// About
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('blog.index');
