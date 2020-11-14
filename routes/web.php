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

Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('logout', [ App\Http\Controllers\Auth\LoginControlle::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {
    
    // Posts Routes
    Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('admin.posts.index');
    Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('admin.posts.create');
    Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'])->name('admin.posts.store');
    Route::get('/posts/{post:slug}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('/posts/{post}', [App\Http\Controllers\PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('/posts/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->name('admin.posts.delete');
    Route::put('/posts/{post}/change', [App\Http\Controllers\PostController::class, 'changePostStatus'])->name('admin.posts.change_post_status');

    //Categories Routes
    Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('/categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('/categories', [App\Http\Controllers\CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('/categories/{category:slug}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('/categories/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('/categories/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('admin.categories.destroy');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');

Route::get('/about', function () {
    return view('about');
});

Route::get('/{post:slug}', [App\Http\Controllers\PostController::class, 'show']);
