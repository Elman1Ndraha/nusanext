<!-- HERO SECTION -->
<section id="home" class="relative py-20 md:py-28 text-black bg-white">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <!-- LEFT CONTENT -->
            <div class="scroll-fade">

                <!-- TITLE -->
                <h1 class="font-display font-bold text-red-800 text-4xl sm:text-5xl md:text-6xl leading-tight mb-6">
                    {{ \App\Services\PageContentManager::get('home', 'hero_title') }}
                </h1>

                <!-- DESCRIPTION -->
                <p class="text-gray-600 text-lg leading-relaxed mb-8 max-w-2xl">
                    {{ \App\Services\PageContentManager::get('home', 'hero_description') }}
                </p>

                <!-- BUTTON GROUP -->
                <div class="flex flex-col sm:flex-row gap-4">

                    <!-- WHATSAPP BUTTON -->
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', \App\Services\PageContentManager::get('home', 'whatsapp_number')) }}"
                       target="_blank"
                       class="inline-flex items-center justify-center gap-3 bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-6 rounded-xl shadow-md hover:shadow-xl transition duration-300 hover:-translate-y-1">

                        <!-- ICON -->
                        <svg xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 32 32"
                             class="w-5 h-5 fill-current">
                            <path d="M16 .4C7.2.4.4 7.2.4 16c0 2.8.7 5.4 2 7.7L0 32l8.5-2.3c2.2 1.2 4.7 1.9 7.5 1.9 8.8 0 15.6-6.8 15.6-15.6S24.8.4 16 .4zm0 28.5c-2.4 0-4.6-.6-6.6-1.7l-.5-.3-5 1.3 1.3-4.9-.3-.5c-1.2-2-1.8-4.3-1.8-6.8 0-7.2 5.8-13 13-13s13 5.8 13 13-5.8 13-13 13zm7.1-9.7c-.4-.2-2.3-1.1-2.7-1.2-.4-.1-.6-.2-.9.2-.3.4-1 1.2-1.3 1.4-.2.2-.5.3-.9.1-.4-.2-1.8-.7-3.4-2.2-1.2-1.1-2-2.5-2.2-2.9-.2-.4 0-.6.2-.8.2-.2.4-.5.6-.7.2-.2.3-.4.4-.6.1-.2 0-.5 0-.7 0-.2-.9-2.1-1.2-2.9-.3-.7-.6-.6-.9-.6h-.8c-.3 0-.7.1-1 .5-.3.4-1.4 1.3-1.4 3.1 0 1.8 1.4 3.5 1.6 3.8.2.2 2.7 4.1 6.5 5.8.9.4 1.6.6 2.2.8.9.3 1.7.3 2.3.2.7-.1 2.3-.9 2.6-1.7.3-.8.3-1.5.2-1.7-.1-.2-.4-.3-.8-.5z"/>
                        </svg>

                        <span>
                            {{ \App\Services\PageContentManager::get('home', 'whatsapp_label') }}
                        </span>
                    </a>

                    <!-- LEARN MORE BUTTON -->
                    <a href="#about"
                       class="inline-flex items-center justify-center border-2 border-red-800 text-red-800 hover:bg-red-800 hover:text-white font-semibold py-3 px-6 rounded-xl transition duration-300 hover:-translate-y-1">

                        {{ \App\Services\PageContentManager::get('home', 'learn_more_label') }}

                    </a>

                </div>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="scroll-fade hidden md:flex justify-center">

                <div class="relative w-full max-w-md">

                    <!-- BLUR BACKGROUND -->
                    <div class="absolute inset-0 bg-red-200 rounded-3xl blur-3xl opacity-40"></div>

                    <!-- CARD -->
                    <div class="relative bg-white/70 backdrop-blur-lg border border-gray-200 rounded-3xl p-10 shadow-2xl text-center">

                        <!-- ICON -->
                        <div class="text-7xl mb-6 animate-bounce">
                            🚀
                        </div>

                        <!-- TITLE -->
                        <h3 class="text-3xl font-bold text-red-800 mb-4">
                            Inovasi Digital
                        </h3>

                        <!-- DESCRIPTION -->
                        <p class="text-gray-600 leading-relaxed">
                            Transformasi bisnis Anda dengan teknologi modern,
                            solusi digital kreatif, dan pengembangan sistem yang profesional.
                        </p>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- FEATURES SECTION -->
<section class="py-20 bg-gray-50">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- SECTION TITLE -->
        <div class="text-center mb-16">

            <h2 class="font-display font-bold text-4xl md:text-5xl text-red-800 mb-4">
                Mengapa Memilih Kami?
            </h2>

            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Kami menghadirkan solusi digital yang cepat, modern,
                dan terpercaya untuk membantu bisnis Anda berkembang.
            </p>

        </div>

        <!-- FEATURE GRID -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- FEATURE 1 -->
            <div class="bg-white p-8 rounded-2xl border border-gray-200 shadow-sm hover:shadow-2xl transition duration-300 hover:-translate-y-2 scroll-fade">

                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                    <span class="text-3xl">⚡</span>
                </div>

                <h3 class="font-bold text-red-800 text-2xl mb-4">
                    {{ \App\Services\PageContentManager::get('home', 'feature_1_title') }}
                </h3>

                <p class="text-gray-600 leading-relaxed">
                    {{ \App\Services\PageContentManager::get('home', 'feature_1_description') }}
                </p>

            </div>

            <!-- FEATURE 2 -->
            <div class="bg-white p-8 rounded-2xl border border-gray-200 shadow-sm hover:shadow-2xl transition duration-300 hover:-translate-y-2 scroll-fade">

                <div class="w-16 h-16 bg-teal-100 rounded-2xl flex items-center justify-center mb-6">
                    <span class="text-3xl">🎯</span>
                </div>

                <h3 class="font-bold text-red-800 text-2xl mb-4">
                    {{ \App\Services\PageContentManager::get('home', 'feature_2_title') }}
                </h3>

                <p class="text-gray-600 leading-relaxed">
                    {{ \App\Services\PageContentManager::get('home', 'feature_2_description') }}
                </p>

            </div>

            <!-- FEATURE 3 -->
            <div class="bg-white p-8 rounded-2xl border border-gray-200 shadow-sm hover:shadow-2xl transition duration-300 hover:-translate-y-2 scroll-fade">

                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-6">
                    <span class="text-3xl">🤝</span>
                </div>

                <h3 class="font-bold text-red-800 text-2xl mb-4">
                    {{ \App\Services\PageContentManager::get('home', 'feature_3_title') }}
                </h3>

                <p class="text-gray-600 leading-relaxed">
                    {{ \App\Services\PageContentManager::get('home', 'feature_3_description') }}
                </p>

            </div>

        </div>

    </div>
</section>