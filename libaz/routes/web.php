<?php

use App\Http\Controllers\management;
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
use App\Http\Controllers\carouselController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\keanggotaanController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\users\AboutController;
use App\Http\Controllers\users\IndexController;
use App\Http\Controllers\users\LibraryController;

// Route::get('/', function () {
//     return redirect('/dashboard');
// })->middleware('auth');

Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('/library', [LibraryController::class, 'library'])->name('library');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/keanggotaan', [keanggotaanController::class, 'anggota'])->name('anggota');



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
    Route::get('/category', [CategoryController::class, 'category'])->name('category');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.perform');

    Route::get('/image/create', [ImageController::class, 'create'])->name('image.create');
    Route::post('/image/store', [ImageController::class, 'store']);

    Route::get('/management-users', [managementUsers::class, 'index'])->name('management');


    Route::delete('management-user/{id}/delete', [managementUsers::class, 'destroy'])->name('management.destroy');

    Route::get('/management-user/{user-id}/show', [managementUsers::class, 'show'])->name('management.show');

    Route::get('/{page}', [PageController::class, 'index'])->name('page');
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
