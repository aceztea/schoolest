<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\StudentController;
use Illuminate\Support\Facades\Auth;
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

// Landing Pages
Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact');

// Halaman Admin
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function() {
    // Dashboard Admin
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');

    // CRUD Siswa
    Route::prefix('students')->name('students.')->group(function() {
        Route::get('/', [StudentController::class, 'index'])->name('index');
    });
});

Auth::routes();