<!-- Secondary Navigation Bar (Breadcrumb & Info) -->
<nav class="fixed top-20 left-0 right-0 bg-linear-to-r from-blue-50/80 to-teal-50/80">
    {{-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-14">

            <!-- Info Badge (Desktop) -->
            <div class="hidden md:flex items-center space-x-4">
                <div class="flex items-center space-x-2 px-3 py-1.5 bg-white/60 rounded-full border border-blue-200/50">
                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                    <span class="text-xs font-medium text-gray-700">
                        We're online
                    </span>
                </div>
                <div class="text-xs text-gray-600">
                    Response time: <span class="font-semibold text-blue-600">24 hours</span>
                </div>
            </div>

            <!-- Quick Links (Mobile) -->
            <div class="md:hidden flex items-center space-x-2">
                <a href="tel:+6212123456" class="p-2 hover:bg-white/60 rounded-lg transition text-gray-700">
                    📞
                </a>
                <a href="mailto:info@mybrand.com" class="p-2 hover:bg-white/60 rounded-lg transition text-gray-700">
                    ✉️
                </a>
            </div>
        </div> --}}
    </div>
</nav>

<style>
    /* Adjust main content padding untuk accommodate header + navbar */
    main {
        padding-top: 6rem; /* 80px (header) + 56px (navbar) = 136px */
    }

    @media (max-width: 768px) {
        main {
            padding-top: 7rem;
        }
    }

    /* Smooth scroll behavior untuk nav links */
    html {
        scroll-behavior: smooth;
    }
</style>

<script>
    // Update breadcrumb saat scroll
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');
    const currentPageSpan = document.getElementById('currentPage');

    const navMap = {
        'home': 'Home',
        'about': 'About',
        'testimonial': 'Testimonial',
        'contact': 'Contact'
    };

    window.addEventListener('scroll', () => {
        let current = 'home';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (window.scrollY >= sectionTop - 200) {
                current = section.getAttribute('id');
            }
        });

        // Update active state
        navLinks.forEach(link => {
            link.classList.remove('active');
            const href = link.getAttribute('href');
            if (href === `#${current}`) {
                link.classList.add('active');
            }
        });

        // Update breadcrumb
        if (currentPageSpan) {
            currentPageSpan.textContent = navMap[current] || 'Home';
        }
    });

    // Smooth scroll untuk nav links
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');
            if (href && href.startsWith('#')) {
                e.preventDefault();
                const targetId = href.substring(1);
                const targetSection = document.getElementById(targetId);
                if (targetSection) {
                    targetSection.scrollIntoView({ 
                        behavior: 'smooth', 
                        block: 'start' 
                    });
                }
            }
        });
    });

    // Close mobile menu saat link diklik
    const mobileMenu = document.getElementById('mobileMenu');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu?.classList.add('hidden');
        });
    });
</script>