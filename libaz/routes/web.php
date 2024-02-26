<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BookshelfController;
use App\Http\Controllers\BukuController;
use App\Models\categoryBook;

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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\users\AboutController;
use App\Http\Controllers\users\IndexController;
use App\Http\Controllers\users\ReviewController;
use App\Http\Controllers\users\LibraryController;
use App\Http\Controllers\users\requestController;

// Route::get('/', function () {
//     return redirect('/dashboard');
// })->middleware('auth');

Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('/library', [LibraryController::class, 'library'])->name('library');
Route::get('/library/{id}', [LibraryController::class, 'detail'])->name('detail.library');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/review', [ReviewController::class, 'review'])->name('review');
Route::get('/request',[requestController::class, 'request'])->name('request');


Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.perform');
    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
    Route::get('/reset-password', [ResetPassword::class, 'show'])->name('reset-password');
    Route::post('/reset-password', [ResetPassword::class, 'send'])->name('reset.perform');
    Route::get('/change-password', [ChangePassword::class, 'show'])->name('change-password');
    Route::post('/change-password', [ChangePassword::class, 'update'])->name('change.perform');
});


Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
    Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
    Route::prefix('book')->name("book.")->group(function () {
        Route::get('', [BukuController::class, 'buku'])->name('book');
        Route::get('/create', [BukuController::class, 'create'])->name('create');
        Route::post('/store', [BukuController::class, 'store'])->name('book.perform');
        Route::get('{id}', [BukuController::class, 'edit'])->name('edit');
        Route::put('{id}', [BukuController::class, 'update'])->name('book.update');
        Route::get('/category', [KategoriController::class, 'kategori'])->name('category');
        Route::post('/category', [KategoriController::class, 'store'])->name('category.perform');
        Route::delete("/category/{id}/delete", [KategoriController::class, 'destroy'])->name('category.destroy');
        Route::get('/bookshelf', [RakController::class, 'rak'])->name('bookshelf');
        Route::post('/bookshelf', [RakController::class, 'store'])->name('bookshelf.perform');
        Route::delete("bookshelf/{id}/delete", [RakController::class, 'destroy'])->name('bookshelf.destroy');
        Route::get('/writer', [PenulisController::class, 'penulis'])->name('writer');
        Route::post('/writer', [PenulisController::class, 'store'])->name('writer.perform');
        Route::delete("writer/{id}/delete", [PenulisController::class, 'destroy'])->name('writer.destroy');
        Route::get('/publisher', [PenerbitController::class, 'penerbit'])->name('publisher');
        Route::post('/publisher', [PenerbitController::class, 'store'])->name('publisher.perform');
        Route::delete("publisher/{id}/delete", [PenerbitController::class, 'destroy'])->name('publisher.destroy');
        Route::delete('/{id}/delete', [BukuController::class, 'destroy'])->name('book.destroy');
    });
    Route::prefix('item')->name("item.")->group(function () {
        Route::get('', [BukuController::class, 'item'])->name('item');
        Route::delete('/{id}/delete', [BukuController::class, 'itemDestroy'])->name('item.destroy');
    });
    Route::get('/{page}', [PageController::class, 'index'])->name('page');
});
Route::group(['middleware' => 'auth'], function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
