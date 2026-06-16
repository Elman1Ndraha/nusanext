<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class BootcampController extends Controller
{
    /**
     * Display the bootcamp section
     */
    public function index(): View
    {
        return view('index', ['section' => 'bootcamp']);
    }
}
