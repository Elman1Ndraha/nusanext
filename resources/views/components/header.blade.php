<header class="fixed top-0 left-0 right-0 bg-white shadow-sm z-50 fixed-header border-b border-gray-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo & Brand -->
            <nav>
                <a href="/" class="flex items-center space-x-3 hover:opacity-80 transition group">
                    <img src="{{ asset('images/logon.png') }}" alt="nusanext" class="w-10 h-10 rounded-lg shadow-md">
                    <div class="block">
                        <h1 class="font-display gap-3 items-center font-bold text-lg" style="background: linear-gradient(to right, #35a003, #35a003); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                            nusanext
                        </h1>
                    </div>
                </a>
            </nav>
            

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-1">
                <a href="{{ route ('home') }}" class="nav-link group px-4 py-2 rounded-lg font-medium text-gray-700 relative transition-all duration-300 hover:text-red-600 active">
                    <span class="relative z-10">Beranda</span>
                    <span class="absolute inset-0 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 origin-left"></span>
                </a>
                <a href="{{ route('about') }}" class="nav-link group px-4 py-2 rounded-lg font-medium text-gray-700 relative transition-all duration-300 hover:text-red-600">
                    <span class="relative z-10">Tentang Kami</span>
                    <span class="absolute inset-0 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 origin-left"></span>
                </a>
              

    <div class="relative" id="programMenuWrapper">
        <button
            id="programBtn"
            aria-expanded="false"
            class="flex items-center gap-1 px-4 py-2 rounded-lg font-medium text-gray-700 hover:text-red-600 transition-all duration-300">

            <span>Program</span>

            <svg xmlns="http://www.w3.org/2000/svg"
                id="programChevron"
                class="w-4 h-4 transition-transform duration-300"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">

                <path stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <!-- Dropdown (alert-like) -->
        <div
            id="programDropdown"
            role="menu"
            aria-hidden="true"
            class="absolute left-0 top-full mt-2 w-56 rounded-xl shadow-xl z-60 transform scale-95 opacity-0 pointer-events-none transition-all duration-150">

            <div class="bg-yellow-50 border-l-4 border-green-400 text-red-900 rounded-xl overflow-hidden">
                <a href="{{ route('index') }}"
                    class="block px-4 py-3 hover:bg-yellow-100">
                    Harga Website
                </a>

                <a href="{{ route('bootcamp') }}"
                    class="block px-4 py-3 hover:bg-yellow-100">
                    Kursus Online
                </a>
            </div>

        </div>
    </div>
                <a href="{{ route('testimonial') }}" class="nav-link group px-4 py-2 rounded-lg font-medium text-gray-700 relative transition-all duration-300 hover:text-red-600">
                    <span class="relative z-10">Testimonial</span>
                    <span class="absolute inset-0 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 origin-left"></span>
                </a>
                <a href="{{ route('contact') }}" class="nav-link group px-4 py-2 rounded-lg font-medium text-gray-700 relative transition-all duration-300 hover:text-red-600">
                    <span class="relative z-10">Kontak</span>
                    <span class="absolute inset-0 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 origin-left"></span>
                </a>


            </nav>

            <!-- Right Side CTA & Mobile Menu -->
            <div class="flex items-center space-x-4">
                <!-- Mobile Menu Button -->
                <button class="sm:hidden inline-flex p-2 rounded-lg text-gray-700 hover:bg-gray-100 transition" id="mobileMenuBtn">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <nav class="sm:hidden hidden pb-6 border-t border-gray-100" id="mobileMenu">
            <div class="space-y-2 pt-4">
                <a href="{{ route('home') }}" class="nav-link block px-4 py-3 rounded-lg font-medium text-gray-700 hover:text-red-600 transition">
                    Beranda
                </a>
                <a href="{{ route('about') }}" class="nav-link block px-4 py-3 rounded-lg font-medium text-gray-700 hover:text-red-600 transition">
                    Tentang Kami
                </a>
                <details class="px-4 py-3">
                    <summary class="font-medium text-gray-700 cursor-pointer hover:text-red-600 transition">Program</summary>
                    <div class="mt-2 space-y-2 ml-2">
                        <a href="{{ route('index') }}" class="block px-3 py-2 rounded-lg font-medium text-gray-600 hover:text-red-600 transition">
                            Kursus Online
                        </a>
                        <a href="{{ route('bootcamp') }}" class="block px-3 py-2 rounded-lg font-medium text-gray-600 hover:text-red-600 transition">
                            Bootcamp
                        </a>
                    </div>
                </details>
                <a href="{{ route('testimonial') }}" class="nav-link block px-4 py-3 rounded-lg font-medium text-gray-700 hover:text-red-600 transition">
                    Testimonial
                </a>
                <a href="{{ route('contact') }}" class="nav-link block px-4 py-3 rounded-lg font-medium text-gray-700 hover:text-red-600 transition">
                    Kontak
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

    /* Header fixed di semua ukuran: supaya konten berjalan di belakang header */
    header {
        width: 100%;
        box-sizing: border-box;
        overflow: visible;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 9999;
        background-color: rgba(255,255,255,0.96);
        backdrop-filter: blur(8px);
    }

    .max-w-7xl,
    .flex.justify-between.items-center.h-20,
    .relative#programMenuWrapper {
        min-width: 0;
        overflow: visible;
    }

    #programMenuWrapper {
        position: relative;
        overflow: visible;
    }

    #programDropdown {
        position: absolute;
        left: 0;
        top: calc(100% + 0.5rem);
        z-index: 9999;
        overflow: visible;
        width: auto;
        min-width: 14rem;
        transform-origin: top left;
    }

    /* Program dropdown show/hide helpers */
    #programDropdown.show {
        opacity: 1 !important;
        pointer-events: auto !important;
        transform: scale(1) !important;
    }

    #programDropdown.show {
        opacity: 1 !important;
        pointer-events: auto !important;
        transform: scale(1) !important;
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

    // Program dropdown: toggle on click, close on outside click or Escape
    const programBtn = document.getElementById('programBtn');
    const programDropdown = document.getElementById('programDropdown');
    const programChevron = document.getElementById('programChevron');

    function openProgramDropdown() {
        programDropdown.classList.add('show');
        programBtn.setAttribute('aria-expanded', 'true');
        programChevron.classList.add('rotate-180');
    }

    function closeProgramDropdown() {
        programDropdown.classList.remove('show');
        programBtn.setAttribute('aria-expanded', 'false');
        programChevron.classList.remove('rotate-180');
    }

    if (programBtn && programDropdown) {
        programBtn.addEventListener('click', (ev) => {
            ev.stopPropagation();
            const isOpen = programDropdown.classList.contains('show');
            if (isOpen) closeProgramDropdown(); else openProgramDropdown();
        });

        // Close when clicking outside
        document.addEventListener('click', (e) => {
            if (!programBtn.contains(e.target) && !programDropdown.contains(e.target)) {
                closeProgramDropdown();
            }
        });

        // Close on Escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeProgramDropdown();
            }
        });
    }

    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".nav-link");

    // Function to set active link based on current URL
    function setActiveLink() {
        const currentPath = window.location.pathname;
        console.log('Current path:', currentPath);
        
        navLinks.forEach(link => {
            link.classList.remove("active");
            const href = link.getAttribute("href");
            
            // Match current path with href
            const isActive = href === currentPath || 
                           (currentPath === '/' && href === '/') ||
                           ((currentPath === '/' || currentPath === '') && href === "{{ route('home') }}");
            
            if (isActive) {
                link.classList.add("active");
                console.log('Active link found:', href);
            }
        });
    }

    // Function to scroll to section smoothly
    function scrollToSection(sectionId) {
        const element = document.getElementById(sectionId);
        if (element) {
            const elementTop = element.getBoundingClientRect().top + window.pageYOffset;
            window.scrollTo({
                top: elementTop - 100,
                behavior: 'smooth'
            });
        }
    }

    // Handle navigation link clicks
    navLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            const href = this.getAttribute("href");
            
            // Only handle internal navigation (routes yang dimulai dengan /)
            if (href && (href.startsWith('/') || href === '/')) {
                e.preventDefault();
                
                // Close mobile menu
                if (mobileMenu) {
                    mobileMenu.classList.add('hidden');
                }
                
                // Update URL tanpa reload
                window.history.pushState({ path: href }, '', href);
                
                // Map URL ke section ID
                const sectionMap = {
                    '/': 'home',
                    '/about': 'about',
                    '/portfolio': 'portfolio',
                    '/testimonial': 'testimonial',
                    '/contact': 'contact'
                };
                
                const sectionId = sectionMap[href];
                console.log('Navigating to:', href, 'Section:', sectionId);
                
                if (sectionId) {
                    scrollToSection(sectionId);
                }
                
                // Update active link
                setActiveLink();
            }
        });
    });

    // Handle browser back/forward buttons
    window.addEventListener('popstate', function (e) {
        setActiveLink();
        const path = window.location.pathname;
        const sectionMap = {
            '/': 'home',
            '/about': 'about',
            '/portfolio': 'portfolio',
            '/testimonial': 'testimonial',
            '/contact': 'contact'
        };
        const sectionId = sectionMap[path];
        if (sectionId) {
            scrollToSection(sectionId);
        }
    });

    // Handle scroll to set active link
    window.addEventListener("scroll", setActiveLink);

    // Set active link on page load
    document.addEventListener('DOMContentLoaded', function () {
        setActiveLink();
        
        // Auto scroll to section on page load if not on home
        const path = window.location.pathname;
        const sectionMap = {
            '/': 'home',
            '/about': 'about',
            '/portfolio': 'portfolio',
            '/testimonial': 'testimonial',
            '/contact': 'contact'
        };
        const sectionId = sectionMap[path];
        console.log('Page loaded at:', path, 'Section:', sectionId);
        
        if (sectionId && sectionId !== 'home') {
            scrollToSection(sectionId);
        }
    });

    // Also set active link immediately (in case DOMContentLoaded is too late)
    setActiveLink();
</script>