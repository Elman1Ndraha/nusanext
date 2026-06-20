@extends('components.layout')

@section('title', 'Harga Website - NusaNext')

@section('content')
<!-- ============================================================
     📚 KURSUS PAGE - ONLINE LEARNING
     Halaman kursus online dengan daftar kategori dan deskripsi
     ============================================================ -->
@php use App\Services\PageContentManager; @endphp

<!-- COURSE Section -->
<section id="course" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16 scroll-fade">
            <h2 class="font-display font-bold text-red-800 text-4xl md:text-5xl mb-4">Harga Website</h2>
            <p class="text-gray-600 text-lg">Temukan paket kursus yang sesuai dengan kebutuhan Anda</p>
            <div class="w-24 h-1 bg-linear-to-r from-blue-600 to-teal-600 mx-auto mt-6"></div>
        </div>
{{--         
        <!-- Course Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-16">
            <!-- Image -->
            <div class="scroll-fade">
                <img src="{{ asset('images/course.jpg') }}" alt="Course" class="rounded-lg shadow-lg w-full">
            </div>
            
            <!-- Text Content -->
            <div class="scroll-fade">
                <h3 class="font-display font-bold text-3xl mb-6">{{ PageContentManager::get('course', 'course_heading') }}</h3>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    {!! nl2br(e(PageContentManager::get('course', 'course_description'))) !!}
                </p>
                
                <!-- Quick Info -->
                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div class="bg-purple-50 rounded-lg p-4 border border-purple-200">
                        <p class="text-sm text-gray-600">Durasi Rata-rata</p>
                        <p class="text-xl font-bold text-purple-600">{{ PageContentManager::get('course', 'course_duration') }}</p>
                    </div>
                    <div class="bg-pink-50 rounded-lg p-4 border border-pink-200">
                        <p class="text-sm text-gray-600">Jumlah Course</p>
                        <p class="text-xl font-bold text-pink-600">{{ PageContentManager::get('course', 'course_modules') }}</p>
                    </div>
                </div>
                
                <a href="{{ route('contact') }}" class="inline-block px-6 py-3 bg-purple-600 text-white rounded-lg font-semibold hover:bg-purple-700 transition">
                    Jelajahi Kursus
                </a>
            </div>
        </div>

        <!-- Course Categories -->
        <div class="mb-16">
            <h3 class="font-display font-bold text-2xl mb-12 text-center scroll-fade">Kategori Kursus Kami</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Frontend -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition scroll-fade border border-gray-100">
                    <div class="bg-linear-to-r from-blue-400 to-blue-600 h-32 flex items-center justify-center">
                        <span class="text-5xl">🎨</span>
                    </div>
                    <div class="p-6">
                        <h4 class="font-bold text-lg mb-2">Frontend Development</h4>
                        <p class="text-gray-600 text-sm mb-4">HTML, CSS, JavaScript, React, Vue, dan framework frontend lainnya.</p>
                        <span class="inline-block px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold">12 Kursus</span>
                    </div>
                </div>

                <!-- Backend -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition scroll-fade border border-gray-100">
                    <div class="bg-linear-to-r from-green-400 to-green-600 h-32 flex items-center justify-center">
                        <span class="text-5xl">⚙️</span>
                    </div>
                    <div class="p-6">
                        <h4 class="font-bold text-lg mb-2">Backend Development</h4>
                        <p class="text-gray-600 text-sm mb-4">PHP, Laravel, Node.js, Python, dan server-side technologies.</p>
                        <span class="inline-block px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">14 Kursus</span>
                    </div>
                </div>

                <!-- Database & DevOps -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition scroll-fade border border-gray-100">
                    <div class="bg-linear-to-r from-orange-400 to-orange-600 h-32 flex items-center justify-center">
                        <span class="text-5xl">📊</span>
                    </div>
                    <div class="p-6">
                        <h4 class="font-bold text-lg mb-2">Database & DevOps</h4>
                        <p class="text-gray-600 text-sm mb-4">MySQL, MongoDB, Docker, CI/CD, dan infrastructure tools.</p>
                        <span class="inline-block px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-semibold">9 Kursus</span>
                    </div>
                </div>

                <!-- Mobile Development -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition scroll-fade border border-gray-100">
                    <div class="bg-linear-to-r from-pink-400 to-pink-600 h-32 flex items-center justify-center">
                        <span class="text-5xl">📱</span>
                    </div>
                    <div class="p-6">
                        <h4 class="font-bold text-lg mb-2">Mobile Development</h4>
                        <p class="text-gray-600 text-sm mb-4">React Native, Flutter, Swift, Kotlin, dan mobile frameworks.</p>
                        <span class="inline-block px-3 py-1 bg-pink-100 text-pink-700 rounded-full text-xs font-semibold">8 Kursus</span>
                    </div>
                </div>

                <!-- UI/UX Design -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition scroll-fade border border-gray-100">
                    <div class="bg-linear-to-r from-purple-400 to-purple-600 h-32 flex items-center justify-center">
                        <span class="text-5xl">🎭</span>
                    </div>
                    <div class="p-6">
                        <h4 class="font-bold text-lg mb-2">UI/UX Design</h4>
                        <p class="text-gray-600 text-sm mb-4">Figma, Adobe XD, UI Design Principles, dan User Experience.</p>
                        <span class="inline-block px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-semibold">7 Kursus</span>
                    </div>
                </div>

                <!-- Business & Entrepreneurship -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition scroll-fade border border-gray-100">
                    <div class="bg-linear-to-r from-yellow-400 to-yellow-600 h-32 flex items-center justify-center">
                        <span class="text-5xl">💼</span>
                    </div>
                    <div class="p-6">
                        <h4 class="font-bold text-lg mb-2">Business & Entrepreneurship</h4>
                        <p class="text-gray-600 text-sm mb-4">Digital Marketing, Business Strategy, dan Startup Basics.</p>
                        <span class="inline-block px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-semibold">6 Kursus</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Benefits Section -->
        <div class="mb-16">
            <h3 class="font-display font-bold text-2xl mb-12 text-center scroll-fade">Keuntungan Mengikuti Kursus Kami</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Benefit 1 -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition scroll-fade border border-gray-100">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">🔓</span>
                    </div>
                    <h4 class="font-bold text-lg mb-2">{{ PageContentManager::get('course', 'course_benefit_1') }}</h4>
                    <p class="text-gray-600 text-sm">Belajar kapan saja dan akses materi selamanya tanpa batasan waktu.</p>
                </div>

                <!-- Benefit 2 -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition scroll-fade border border-gray-100">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">✅</span>
                    </div>
                    <h4 class="font-bold text-lg mb-2">{{ PageContentManager::get('course', 'course_benefit_2') }}</h4>
                    <p class="text-gray-600 text-sm">Dapatkan sertifikat setelah menyelesaikan setiap kursus.</p>
                </div>

                <!-- Benefit 3 -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition scroll-fade border border-gray-100">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">👥</span>
                    </div>
                    <h4 class="font-bold text-lg mb-2">{{ PageContentManager::get('course', 'course_benefit_3') }}</h4>
                    <p class="text-gray-600 text-sm">Bergabung dengan komunitas aktif dan dapatkan dukungan peer-to-peer.</p>
                </div>

                <!-- Benefit 4 -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition scroll-fade border border-gray-100">
                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">🔄</span>
                    </div>
                    <h4 class="font-bold text-lg mb-2">{{ PageContentManager::get('course', 'course_benefit_4') }}</h4>
                    <p class="text-gray-600 text-sm">Materi kursus selalu diperbarui mengikuti perkembangan terbaru industri.</p>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-linear-to-r from-purple-600 to-pink-600 rounded-lg shadow-lg p-12 text-center scroll-fade">
            <h3 class="text-white text-3xl font-bold mb-4">Mulai Belajar Hari Ini</h3>
            <p class="text-purple-50 text-lg mb-8">Ratusan kursus menanti Anda. Pilih kursus favorit dan mulai perjalanan pembelajaran Anda sekarang juga.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="px-8 py-3 bg-white text-purple-600 rounded-lg font-semibold hover:bg-purple-50 transition">
                    Lihat Semua Kursus
                </a>
                <a href="{{ route('about') }}" class="px-8 py-3 bg-purple-500 text-white rounded-lg font-semibold hover:bg-purple-400 transition border border-white">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </div>
</section> --}}
<!-- ============================================================
     END KURSUS PAGE CONTENT
     ============================================================ -->
@endsection