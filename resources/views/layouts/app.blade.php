<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Azka CSS</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = { 
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    }
                }
            }
        }

        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        function toggleTheme() {
            const isDark = document.documentElement.classList.toggle('dark');
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        }

        // Toggle Hamburger Menu Mobile
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');

            const isOpen = !menu.classList.contains('pointer-events-none');

            if (isOpen) {
                menu.classList.add('opacity-0', 'pointer-events-none');
                menu.classList.remove('opacity-100', 'pointer-events-auto');
                hamburgerIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            } else {
                menu.classList.remove('opacity-0', 'pointer-events-none');
                menu.classList.add('opacity-100', 'pointer-events-auto');
                hamburgerIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            }
        }
    </script>

    <style>
        @keyframes shimmer {
            100% { transform: translateX(100%); }
        }
    </style>
</head>
<body class="bg-[#f4f5f8] text-slate-800 dark:bg-slate-900 dark:text-slate-100 h-screen w-screen overflow-x-hidden md:overflow-hidden font-sans transition-colors duration-200">

    <!-- Container Utama: Responsive Padding (px-5 py-6 di HP, px-32 py-14 di Desktop) -->
    <div class="w-full h-full flex flex-col justify-between px-5 md:px-12 lg:px-32 py-6 md:py-14 box-border">

        <!-- Header Navigasi -->
        <header class="w-full flex items-center justify-between shrink-0 z-50">
            <div class="w-28 md:w-32 h-9 md:h-10 bg-slate-400 dark:bg-slate-700 flex items-center pl-2 pb-2">
                <span class="dark:text-white text-sm">.</span><span class="dark:text-white"> ???</span>
            </div>

            <!-- Navbar Desktop -->
            <nav class="hidden md:flex items-center gap-10 lg:gap-14 text-xs font-bold tracking-widest uppercase">
                <a href="/home" class="{{ request()->is('home') || request()->is('/') ? 'text-[#ff2b56]' : 'text-slate-400 hover:text-slate-900 dark:hover:text-white' }} transition">Home</a>
                <a href="/about" class="{{ request()->is('about') ? 'text-[#ff2b56]' : 'text-slate-400 hover:text-slate-900 dark:hover:text-white' }} transition">About</a>
                <a href="/work" class="{{ request()->is('work') ? 'text-[#ff2b56]' : 'text-slate-400 hover:text-slate-900 dark:hover:text-white' }} transition">Work</a>
                <a href="/blog" class="{{ request()->is('blog') ? 'text-[#ff2b56]' : 'text-slate-400 hover:text-slate-900 dark:hover:text-white' }} transition">Blog</a>
                <a href="/contact" class="{{ request()->is('contact') ? 'text-[#ff2b56]' : 'text-slate-400 hover:text-slate-900 dark:hover:text-white' }} transition">Contact</a>
            </nav>

            <div class="flex items-center gap-2">
                <!-- Dark Mode Toggle Button -->
                <button type="button" onclick="toggleTheme()" class="p-2 rounded-full hover:bg-slate-200 dark:hover:bg-slate-800 transition focus:outline-none">
                    <svg class="w-5 h-5 dark:hidden text-slate-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/>
                    </svg>
                    <svg class="w-5 h-5 hidden dark:block text-amber-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="4"/>
                        <path d="M12 2v2"/><path d="M12 20v2"/>
                        <path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/>
                        <path d="M2 12h2"/><path d="M20 12h2"/>
                        <path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/>
                    </svg>
                </button>

                <!-- Tombol Hamburger (Mobile Only) -->
                <button type="button" onclick="toggleMobileMenu()" class="md:hidden p-2 text-slate-700 dark:text-slate-200 hover:text-[#ff2b56] transition focus:outline-none z-50">
                    <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="4" x2="20" y1="6" y2="6"/>
                        <line x1="4" x2="20" y1="12" y2="12"/>
                        <line x1="4" x2="20" y1="18" y2="18"/>
                    </svg>
                    <svg id="close-icon" class="w-6 h-6 hidden text-[#ff2b56]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"/><path d="m6 6 12 12"/>
                    </svg>
                </button>
            </div>
        </header>

        <!-- Menu Drawer Fullscreen Mobile -->
        <div id="mobile-menu" class="fixed inset-0 bg-slate-900/95 backdrop-blur-lg z-40 flex flex-col items-center justify-center gap-8 text-base font-bold tracking-widest uppercase transition-all duration-300 opacity-0 pointer-events-none md:hidden">
            <a href="/home" class="{{ request()->is('home') || request()->is('/') ? 'text-[#ff2b56]' : 'text-slate-300 hover:text-white' }} transition">Home</a>
            <a href="/about" class="{{ request()->is('about') ? 'text-[#ff2b56]' : 'text-slate-300 hover:text-white' }} transition">About</a>
            <a href="/work" class="{{ request()->is('work') ? 'text-[#ff2b56]' : 'text-slate-300 hover:text-white' }} transition">Work</a>
            <a href="/blog" class="{{ request()->is('blog') ? 'text-[#ff2b56]' : 'text-slate-300 hover:text-white' }} transition">Blog</a>
            <a href="/contact" class="{{ request()->is('contact') ? 'text-[#ff2b56]' : 'text-slate-300 hover:text-white' }} transition">Contact</a>
        </div>

        <!-- Konten Utama: Responsive Padding (px-0 di HP, px-40 di Desktop) -->
        <main class="relative w-full my-auto flex-grow flex items-center justify-center px-0 md:px-12 lg:px-40">
            @yield('content')

            <div class="hidden xl:flex absolute right-1 top-1/2 -translate-y-1/2 items-center gap-3 text-[10px] font-bold tracking-widest text-slate-400 uppercase [writing-mode:vertical-rl] z-10">
                <span>still skeptism</span>
                <span class="h-8 w-[1px] bg-slate-400"></span>
            </div>
        </main>

        <!-- Footer Responsive -->
        <footer class="w-full flex flex-col-reverse sm:flex-row items-center justify-between gap-4 shrink-0 pt-4 sm:pt-0">
            <!-- Icon Social Media -->
            <div class="flex items-center gap-5 text-slate-400 text-sm">
                <a href="https://www.instagram.com/latestsins" target="_blank" class="hover:text-[#ff2b56] transition">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
                <a href="https://github.com/azka-style-css" target="_blank" class="hover:text-[#ff2b56] transition">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                </a>
                <a href="https://www.linkedin.com/in/azka-csc/" target="_blank" class="hover:text-[#ff2b56] transition">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </a>
            </div>

            <!-- Tombol Buy me a Coffee -->
            <div class="relative inline-flex p-[2.5px] rounded-lg overflow-hidden shadow-[0_0_12px_rgba(255,0,128,0.6)]">
                <div class="absolute inset-[-100%] bg-[conic-gradient(from_0deg,#ff0055,#ffee00,#00ff66,#00ffff,#a100ff,#ff00aa,#ff0055)] animate-[spin_3s_linear_infinite] brightness-150"></div>

                <a href="/qris" class="relative z-10 w-44 sm:w-48 h-10 sm:h-12 bg-[#ff2b56] hover:bg-[#e02047] rounded-[6px] flex items-center justify-center sm:justify-start px-3 tracking-widest transition duration-300 overflow-hidden">
                    <span class="absolute inset-0 -translate-x-full animate-[shimmer_2s_infinite_linear] bg-gradient-to-r from-transparent via-white/50 to-transparent pointer-events-none"></span>

                    <svg class="w-4 h-4 sm:w-5 sm:h-5 fill-current text-white mr-2 relative z-10 shrink-0" viewBox="0 0 24 24">
                        <path d="M20 3H4v10c0 2.21 1.79 4 4 4h6c2.21 0 4-1.79 4-4v-3h2c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 5h-2V5h2v3zM2 20h20v2H2v-2z"/>
                    </svg>
                    <span class="text-white text-[11px] sm:text-xs font-bold relative z-10 whitespace-nowrap">Buy me a Coffee.</span>
                </a>
            </div>
        </footer>

    </div>

</body>
</html>