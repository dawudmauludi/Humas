<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\dashboardCategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\journalController;
use App\Models\post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
});


Route::get('/posts', [PostsController::class, 'index']);
Route::get('/posts/{post:slug}', [PostsController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardPostController::class, 'index']);

    Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
    Route::resource('/dashboard/posts', DashboardPostController::class);

    Route::resource('/dashboard/categories', DashboardCategoriesController::class);
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show');
});


Route::get('/dashboard/categories/checkSlug', [DashboardCategoriesController::class, 'checkSlug'])->name('categories.checkSlug');
Route::resource('/dashboard/categories', DashboardCategoriesController::class)->except('destroy');


Route::post('/absensi', [AbsensiController::class, 'store'])->name('absensi.store');
Route::get('/absensi', [AbsensiController::class, 'index'])->name('absen');
Route::post('/journal', [AbsensiController::class, 'store'])->name('journal');
Route::get('/journal', [journalController::class, 'create'])->name('journal');
Route::post('/journal', [journalController::class, 'store'])->name('journal.store');


