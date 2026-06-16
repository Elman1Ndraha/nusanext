<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Import HomeController
use App\Http\Controllers\AdminController; // Import AdminController
use App\Http\Controllers\AdminPageController; // Import AdminPageController
use App\Http\Controllers\AuthController; // Import AuthController
use App\Http\Controllers\BootcampController; // Import BootcampController
use App\Http\Controllers\CourseController; // Import CourseController

// Halaman-halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/program/kursus', [CourseController::class, 'index'])->name('kursus');
Route::get('/program/bootcamp', [BootcampController::class, 'index'])->name('bootcamp');
Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


// Routes untuk autentikasi
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // Form login
Route::post('/login', [AuthController::class, 'login'])->name('login.post'); // Proses login
Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // Logout

// Routes untuk admin panel, dilindungi middleware admin
Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard'); // Route untuk dashboard admin
    Route::get('/admin/pages', [AdminPageController::class, 'index'])->name('admin.pages.index');
    Route::get('/admin/pages/{page}/edit', [AdminPageController::class, 'edit'])->name('admin.pages.edit');
    Route::post('/admin/pages/{page}', [AdminPageController::class, 'update'])->name('admin.pages.update');
});

// Jika ingin handle contact form di backend:
// Route::post('/contact', 'ContactController@store')->name('contact.store');