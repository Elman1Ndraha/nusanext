@php use App\Services\PageContentManager; @endphp

<!-- ABOUT Section -->
<section id="about" class="py-8 md:py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-12 scroll-fade">
            <h2 class="font-display text-red-800 font-bold text-4xl md:text-5xl mb-4">{{ PageContentManager::get('about', 'about_heading') }}</h2>
            <div class="w-24 h-1 bg-linear-to-r from-blue-600 to-teal-600 mx-auto"></div>
        </div>
        
        <!-- Main Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mb-16">
            <!-- Image -->
            <div class="scroll-fade">
                <div class="relative">
                    <div class="absolute inset-0 bg-linear-to-br from-blue-300 to-teal-300 rounded-2xl transform rotate-3 opacity-20"></div>
                    @php $aboutImage = PageContentManager::get('about', 'about_image'); @endphp
                    @if($aboutImage)
                        <div class="relative rounded-2xl overflow-hidden shadow-lg min-h-[320px]">
                            <img src="{{ asset('storage/' . $aboutImage) }}" alt="About Image" class="w-full h-full object-cover" />
                        </div>
                    @else
                        <div class="relative bg-linear-to-br from-gray-100 to-gray-50 rounded-2xl p-12 text-center">
                            <div class="text-8xl mb-6">👥</div>
                            <p class="text-gray-600 font-semibold">Tim Profesional & Berpengalaman</p>
                        </div>
                    @endif
                </div>
            </div>
            
            <!-- Content -->
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
                
                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600">{{ PageContentManager::get('about', 'about_stat_1_value') }}</div>
                        <p class="text-gray-600 text-sm mt-2">{{ PageContentManager::get('about', 'about_stat_1_label') }}</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-teal-600">{{ PageContentManager::get('about', 'about_stat_2_value') }}</div>
                        <p class="text-gray-600 text-sm mt-2">{{ PageContentManager::get('about', 'about_stat_2_label') }}</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600">{{ PageContentManager::get('about', 'about_stat_3_value') }}</div>
                        <p class="text-gray-600 text-sm mt-2">{{ PageContentManager::get('about', 'about_stat_3_label') }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Values Section -->
        <div class="mb-20">
            <h3 class="font-display font-bold text-3xl text-center mb-12 scroll-fade">Nilai-Nilai Kami</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Value 1 -->
                <div class="p-8 rounded-xl text-center text-white scroll-fade hover:shadow-lg transition" style="background: linear-gradient(to bottom right, #6e3434, #6e3434);">
                    <div class="text-5xl mb-4">🎯</div>
                    <h4 class="font-bold text-lg mb-3">Fokus</h4>
                    <p class="text-sm">Fokus pada hasil dan kepuasan klien adalah prioritas utama kami.</p>
                </div>
                
                <!-- Value 2 -->
                <div class="p-8 bg-linear-to-br from-teal-50 to-teal-100 rounded-xl text-center scroll-fade hover:shadow-lg transition">
                    <div class="text-5xl mb-4">💡</div>
                    <h4 class="font-bold text-lg mb-3">Inovasi</h4>
                    <p class="text-gray-700 text-sm">Kami terus berinovasi untuk menghadirkan solusi terdepan.</p>
                </div>
                
                <!-- Value 3 -->
                <div class="p-8 rounded-xl text-center text-white scroll-fade hover:shadow-lg transition" style="background: linear-gradient(to bottom right, #346e34, #346e34);">
                    <div class="text-5xl mb-4">🤝</div>
                    <h4 class="font-bold text-lg mb-3">Kerjasama</h4>
                    <p class="text-sm">Kami bermitra dengan klien untuk mencapai kesuksesan bersama.</p>
                </div>
                
                <!-- Value 4 -->
                <div class="p-8 bg-linear-to-br from-teal-50 to-teal-100 rounded-xl text-center scroll-fade hover:shadow-lg transition">
                    <div class="text-5xl mb-4">⭐</div>
                    <h4 class="font-bold text-lg mb-3">Kualitas</h4>
                    <p class="text-gray-700 text-sm">Standar kualitas tertinggi dalam setiap aspek pekerjaan kami.</p>
                </div>
            </div>
        </div>
    </div>
</section>