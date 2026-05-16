<header class="fixed top-0 left-0 right-0 bg-white shadow-sm z-50 sticky-header border-b border-gray-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo & Brand -->
            <a href="/" class="flex items-center space-x-3 hover:opacity-80 transition group">
                <div class="w-12 h-12 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-all transform group-hover:scale-105">
                    <span class="text-red font-bold text-lg">nX</span>
                </div>
                <div class="hidden sm:block">
                    <h1 class="font-display items-center font-bold text-lg" style="background: linear-gradient(to right, #35a003, #35a003); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                        nusanext
                    </h1>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-1">
                <a href="{{ route ('home') }}" class="nav-link group px-4 py-2 rounded-lg font-medium text-gray-700 relative transition-all duration-300 hover:text-red-600 active">
                    <span class="relative z-10">Home</span>
                    <span class="absolute inset-0 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 origin-left"></span>
                </a>
                <a href="{{ route('about') }}" class="nav-link group px-4 py-2 rounded-lg font-medium text-gray-700 relative transition-all duration-300 hover:text-red-600">
                    <span class="relative z-10">About</span>
                    <span class="absolute inset-0 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 origin-left"></span>
                </a>
                <a href="{{ route('portfolio') }}" class="nav-link group px-4 py-2 rounded-lg font-medium text-gray-700 relative transition-all duration-300 hover:text-red-600">
                    <span class="relative z-10">Pelanggan</span>
                    <span class="absolute inset-0 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 origin-left"></span>
                </a>
                <a href="{{ route('testimonial') }}" class="nav-link group px-4 py-2 rounded-lg font-medium text-gray-700 relative transition-all duration-300 hover:text-red-600">
                    <span class="relative z-10">Testimonial</span>
                    <span class="absolute inset-0 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 origin-left"></span>
                </a>
                <a href="{{ route('contact') }}" class="nav-link group px-4 py-2 rounded-lg font-medium text-gray-700 relative transition-all duration-300 hover:text-red-600">
                    <span class="relative z-10">Contact</span>
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
                <a href="{{ route('home') }}" class="nav-link block px-4 py-3 rounded-lg font-medium text-gray-700 hover:hover:text-red-600 transition">
                    Home
                </a>
                <a href="{{ route('about') }}" class="nav-link block px-4 py-3 rounded-lg font-medium text-gray-700 hover:hover:text-red-600 transition">
                    About
                </a>
                <a href="{{ route('portfolio') }}" class="nav-link block px-4 py-3 rounded-lg font-medium text-gray-700 hover:hover:text-red-600 transition">
                    Pelanggan
                </a>
                <a href="{{ route('testimonial') }}" class="nav-link block px-4 py-3 rounded-lg font-medium text-gray-700 hover:hover:text-red-600 transition">
                    Testimonial
                </a>
                <a href="{{ route('contact') }}" class="nav-link block px-4 py-3 rounded-lg font-medium text-gray-700 hover:hover:text-red-600 transition">
                    Contact
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