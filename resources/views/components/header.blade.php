<header class="fixed top-0 left-0 right-0 bg-white shadow-sm z-50 sticky-header border-b border-gray-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo & Brand -->
            <a href="/" class="flex items-center space-x-3 hover:opacity-80 transition group">
                <div class="w-12 h-12 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-all transform group-hover:scale-105">
                    <span class="text-red font-bold text-lg">nX</span>
                </div>
                <div class="hidden sm:block">
                    <h1 class="font-display items-center font-bold text-lg" style="background: linear-gradient(to right, #3b82f6, #14b8a6); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                        Nusanext
                    </h1>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-1">
                <a href="#home" class="nav-link group px-4 py-2 rounded-lg font-medium text-gray-700 relative transition-all duration-300 hover:text-red-600 active">
                    <span class="relative z-10">Home</span>
                    <span class="absolute inset-0 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 origin-left"></span>
                </a>
                <a href="#about" class="nav-link group px-4 py-2 rounded-lg font-medium text-gray-700 relative transition-all duration-300 hover:text-red-600">
                    <span class="relative z-10">About</span>
                    <span class="absolute inset-0 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 origin-left"></span>
                </a>
                <a href="#portfolio" class="nav-link group px-4 py-2 rounded-lg font-medium text-gray-700 relative transition-all duration-300 hover:text-red-600">
                    <span class="relative z-10">Pelanggan</span>
                    <span class="absolute inset-0 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 origin-left"></span>
                </a>
                <a href="#testimonial" class="nav-link group px-4 py-2 rounded-lg font-medium text-gray-700 relative transition-all duration-300 hover:text-red-600">
                    <span class="relative z-10">Testimonial</span>
                    <span class="absolute inset-0 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 origin-left"></span>
                </a>
                <a href="#contact" class="nav-link group px-4 py-2 rounded-lg font-medium text-gray-700 relative transition-all duration-300 hover:text-red-600">
                    <span class="relative z-10">Contact</span>
                    <span class="absolute inset-0 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 origin-left"></span>
                </a>
            </nav>

            <!-- Right Side CTA & Mobile Menu -->
            <div class="flex items-center space-x-4">
                <!-- Mobile Menu Button -->
                <button class="md:hidden inline-flex p-2 rounded-lg text-gray-700 hover:bg-gray-100 transition" id="mobileMenuBtn">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <nav class="md:hidden hidden pb-6 border-t border-gray-100" id="mobileMenu">
            <div class="space-y-2 pt-4">
                <a href="#home" class="nav-link block px-4 py-3 rounded-lg font-medium text-gray-700 hover:hover:text-red-600 transition">
                    🏠 Home
                </a>
                <a href="#about" class="nav-link block px-4 py-3 rounded-lg font-medium text-gray-700 hover:hover:text-red-600 transition">
                    ℹ️ About
                </a>
                <a href="#portfolio" class="nav-link block px-4 py-3 rounded-lg font-medium text-gray-700 hover:hover:text-red-600 transition">
                    🖥 Pelanggan
                </a>
                <a href="#testimonial" class="nav-link block px-4 py-3 rounded-lg font-medium text-gray-700 hover:hover:text-red-600 transition">
                    ⭐ Testimonial
                </a>
                <a href="#contact" class="nav-link block px-4 py-3 rounded-lg font-medium text-gray-700 hover:hover:text-red-600 transition">
                    📧 Contact
                </a>
            </div>
        </nav>
    </div>
</header>

<style>
    .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(to right, #af1e1e, #af1e1e);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.3s ease;
    }

    .nav-link:hover::after,
    .nav-link.active::after {
        transform: scaleX(1);
    }

    .nav-link.active {
        color: #af1e1e;
    }
</style>

<script>
    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!mobileMenuBtn?.contains(e.target) && !mobileMenu?.contains(e.target)) {
            mobileMenu?.classList.add('hidden');
        }
    });

     const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".nav-link");

    function setActiveLink() {
        let current = "";

        sections.forEach(section => {
            const sectionTop = section.offsetTop - 100;
            const sectionHeight = section.clientHeight;

            if (pageYOffset >= sectionTop) {
                current = section.getAttribute("id");
            }
        });

        navLinks.forEach(link => {
            link.classList.remove("active");
            if (link.getAttribute("href") === "#" + current) {
                link.classList.add("active");
            }
        });
    }

    window.addEventListener("scroll", setActiveLink);

    // Active saat diklik
    navLinks.forEach(link => {
        link.addEventListener("click", function () {
            navLinks.forEach(l => l.classList.remove("active"));
            this.classList.add("active");
        });
    });
</script>