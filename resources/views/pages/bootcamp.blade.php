@php use App\Services\PageContentManager; @endphp
<!-- BOOTCAMP Section -->
<section id="bootcamp" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16 scroll-fade">
            <h2 class="font-display font-bold text-red-800 text-4xl md:text-5xl mb-4">Bootcamp</h2>
            <p class="text-gray-600 text-lg">Tingkatkan keterampilan Anda dengan program intensif kami</p>
            <div class="w-24 h-1 bg-linear-to-r from-blue-600 to-teal-600 mx-auto mt-6"></div>
        </div>
        
        <!-- Bootcamp Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-16">
            <!-- Image -->
            <div class="scroll-fade">
                <img src="{{ asset('images/bootcamp.jpg') }}" alt="Bootcamp" class="rounded-lg shadow-lg w-full">
            </div>
            
            <!-- Text Content -->
            <div class="scroll-fade">
                <h3 class="font-display font-bold text-3xl mb-6">{{ PageContentManager::get('bootcamp', 'bootcamp_heading') }}</h3>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    {!! nl2br(e(PageContentManager::get('bootcamp', 'bootcamp_description'))) !!}
                </p>
                
                <!-- Quick Info -->
                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                        <p class="text-sm text-gray-600">Durasi Program</p>
                        <p class="text-xl font-bold text-blue-600">{{ PageContentManager::get('bootcamp', 'bootcamp_duration') }}</p>
                    </div>
                    <div class="bg-teal-50 rounded-lg p-4 border border-teal-200">
                        <p class="text-sm text-gray-600">Kapasitas</p>
                        <p class="text-xl font-bold text-teal-600">{{ PageContentManager::get('bootcamp', 'bootcamp_capacity') }}</p>
                    </div>
                </div>
                
                <a href="{{ route('contact') }}" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition">
                    Daftar Sekarang
                </a>
            </div>
        </div>

        <!-- Benefits Section -->
        <div class="mb-16">
            <h3 class="font-display font-bold text-2xl mb-12 text-center scroll-fade">Manfaat Program Bootcamp</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Benefit 1 -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition scroll-fade border border-gray-100">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">👨‍🏫</span>
                    </div>
                    <h4 class="font-bold text-lg mb-2">{{ PageContentManager::get('bootcamp', 'bootcamp_benefit_1') }}</h4>
                    <p class="text-gray-600 text-sm">Belajar dari para ahli industri dengan pengalaman lebih dari 10 tahun.</p>
                </div>

                <!-- Benefit 2 -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition scroll-fade border border-gray-100">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">📜</span>
                    </div>
                    <h4 class="font-bold text-lg mb-2">{{ PageContentManager::get('bootcamp', 'bootcamp_benefit_2') }}</h4>
                    <p class="text-gray-600 text-sm">Dapatkan sertifikat yang diakui industri setelah menyelesaikan program.</p>
                </div>

                <!-- Benefit 3 -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition scroll-fade border border-gray-100">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">💼</span>
                    </div>
                    <h4 class="font-bold text-lg mb-2">{{ PageContentManager::get('bootcamp', 'bootcamp_benefit_3') }}</h4>
                    <p class="text-gray-600 text-sm">Dukungan penuh dalam mencari pekerjaan setelah lulus bootcamp.</p>
                </div>

                <!-- Benefit 4 -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition scroll-fade border border-gray-100">
                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">🎯</span>
                    </div>
                    <h4 class="font-bold text-lg mb-2">{{ PageContentManager::get('bootcamp', 'bootcamp_benefit_4') }}</h4>
                    <p class="text-gray-600 text-sm">Bangun portfolio nyata dengan project yang relevan dengan industri.</p>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-linear-to-r from-blue-600 to-teal-600 rounded-lg shadow-lg p-12 text-center scroll-fade">
            <h3 class="text-white text-3xl font-bold mb-4">Siap Mengubah Karir Anda?</h3>
            <p class="text-blue-50 text-lg mb-8">Jadilah bagian dari ribuan alumni sukses kami yang telah mendapatkan pekerjaan impian mereka.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="px-8 py-3 bg-white text-blue-600 rounded-lg font-semibold hover:bg-blue-50 transition">
                    Daftar Sekarang
                </a>
                <a href="{{ route('about') }}" class="px-8 py-3 bg-blue-500 text-white rounded-lg font-semibold hover:bg-blue-400 transition border border-white">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </div>
</section>