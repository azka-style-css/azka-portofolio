@extends('layouts.app')

@section('content')
    <div class="lg:col-span-7 flex flex-col items-start z-10 pr-0 lg:pr-8 mr-24">
        <div class="flex items-center gap-2 text-xs tracking-widest font-bold text-slate-500 uppercase mb-6">
            <span class="w-6 h-[2px] bg-slate-400"></span>
            <span>About & Background</span>
        </div>

        <h1 class="dark:text-white text-3xl md:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight mb-4">
            Bagaimana perjalanku di <span class="text-[#ff2b56]">dunia </span>yang<span class="text-[#ff2b56]"> absurd</span> ini.
        </h1>

        <p class="text-xs md:text-sm text-slate-500 leading-relaxed mb-8 max-w-lg">
            Good outcomes are rarely accidental—they come from patience and iteration. I focus on creating simple, fast, and accessible web experiences with minimal bloat.
        </p>

        <div class="mb-8">
            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest block mb-4">Core Tech Stack</span>
            <div class="flex flex-wrap gap-2 text-xs font-semibold text-slate-700 dark:text-slate-300">
                <span class="bg-slate-200/60 dark:bg-slate-800 px-3.5 py-1.5 rounded-full border border-slate-300/50 dark:border-slate-700">Laravel Blade</span>
                <span class="bg-slate-200/60 dark:bg-slate-800 px-3.5 py-1.5 rounded-full border border-slate-300/50 dark:border-slate-700">Tailwind CSS</span>
                <span class="bg-slate-200/60 dark:bg-slate-800 px-3.5 py-1.5 rounded-full border border-slate-300/50 dark:border-slate-700">PHP</span>
                <span class="bg-slate-200/60 dark:bg-slate-800 px-3.5 py-1.5 rounded-full border border-slate-300/50 dark:border-slate-700">JavaScript</span>
                <span class="bg-slate-200/60 dark:bg-slate-800 px-3.5 py-1.5 rounded-full border border-slate-300/50 dark:border-slate-700">MySQL</span>
            </div>
        </div>

        <a href="/work" class="bg-[#ff2b56] hover:bg-[#e02047] text-white text-xs font-bold tracking-widest px-8 py-3 shadow-md transition">
            See My Projects
        </a>
    </div>

    <div class="lg:col-span-5 relative flex flex-col justify-center pr-12 lg:pr-16 mt-10 lg:mt-0] ml-auto">
        
        <h3 class="text-xs font-bold tracking-widest text-slate-400 uppercase mb-6">Experience Highlights</h3>

        <div class="relative border-l border-slate-300 dark:border-slate-700 ml-2 space-y-8 pl-6">
            
            <div class="relative group">
                <span class="absolute -left-[31px] top-1.5 w-2.5 h-2.5 rounded-full bg-[#ff2b56] ring-4 ring-[#f4f5f8] dark:ring-slate-900"></span>
                <span class="text-[10px] font-bold text-[#ff2b56] tracking-wider uppercase">2025 — present</span>
                <h4 class="text-base font-bold text-slate-900 dark:text-white mt-0.5">On SMK N 1 Bantul</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400 mt-1 leading-relaxed">
                    Era masuknya saya ke dunia pendidikan yang jauh berbeda dengan pengalaman sebelumnya. bukan hnya rpl melainkan hingga ke dunia filsafat dangkal dan bahkan teolog. masa dimana pengetahuan bukan diperoleh namun dipertanyakan kebenarannya.
                </p>
            </div>

            <div class="relative group">
                <span class="absolute -left-[31px] top-1.5 w-2.5 h-2.5 rounded-full bg-slate-300 dark:bg-slate-700 ring-4 ring-[#f4f5f8] dark:ring-slate-900"></span>
                <span class="text-[10px] font-bold text-slate-400 tracking-wider uppercase">2024 — 2025</span>
                <h4 class="text-base font-bold text-slate-800 dark:text-slate-200 mt-0.5">Masa Kebodohan</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400 mt-1 leading-relaxed">
                    Masa dimana kemajuan sempat terhenti akibat percintaan wkwkw.
                </p>
            </div>

            <div class="relative group">
                <span class="absolute -left-[31px] top-1.5 w-2.5 h-2.5 rounded-full bg-slate-300 dark:bg-slate-700 ring-4 ring-[#f4f5f8] dark:ring-slate-900"></span>
                <span class="text-[10px] font-bold text-slate-400 tracking-wider uppercase">2023 — 2024</span>
                <h4 class="text-base font-bold text-slate-800 dark:text-slate-200 mt-0.5">Robotics</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400 mt-1 leading-relaxed">
                    Pernah mengikuti beberapa lomba robotic seperti maze solving dan line follower. baru menang satu kali awokawk
                </p>
            </div>

        </div>

    </div>
@endsection