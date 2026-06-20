<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the home page
     * 🏠 Route: GET / -> Halaman utama dengan hero section
     */
    public function index(): View
    {
        return view('pages.home');
    }

    /**
     * Display the about page
     * 📖 Route: GET /about -> Halaman tentang kami dengan informasi perusahaan
     */
    public function about(): View
    {
        return view('pages.about');
    }

    /**
     * Display the portfolio page
     * 🎨 Route: GET /portfolio -> Halaman portfolio dengan project showcase
     */
    public function portfolio(): View
    {
        return view('pages.portfolio');
    }

    /**
     * Display the testimonial page
     * 💬 Route: GET /testimonial -> Halaman testimonial dari user/klien
     */
    public function testimonial(): View
    {
        return view('pages.testimonial');
    }

    /**
     * Display the contact page
     * ✉️ Route: GET /contact -> Halaman kontak dengan form dan informasi kontak
    */
    public function contact(): View
    {
        return view('pages.contact');
    }

    public function login(): View
    {
        return view('index', ['section' => 'login']);
    }
    }
    