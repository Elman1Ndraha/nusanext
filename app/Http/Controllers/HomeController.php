<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the index page
     */
    public function index(): View
    {
        return view('index', ['section' => 'home']);
    }

    /**
     * Display the about section
     */
    public function about(): View
    {
        return view('index', ['section' => 'about']);
    }

    /**
     * Display the portfolio section
     */
    public function portfolio(): View
    {
        return view('index', ['section' => 'portfolio']);
    }

    /**
     * Display the testimonial section
     */
    public function testimonial(): View
    {
        return view('index', ['section' => 'testimonial']);
    }

    /**
     * Display the contact section
    */
    public function contact(): View
    {
        return view('index', ['section' => 'contact']);
    }

    public function login(): View
    {
        return view('index', ['section' => 'login']);
    }
    }
    