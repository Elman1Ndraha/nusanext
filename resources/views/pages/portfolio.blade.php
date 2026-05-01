<!-- PORTFOLIO Section -->
<section id="portfolio" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16 scroll-fade">
            <h2 class="font-display font-bold text-red-800 text-4xl md:text-5xl mb-4">Portfolio Kami</h2>
            <p class="text-gray-600 text-lg">Lihat contoh project dan website yang telah kami buat</p>
        </div>

        <!-- Filter Buttons -->
        <div class="flex flex-wrap justify-center gap-3 mb-12 scroll-fade">
            <button class="px-6 py-2 bg-blue-600 text-white rounded-full font-semibold hover:bg-blue-700 transition filter-btn" data-filter="all">
                Semua
            </button>
            <button class="px-6 py-2 bg-gray-200 text-gray-800 rounded-full font-semibold hover:bg-gray-300 transition filter-btn" data-filter="website">
                Website
            </button>
            <button class="px-6 py-2 bg-gray-200 text-gray-800 rounded-full font-semibold hover:bg-gray-300 transition filter-btn" data-filter="ecommerce">
                E-Commerce
            </button>
            {{-- <button class="px-6 py-2 bg-gray-200 text-gray-800 rounded-full font-semibold hover:bg-gray-300 transition filter-btn" data-filter="mobile">
                Mobile App
            </button> --}}
        </div>

        <!-- Portfolio Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Portfolio 1 -->
            <div class="group portfolio-item bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition scroll-fade border border-gray-100" data-category="website">
                <div class="relative overflow-hidden h-48">
                    <div class="absolute inset-0 flex items-center justify-center text-6xl group-hover:scale-110 transition">
                        🌐
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">Company Website</h3>
                    <p class="text-gray-600 text-sm mb-4">Website perusahaan modern dengan design yang elegan dan responsive.</p>
                    <div class="flex gap-2 mb-4">
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold">HTML</span>
                        <span class="px-3 py-1 bg-teal-100 text-teal-700 rounded-full text-xs font-semibold">CSS</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold">JavaScript</span>
                    </div>
                    <a href="/" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition pointer-events-none">
                        Lihat Project →
                    </a>
                </div>
            </div>

            <!-- Portfolio 2 -->
            <div class="group portfolio-item bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition scroll-fade border border-gray-100" data-category="ecommerce">
                <div class="relative overflow-hidden h-48 bg-linear-to-br from-purple-400 to-pink-400">
                    <div class="absolute inset-0 flex items-center justify-center text-6xl group-hover:scale-110 transition">
                        🛒
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">E-Commerce Store</h3>
                    <p class="text-gray-600 text-sm mb-4">Platform e-commerce lengkap dengan sistem pembayaran dan inventory management.</p>
                    <div class="flex gap-2 mb-4">
                        <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-semibold">Laravel</span>
                        <span class="px-3 py-1 bg-pink-100 text-pink-700 rounded-full text-xs font-semibold">MySQL</span>
                        <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-semibold">Tailwind</span>
                    </div>
                    <a href="#" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition pointer-events-none">
                        Lihat Project →
                    </a>
                </div>
            </div>

            <!-- Portfolio 3 -->
            {{-- <div class="group portfolio-item bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition scroll-fade border border-gray-100" data-category="mobile">
                <div class="relative overflow-hidden h-48 bg-linear-to-br from-green-400 to-emerald-400">
                    <div class="absolute inset-0 flex items-center justify-center text-6xl group-hover:scale-110 transition">
                        📱
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">Mobile App</h3>
                    <p class="text-gray-600 text-sm mb-4">Aplikasi mobile dengan fitur real-time dan notifikasi push yang interaktif.</p>
                    <div class="flex gap-2 mb-4">
                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">React Native</span>
                        <span class="px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-xs font-semibold">Firebase</span>
                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">JavaScript</span>
                    </div>
                    <a href="#" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition pointer-events-none">
                        Lihat Project →
                    </a>
                </div>
            </div> --}}

            <!-- Portfolio 4 -->
            <div class="group portfolio-item bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition scroll-fade border border-gray-100" data-category="website">
                <div class="relative overflow-hidden h-48 bg-linear-to-br from-yellow-400 to-orange-400">
                    <div class="absolute inset-0 flex items-center justify-center text-6xl group-hover:scale-110 transition">
                        📰
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">Blog Platform</h3>
                    <p class="text-gray-600 text-sm mb-4">Platform blog dengan CMS terintegrasi untuk manajemen konten yang mudah.</p>
                    <div class="flex gap-2 mb-4">
                        <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-semibold">Laravel</span>
                        <span class="px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-semibold">Vue.js</span>
                        <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-semibold">PostgreSQL</span>
                    </div>
                    <a href="#" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition pointer-events-none">
                        Lihat Project →
                    </a>
                </div>
            </div>

            <!-- Portfolio 5 -->
            <div class="group portfolio-item bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition scroll-fade border border-gray-100" data-category="ecommerce">
                <div class="relative overflow-hidden h-48 bg-linear-to-br from-indigo-400 to-blue-400">
                    <div class="absolute inset-0 flex items-center justify-center text-6xl group-hover:scale-110 transition">
                        💼
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">SaaS Platform</h3>
                    <p class="text-gray-600 text-sm mb-4">Platform SaaS dengan fitur subscription dan analytics dashboard yang powerful.</p>
                    <div class="flex gap-2 mb-4">
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-xs font-semibold">Node.js</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold">React</span>
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-xs font-semibold">MongoDB</span>
                    </div>
                    <a href="#" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition pointer-events-none">
                        Lihat Project →
                    </a>
                </div>
            </div>

            <!-- Portfolio 6 -->
            {{-- <div class="group portfolio-item bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition scroll-fade border border-gray-100" data-category="mobile">
                <div class="relative overflow-hidden h-48 bg-linear-to-br from-red-400 to-pink-400">
                    <div class="absolute inset-0 flex items-center justify-center text-6xl group-hover:scale-110 transition">
                        🎮
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">Game App</h3>
                    <p class="text-gray-600 text-sm mb-4">Aplikasi game dengan grafis yang menarik dan multiplayer functionality.</p>
                    <div class="flex gap-2 mb-4">
                        <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-semibold">Unity</span>
                        <span class="px-3 py-1 bg-pink-100 text-pink-700 rounded-full text-xs font-semibold">C#</span>
                        <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-semibold">AWS</span>
                    </div>
                    <a href="#" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition pointer-events-none">
                        Lihat Project →
                    </a>
                </div>
            </div> --}}
        </div>
    </div>
</section>

<script>
    // Portfolio filter functionality
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active button
                filterBtns.forEach(b => {
                    b.classList.remove('bg-blue-600', 'text-white');
                    b.classList.add('bg-gray-200', 'text-gray-800');
                });
                btn.classList.add('bg-blue-600', 'text-white');
                btn.classList.remove('bg-gray-200', 'text-gray-800');

                // Filter items
                const filter = btn.getAttribute('data-filter');
                portfolioItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.classList.add('scroll-fade');
                        }, 10);
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    });
</script>