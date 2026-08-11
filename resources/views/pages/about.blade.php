@extends('components.layout')

@section('title', 'About - NusaNext')

@section('content')
<!-- ============================================================
     📖 ABOUT PAGE - COMPANY INFORMATION
     Halaman tentang kami yang menampilkan informasi perusahaan,
     nilai-nilai, statistik, dan tim profesional
     ============================================================ -->

@php use App\Services\PageContentManager; @endphp

<!-- ABOUT Section -->
<section id="about" class="py-8 md:py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header: Judul bagian dengan styling -->
        <div class="text-center mb-12 scroll-fade">
            <h2 class="font-display text-red-800 font-bold text-4xl md:text-5xl mb-4">{{ PageContentManager::get('about', 'about_heading') }}</h2>
            <div class="w-24 h-1 bg-linear-to-r from-blue-600 to-teal-600 mx-auto"></div>
        </div>
        
        <!-- Main Content Grid: Konten utama dengan gambar dan teks -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mb-16">
            <!-- Image Column: Gambar tentang kami -->
            <div class="scroll-fade">
                <div class="relative">
                    <div class="absolute inset-0 bg-linear-to-br from-blue-300 to-teal-300 rounded-2xl transform rotate-3 opacity-20"></div>
                    @php $aboutImage = PageContentManager::get('about', 'about_image'); @endphp
                    @if($aboutImage)
                        <div class="relative rounded-2xl overflow-hidden shadow-lg min-h-[320px]">
                            <img src="{{ asset('storage/' . $aboutImage) }}" alt="About Image" class="w-full h-full object-cover" />
                        </div>
                    @else
                        <!-- Fallback placeholder jika tidak ada gambar -->
                        <div class="relative bg-linear-to-br from-gray-100 to-gray-50 rounded-2xl p-12 text-center">
                            <div class="text-8xl mb-6">👥</div>
                            <p class="text-gray-600 font-semibold">Tim Profesional & Berpengalaman</p>
                        </div>
                    @endif
                </div>
            </div>
            
            <!-- Text Content: Paragraf deskripsi dan statistik -->
            <div class="scroll-fade">
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    {{ PageContentManager::get('about', 'about_paragraph_1') }}
                </p>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    {{ PageContentManager::get('about', 'about_paragraph_2') }}
                </p>
                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    {{ PageContentManager::get('about', 'about_paragraph_3') }}
                </p>
                
                <!-- Stats Grid: Menampilkan statistik perusahaan -->
                <div class="grid grid-cols-3 gap-6">
                    <!-- Stat 1 -->
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600">{{ PageContentManager::get('about', 'about_stat_1_value') }}</div>
                        <p class="text-gray-600 text-sm mt-2">{{ PageContentManager::get('about', 'about_stat_1_label') }}</p>
                    </div>
                    <!-- Stat 2 -->
                    <div class="text-center">
                        <div class="text-3xl font-bold text-teal-600">{{ PageContentManager::get('about', 'about_stat_2_value') }}</div>
                        <p class="text-gray-600 text-sm mt-2">{{ PageContentManager::get('about', 'about_stat_2_label') }}</p>
                    </div>
                    <!-- Stat 3 -->
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600">{{ PageContentManager::get('about', 'about_stat_3_value') }}</div>
                        <p class="text-gray-600 text-sm mt-2">{{ PageContentManager::get('about', 'about_stat_3_label') }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Values Section: Menampilkan nilai-nilai perusahaan -->
        <div class="mb-20">
            <h3 class="font-display font-bold text-3xl text-center mb-12 scroll-fade">Nilai-Nilai Kami</h3>
            
            <!-- Values Grid: 4 value cards dengan style berbeda -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Value 1: Fokus -->
                <div class="p-8 rounded-xl text-center text-white scroll-fade hover:shadow-lg transition" style="background: linear-gradient(to bottom right, #6e3434, #6e3434);">
                    <div class="text-5xl mb-4">🎯</div>
                    <h4 class="font-bold text-lg mb-3">Fokus</h4>
                    <p class="text-sm">Fokus pada hasil dan kepuasan klien adalah prioritas utama kami.</p>
                </div>
                
                <!-- Value 2: Inovasi -->
                <div class="p-8 rounded-xl text-center scroll-fade hover:shadow-lg transition border border-emerald-100 bg-gradient-to-br from-emerald-50 via-green-50 to-lime-50 shadow-[0_10px_25px_rgba(16,185,129,0.12)]">
                    <div class="text-5xl mb-4">💡</div>
                    <h4 class="font-bold text-lg mb-3 text-emerald-700">Inovasi</h4>
                    <p class="text-gray-700 text-sm leading-relaxed">Kami terus berinovasi untuk menghadirkan solusi terdepan.</p>
                </div>
                
                <!-- Value 3: Kerjasama -->
                <div class="p-8 rounded-xl text-center text-white scroll-fade hover:shadow-lg transition" style="background: linear-gradient(to bottom right, #346e34, #346e34);">
                    <div class="text-5xl mb-4">🤝</div>
                    <h4 class="font-bold text-lg mb-3">Kerjasama</h4>
                    <p class="text-sm">Kami bermitra dengan klien untuk mencapai kesuksesan bersama.</p>
                </div>
                
                <!-- Value 4: Kualitas -->
                <div class="p-8 rounded-xl text-center scroll-fade hover:shadow-lg transition border border-amber-100 bg-gradient-to-br from-amber-50 via-yellow-50 to-orange-50 shadow-[0_10px_25px_rgba(245,158,11,0.12)]">
                    <div class="text-5xl mb-4">⭐</div>
                    <h4 class="font-bold text-lg mb-3 text-amber-700">Kualitas</h4>
                    <p class="text-gray-700 text-sm leading-relaxed">Standar kualitas tertinggi dalam setiap aspek pekerjaan kami.</p>
                </div>
            </div>
        </div>

        <!-- Team Section -->
        <div class="mb-12">
            <div class="text-center mb-10 scroll-fade">
                <h3 class="font-display font-bold text-3xl text-red-800 mb-4">Tim NusaNext</h3>
                <p class="text-gray-600 max-w-2xl mx-auto">Tim kami terdiri dari para profesional yang bekerja sama untuk memberikan pengalaman terbaik bagi setiap klien.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @php
                    $teamMembers = [
                        ['name' => 'Gelisama Ndraha', 'call' => 'Elman', 'role' => 'Founder & CEO', 'bio' => 'Memimpin arah strategis dan visi pertumbuhan NusaNext.', 'image' => 'images/team/gelisama.jpg'],
                        ['name' => 'Dewi Lestari', 'call' => 'Dewi', 'role' => 'Product Lead', 'bio' => 'Bertanggung jawab mengarahkan pengalaman produk dan inovasi layanan.', 'image' => 'images/team/dewi.jpg'],
                        ['name' => 'Arief Rahman', 'call' => 'Arief', 'role' => 'Project Manager', 'bio' => 'Menjaga koordinasi tim dan memastikan setiap proyek berjalan lancer.', 'image' => 'images/team/arief.jpg'],
                        ['name' => 'Sinta Amelia', 'call' => 'Sinta', 'role' => 'UI/UX Designer', 'bio' => 'Merancang pengalaman visual yang menarik dan user-friendly.', 'image' => 'images/team/sinta.jpg'],
                        ['name' => 'Bima Prasetyo', 'call' => 'Bima', 'role' => 'Frontend Developer', 'bio' => 'Mengembangkan antarmuka yang responsif dan modern untuk produk kami.', 'image' => 'images/team/bima.jpg'],
                    ];
                @endphp

                @foreach($teamMembers as $member)
                    @php
                        $hasPhoto = !empty($member['image']) && file_exists(public_path($member['image']));
                    @endphp

                    <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-200 text-center scroll-fade hover:shadow-lg transition relative overflow-hidden">
                        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-green-600 to-emerald-500"></div>
                        <div class="w-28 h-28 mx-auto mb-4 rounded-full bg-white p-1 shadow-[0_12px_30px_rgba(15,23,42,0.12)] ring-2 ring-green-100">
                            <div class="w-full h-full rounded-full bg-gradient-to-br from-green-600 to-emerald-500 overflow-hidden flex items-center justify-center">
                                @if($hasPhoto)
                                    <img src="{{ asset($member['image']) }}" alt="{{ $member['name'] }}" class="w-full h-full object-cover" />
                                @else
                                    <svg class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.5 20.25a8.25 8.25 0 0115 0" />
                                    </svg>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 text-[11px] font-semibold uppercase tracking-[0.25em] text-gray-500">
                            {{ $member['call'] }}
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-2">{{ $member['name'] }}</h4>
                        <p class="text-sm font-semibold text-red-700 mb-3">{{ $member['role'] }}</p>
                        <p class="text-gray-600 text-sm leading-relaxed">{{ $member['bio'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- ============================================================
     END ABOUT PAGE CONTENT
     ============================================================ -->
@endsection