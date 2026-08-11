@extends('components.layout')

@section('title', 'Harga Website - NusaNext')

@section('content')
<!-- ============================================================
     📚 KURSUS PAGE - ONLINE LEARNING
     Halaman kursus online dengan daftar kategori dan deskripsi
     ============================================================ -->
@php use App\Services\PageContentManager; @endphp

<!-- COURSE Section -->
<section class="py-20 bg-gray-50">
    <div class="text-center mb-16">
            <h2 class="font-display font-bold text-4xl md:text-5xl text-red-800 mb-4"> {{\App\Services\PageContentManager::get('home', 'pricing_heading')}}</h2>
            <p class="text-gray-600 max-w-xl mx-auto">{{ \App\Services\PageContentManager::get('home', 'pricing_description') }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10 max-w-10xl mx-auto px-6 sm:px-12 lg:px-16 py-10">
            
            <div class="bg-white rounded-2xl shadow-sm border border-green-200 p-8 flex flex-col justify-between transition-all duration-300 hover:shadow-xl">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Paket Basic</h3>
                    <p class="text-sm text-gray-500 mb-6">Cocok untuk landing page atau promosi personal.</p>
                    <div class="flex items-baseline mb-6">
                        <span class="text-3xl font-extrabold text-gray-900">500rb - 1.5Jt</span>
                        <span class="text-gray-500 ml-1">/sekali bayar</span>
                    </div>
                    <ul class="space-y-4 border-t border-gray-100 pt-6">
                        <li class="flex items-center text-sm text-gray-600">
                            <span class="text-green-500 mr-2">✓</span> 1 Halaman (Landing Page)
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <span class="text-green-500 mr-2">✓</span> Gratis Domain .com (1 Thn)
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <span class="text-green-500 mr-2">✓</span> Desain Responsif (HP/Laptop)
                        </li>
                    </ul>
                </div>
                <button class="mt-8 w-full bg-gray-900 hover:bg-gray-800 text-white font-semibold py-3 px-4 rounded-xl transition duration-200">
                    Pilih Paket
                </button>
            </div>

            <div class="bg-white rounded-2xl shadow-md border-2 border-indigo-500 p-8 flex flex-col justify-between relative transition-all duration-300 hover:shadow-xl scale-105">
                <span class="absolute -top-4 left-1/2 -translate-x-1/2 bg-indigo-600 text-white px-4 py-1 rounded-full text-xs font-semibold uppercase tracking-wider">
                    Terpopuler
                </span>
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Paket Bisnis</h3>
                    <p class="text-sm text-gray-500 mb-6">Pilihan terbaik untuk UMKM dan Perusahaan.</p>
                    <div class="flex items-baseline mb-6">
                        <span class="text-3xl font-extrabold text-indigo-600">2 - 3.5Jt</span>
                        <span class="text-gray-500 ml-1">/sekali bayar</span>
                    </div>
                    <ul class="space-y-4 border-t border-gray-100 pt-6">
                        <li class="flex items-center text-sm text-gray-600">
                            <span class="text-indigo-500 mr-2">✓</span> Hingga 5 Halaman
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <span class="text-indigo-500 mr-2">✓</span> Integrasi WhatsApp Chat
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <span class="text-indigo-500 mr-2">✓</span> SEO Basic Setup
                        </li>
                    </ul>
                </div>
                <button class="mt-8 w-full bg-indigo-600 border-indigo-700 text-white hover:bg-indigo-700  font-semibold py-3 px-4 rounded-xl transition duration-200">
                    Pilih Paket
                </button>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-green-200 p-8 flex flex-col justify-between transition-all duration-300 hover:shadow-xl">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Paket Custom</h3>
                    <p class="text-sm text-gray-500 mb-6">Solusi khusus untuk sistem web kompleks.</p>
                    <div class="flex items-baseline mb-6">
                        <span class="text-3xl font-extrabold text-gray-900">Custom</span>
                    </div>
                    <ul class="space-y-4 border-t border-gray-100 pt-6">
                        <li class="flex items-center text-sm text-gray-600">
                            <span class="text-green-500 mr-2">✓</span> Jumlah Halaman Unlimited
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <span class="text-green-500 mr-2">✓</span> Fitur E-commerce / Sistem Informasi
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <span class="text-green-500 mr-2">✓</span> Support & Maintenance Premium
                        </li>
                    </ul>
                </div>
                <a href="{{ route('contact') }}" 
            class="mt-8 block w-full text-center bg-green-900 hover:bg-green-800 text-white font-semibold py-3 px-4 rounded-xl transition duration-200">
                Hubungi Kami
                 </a>
            </div>

        </div>
</section>


<!-- ============================================================
     END KURSUS PAGE CONTENT
     ============================================================ -->
@endsection