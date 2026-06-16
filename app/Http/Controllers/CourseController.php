<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CourseController extends Controller
{
    /**
     * Display the course section
     */
    public function index(): View
    {
        return view('index', ['section' => 'course']);
    }
}
