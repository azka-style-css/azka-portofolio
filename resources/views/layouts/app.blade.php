<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Azka CSS</title>
    
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            darkMode: 'class'
        }
    </script>

    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        function toggleTheme() {
            const isDark = document.documentElement.classList.toggle('dark');
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        }
    </script>
</head>
<body class="bg-[#f4f5f8] text-slate-800 dark:bg-slate-900 dark:text-slate-100 min-h-screen flex flex-col justify-between font-sans pt-4 pb-10 transition-colors duration-200">

    <header class="w-full max-w-7xl mx-auto px-8 py-6 flex items-center justify-between">
  
        <div class="w-16 h-6 bg-slate-400 dark:bg-slate-700 rounded-sm pl-2 pb-2">
            <span class="dark:text-white text-sm">.</span><span class="dark:text-white"> ???</span>
        </div>

        <nav class="hidden md:flex items-center gap-8 text-xs font-bold tracking-widest uppercase">
           <a href="/home" class="{{ request()->is('home') || request()->is('/') ? 'text-[#ff2b56]' : 'text-slate-400 hover:text-slate-900 dark:hover:text-white' }} transition">Home</a>
           <a href="/about" class="{{ request()->is('about') ? 'text-[#ff2b56]' : 'text-slate-400 hover:text-slate-900 dark:hover:text-white' }} transition">About</a>
           <a href="/work" class="{{ request()->is('work') ? 'text-[#ff2b56]' : 'text-slate-400 hover:text-slate-900 dark:hover:text-white' }} transition">Work</a>
           <a href="/blog" class="{{ request()->is('blog') ? 'text-[#ff2b56]' : 'text-slate-400 hover:text-slate-900 dark:hover:text-white' }} transition">Blog</a>
           <a href="/contact" class="{{ request()->is('contact') ? 'text-[#ff2b56]' : 'text-slate-400 hover:text-slate-900 dark:hover:text-white' }} transition">Contact</a>
        </nav>

        <div class="text-[10px] font-bold tracking-wider text-slate-400">
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
        </div>
    </header>

    <main class="w-full max-w-7xl mx-auto px-8 my-auto grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative py-10">
        @yield('content')
    </main>

    <footer class="w-full max-w-7xl mx-auto px-8 py-6 flex items-center">
        <div class="flex items-center gap-5 text-slate-400 text-sm">

            <a href="https://www.instagram.com/latestsins?stkn=MWpnNXh5eWZ0bWxsZA==" target="_blank" rel="noopener noreferrer" class="hover:text-[#ff2b56] transition">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </a>
            <a href="https://github.com/azka-style-css" target="_blank" rel="noopener noreferrer" class="hover:text-[#ff2b56] transition">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                    <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
                </svg>
            </a>
            <a href="#" target="_blank" rel="noopener noreferrer" class="hover:text-[#ff2b56] transition">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
            </a>
            <a href="https://www.linkedin.com/in/azka-csc/" target="_blank" rel="noopener noreferrer" class="hover:text-[#ff2b56] transition">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                </svg>
            </a>
        </div>

        <a href="#" target="_blank" rel="noopener noreferrer" class="w-max h-8 bg-[#ff2b56] hover:bg-[#e02047] rounded-sm ml-auto flex items-center pl-2 pr-3 tracking-widest drop-shadow-[0_0_8px_rgba(255,43,86,0.8)] hover:drop-shadow-[0_0_15px_rgba(255,43,86,1)] transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current text-white mr-2" viewBox="0 0 24 24">
                <path d="M20 3H4v10c0 2.21 1.79 4 4 4h6c2.21 0 4-1.79 4-4v-3h2c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 5h-2V5h2v3zM2 20h20v2H2v-2z"/>
            </svg>

            <span class="text-white text-xs font-bold">Buy me a Coffee.</span>
        </a>
    </footer>
</body>
</html>