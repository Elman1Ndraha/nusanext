<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController; // Import AdminController
use App\Http\Controllers\AdminPageController; // Import AdminPageController
use App\Http\Controllers\AuthController; // Import AuthController

// Halaman-halaman utama
Route::view('/', 'index')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/portfolio', 'portfolio')->name('portfolio');
Route::view('/testimonial', 'testimonial')->name('testimonial');
Route::view('/contact', 'contact')->name('contact');

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