<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class BootcampController extends Controller
{
    /**
     * Display the bootcamp page
     * 🎓 Route: GET /program/bootcamp -> Halaman program bootcamp intensif
     */
    public function index(): View
    {
        // ✨ Return bootcamp page standalone (moved to kursus/bootcamp.blade.php)
        return view('kursus.bootcamp');
    }
}
