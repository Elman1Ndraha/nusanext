<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'nusanext')</title>
    <link rel="icon" type="images/png" href="{{ asset('favicon.ico') }}">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e40af',
                        secondary: '#0f766e',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Poppins', 'sans-serif'],
                    },
                    backgroundImage: {
                        'gradient-to-r-red-teal': 'linear-gradient(to right, #dc2626, #0d9488)',
                    },
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            overflow-x: hidden;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
            position: relative;
            /* 🎯 Ensure body takes full viewport height untuk sticky footer layout */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f8fafc;
        }

        /* Animated gradient background yang modern dan profesional */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            z-index: -1;
            background: linear-gradient(120deg, rgba(34, 197, 94, 0.18), rgba(59, 130, 246, 0.16), rgba(244, 63, 94, 0.14), rgba(14, 165, 233, 0.18));
            background-size: 400% 400%;
            filter: blur(40px);
            animation: gradientFlow 18s ease infinite;
        }

        @keyframes gradientFlow {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
        }
        
        .sticky-header {
            animation: slideDown 0.5s ease-out;
            position: sticky;
            top: 0;
            left: 0;
            right: 0;
            z-index: 50;
            width: 100%;
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.96);
        }
        
        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        .scroll-fade {
            animation: fadeInUp 0.8s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Prevent horizontal scrolling on root elements only */
        html, body {
            max-width: 100%;
            overflow-x: hidden;
        }

        /* 🎯 Make sure max-w-7xl doesn't shrink incorrectly */
        .max-w-7xl {
            max-width: 100%;
            overflow: visible;
        }

        /* 🎯 Main content area grows to push footer to bottom if content is short */
        main {
            flex: 1;
            width: 100%;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        /* Linear gradient support */
        .bg-linear-to-r {
            background: linear-gradient(to right, var(--tw-gradient-stops));
        }

        .from-blue-600 {
            --tw-gradient-from: #2563eb;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(37, 99, 235, 0));
        }

        .to-teal-600 {
            --tw-gradient-to: #0d9488;
        }

        .from-blue-400 {
            --tw-gradient-from: #60a5fa;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(96, 165, 250, 0));
        }

        .to-blue-600 {
            --tw-gradient-to: #2563eb;
        }

        .from-green-400 {
            --tw-gradient-from: #4ade80;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(74, 222, 128, 0));
        }

        .to-green-600 {
            --tw-gradient-to: #16a34a;
        }

        .from-orange-400 {
            --tw-gradient-from: #fb923c;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(251, 146, 60, 0));
        }

        .to-orange-600 {
            --tw-gradient-to: #ea580c;
        }

        .from-pink-400 {
            --tw-gradient-from: #f472b6;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(244, 114, 182, 0));
        }

        .to-pink-600 {
            --tw-gradient-to: #db2777;
        }

        .from-purple-400 {
            --tw-gradient-from: #c084fc;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(192, 132, 252, 0));
        }

        .to-purple-600 {
            --tw-gradient-to: #9333ea;
        }

        .from-yellow-400 {
            --tw-gradient-from: #facc15;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(250, 204, 21, 0));
        }

        .to-yellow-600 {
            --tw-gradient-to: #ca8a04;
        }

        .bg-linear-to-br {
            background: linear-gradient(to bottom right, var(--tw-gradient-stops));
        }

        .from-purple-400 {
            --tw-gradient-from: #c084fc;
        }

        .to-pink-400 {
            --tw-gradient-to: #f472b6;
        }

        .from-green-400 {
            --tw-gradient-from: #4ade80;
        }

        .to-emerald-400 {
            --tw-gradient-to: #4ade80;
        }

        /* Additional support for dynamic sections */
        section {
            scroll-behavior: smooth;
        }

        /* Smooth transitions */
        a, button {
            transition: all 0.3s ease-in-out;
        }
        
    </style>
</head>
<body class="bg-white text-gray-900" id="app">
    @include('components.header')
    @include('components.navbar')
    
    <main>
        @yield('content')
    </main>
    
    @include('components.footer')
</body>
</html>