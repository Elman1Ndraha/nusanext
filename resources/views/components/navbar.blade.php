<!-- Secondary Navigation Bar (Breadcrumb & Info) -->
<nav class="fixed top-20 left-0 right-0 bg-linear-to-r from-blue-50/80 to-teal-50/80">
    
</nav>

<style>
    /* Adjust main content padding to accommodate fixed header.
       Header height = 5rem (80px). If secondary navbar exists and is fixed,
       increase this value accordingly. */
    main {
        padding-top: 5rem; /* 80px to avoid content under fixed header */
    }

    @media (max-width: 768px) {
        main {
            padding-top: 6rem; /* slightly larger on small screens */
        }
    }
</style>