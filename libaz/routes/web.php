<?php

use App\Http\Controllers\carouselController;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\managementUsers;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\infoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\keanggotaanController;
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
Route::get('/request', [requestController::class, 'request'])->name('request.book');
Route::post('/request_book', [requestController::class, 'createBook'])->name('createBook');
Route::get('/keanggotaan', [keanggotaanController::class, 'anggota'])->name('anggota');
Route::post('/keanggotaan', [keanggotaanController::class, 'store'])->name('anggota.perform');
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.perform');


Route::group(['middleware' => 'guest'], function () {
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
    Route::get('/category', [CategoryController::class, 'category'])->name('category');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.perform');
    Route::delete("category/{id}/delete", [CategoryController::class, 'destroy'])->name('profile.destroy');


    Route::get('/management-users', [managementUsers::class, 'index'])->name('management');
    Route::delete('management-user/{id}/delete', [managementUsers::class, 'destroy'])->name('management.destroy');
    Route::delete('users{id}/delete', [managementUsers::class, 'delete'])->name('management.delete');
    Route::prefix('management')->group(function () {
        Route::get('/', [ManagementUsers::class, 'index'])->name('management');
        Route::post('/{id}/update', [ManagementUsers::class, 'updateStatus'])->name('management.updateStatus');
        Route::delete('/{id}/delete', [ManagementUsers::class, 'destroy'])->name('management.destroy');
    });


    Route::get('/management-user-terima/{id}', [managementUsers::class, 'view'])->name('management.view');
    Route::put('/management/{id}/update', [ManagementUsers::class, 'update'])->name('management.update');

    Route::post('/management-user-info', [infoController::class, 'info'])->name('management.info');
    Route::get('/management-user-info/{id}', [infoController::class, 'show'])->name('management.info');
    Route::put('/users/{id}/update', 'ManagementUsers@update')->name('management.update');

    Route::get('/{page}', [PageController::class, 'index'])->name('page');

    Route::post('/upload-gambar', [carouselController::class, 'store'])->name('upload-gambar');
    Route::delete('/hapus-gambar', [CarouselController::class, 'destroy'])->name('hapus-gambar');
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
