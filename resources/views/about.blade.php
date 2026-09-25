@extends('layouts.app')

@section('content')
    <div class="lg:col-span-7 flex flex-col items-start z-10 pr-0 lg:pr-6">
        <div class="flex items-center gap-2 text-xs tracking-widest font-bold text-slate-500 uppercase mb-6">
            <span class="w-6 h-[2px] bg-slate-400"></span>
            <span>About & Background</span>
        </div>

        <h1 class="dark:text-white text-3xl md:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight mb-4">
            Building with <span class="text-[#ff2b56]">Clarity</span> & Purpose.
        </h1>

        <p class="text-xs md:text-sm text-slate-500 leading-relaxed mb-6">
            Good outcomes are rarely accidental—they come from patience and iteration. I focus on creating simple, fast, and accessible web experiences with minimal bloat.
        </p>

        <div class="mb-8">
            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest block mb-3">Core Tech Stack</span>
            <div class="flex flex-wrap gap-2 text-xs font-semibold text-slate-700">
                <span class="bg-slate-200/80 px-3 py-1.5 rounded">Laravel Blade</span>
                <span class="bg-slate-200/80 px-3 py-1.5 rounded">Tailwind CSS</span>
                <span class="bg-slate-200/80 px-3 py-1.5 rounded">Alpine.js</span>
                <span class="bg-slate-200/80 px-3 py-1.5 rounded">REST APIs</span>
            </div>
        </div>

        <a href="/work" class="bg-[#ff2b56] hover:bg-[#e02047] text-white text-xs font-bold tracking-widest px-10 py-3 shadow-md transition">
            See My Projects
        </a>
    </div>

    <div class="lg:col-span-5 relative flex flex-col justify-center">
        <div class="absolute inset-0 -z-10 bg-slate-300/40 rounded-full blur-3xl scale-90"></div>

        <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl border border-slate-200/80 shadow-sm space-y-4">
            <h3 class="text-xs font-bold tracking-widest text-slate-400 uppercase mb-2">Experience Highlights</h3>

            <div class="border-l-2 border-[#ff2b56] pl-4 py-1">
                <span class="text-[10px] font-bold text-slate-400">2024 — Present</span>
                <h4 class="text-sm font-bold text-slate-800">Frontend & Blade Developer</h4>
                <p class="text-xs text-slate-500 mt-1">Crafting custom Blade component layouts and UI design systems.</p>
            </div>

            <div class="border-l-2 border-slate-300 pl-4 py-1">
                <span class="text-[10px] font-bold text-slate-400">2023 — 2024</span>
                <h4 class="text-sm font-bold text-slate-800">Web Project Contributor</h4>
                <p class="text-xs text-slate-500 mt-1">Developed static layouts, responsive web pages, and CDN scripts integrations.</p>
            </div>
        </div>
    </div>

    <div class="hidden xl:flex absolute right-0 bottom-4 items-center gap-3 text-[10px] font-bold tracking-widest text-slate-400 uppercase rotate-90 origin-right">
        <span>Background & Journey</span>
        <span class="w-8 h-[1px] bg-slate-400"></span>
    </div>
@endsection