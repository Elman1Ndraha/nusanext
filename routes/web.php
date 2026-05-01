<?php

use Illuminate\Support\Facades\Route;

// Halaman-halaman utama
Route::view('/', 'index')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/portfolio', 'portfolio')->name('portfolio');
Route::view('/testimonial', 'testimonial')->name('testimonial');
Route::view('/contact', 'contact')->name('contact');

// Jika ingin handle contact form di backend:
// Route::post('/contact', 'ContactController@store')->name('contact.store');