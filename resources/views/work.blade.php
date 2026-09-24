@extends('layouts.app')

@section('content')
    <!-- Kolom Kiri: Services (Layanan yang ditawarkan) -->
    <div class="lg:col-span-7 flex flex-col items-start z-10 pr-0 lg:pr-6">
        <div class="flex items-center gap-2 text-xs tracking-widest font-bold text-slate-500 uppercase mb-6">
            <span class="w-6 h-[2px] bg-slate-400"></span>
            <span>Services & Portfolio</span>
        </div>

        <h1 class="text-3xl md:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight mb-4">
            Solutions I <span class="text-[#ff2b56]">Provide</span>.
        </h1>

        <p class="text-xs md:text-sm text-slate-500 leading-relaxed mb-6">
            From clean static portfolios to lightweight web applications. I turn design concepts into clean, functional code.
        </p>

        <!-- Service Items -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 w-full mb-8">
            <div class="bg-white/60 p-4 rounded-xl border border-slate-200">
                <h4 class="text-xs font-bold text-slate-800 uppercase tracking-wider mb-1">01. Web Development</h4>
                <p class="text-[11px] text-slate-500">Fast & responsive layouts built with Tailwind CSS & Blade.</p>
            </div>
            <div class="bg-white/60 p-4 rounded-xl border border-slate-200">
                <h4 class="text-xs font-bold text-slate-800 uppercase tracking-wider mb-1">02. UI/UX Refinement</h4>
                <p class="text-[11px] text-slate-500">Transforming cluttered interfaces into clean, minimal designs.</p>
            </div>
        </div>

        <a href="https://github.com" target="_blank" class="bg-[#ff2b56] hover:bg-[#e02047] text-white text-xs font-bold tracking-widest px-10 py-3 shadow-md transition">
            View Repositories
        </a>
    </div>

    <!-- Kolom Kanan: Featured Portfolio Card -->
    <div class="lg:col-span-5 relative flex flex-col justify-center">
        <div class="absolute inset-0 -z-10 bg-slate-300/40 rounded-full blur-3xl scale-90"></div>

        <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-md">
            <div class="w-full h-40 bg-slate-200 rounded-lg mb-4 flex items-center justify-center text-slate-400 text-xs font-bold uppercase tracking-widest">
                Project Showcase Preview
            </div>
            <span class="text-[10px] font-bold text-[#ff2b56] uppercase tracking-widest">Featured Project</span>
            <h3 class="text-base font-bold text-slate-800 mt-1">Minimalist Portfolio System</h3>
            <p class="text-xs text-slate-500 mt-1 mb-4">Built with zero build tools using Tailwind CDN and Laravel Blade layouts.</p>
            <a href="#" class="text-xs font-bold text-slate-800 hover:text-[#ff2b56] flex items-center gap-1 transition">
                Explore Project &rarr;
            </a>
        </div>
    </div>

    <!-- Teks Tepi Vertikal -->
    <div class="hidden xl:flex absolute right-0 bottom-4 items-center gap-3 text-[10px] font-bold tracking-widest text-slate-400 uppercase rotate-90 origin-right">
        <span>Selected Works</span>
        <span class="w-8 h-[1px] bg-slate-400"></span>
    </div>
@endsection