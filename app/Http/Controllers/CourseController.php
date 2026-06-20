<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CourseController extends Controller
{
    /**
     * Display the course/kursus page
     * 📚 Route: GET /program/kursus -> Halaman daftar kursus online dengan kategori
     */
    public function index(): View
    {
        // ✨ Return kursus page standalone (moved to kursus/index.blade.php)
        return view('kursus.index');
    }
}
