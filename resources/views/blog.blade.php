@extends('layouts.app')

@section('content')
    <!-- Kolom Kiri: Pengenalan Blog -->
    <div class="lg:col-span-7 flex flex-col items-start z-10 pr-0 lg:pr-6">
        <div class="flex items-center gap-2 text-xs tracking-widest font-bold text-slate-500 uppercase mb-6">
            <span class="w-6 h-[2px] bg-slate-400"></span>
            <span>Literature & Notes</span>
        </div>

        <h1 class="text-3xl md:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight mb-4">
            Thoughts on <span class="text-[#ff2b56]">Web</span> & Code.
        </h1>

        <p class="text-xs md:text-sm text-slate-500 leading-relaxed mb-8">
            I write about minimal web architectures, utility-first CSS strategies, and practical workflows for modern developers.
        </p>

        <!-- Daftar Topik -->
        <div class="space-y-3 w-full max-w-md mb-8">
            <div class="flex items-center justify-between p-3 bg-white/60 rounded-lg border border-slate-200">
                <span class="text-xs font-semibold text-slate-700">Blade Layouts without Build Steps</span>
                <span class="text-[10px] font-bold text-slate-400">5 min read</span>
            </div>
            <div class="flex items-center justify-between p-3 bg-white/60 rounded-lg border border-slate-200">
                <span class="text-xs font-semibold text-slate-700">Why Simplicity Wins in UI Design</span>
                <span class="text-[10px] font-bold text-slate-400">3 min read</span>
            </div>
        </div>

        <a href="#" class="bg-[#ff2b56] hover:bg-[#e02047] text-white text-xs font-bold tracking-widest px-10 py-3 shadow-md transition">
            Browse All Posts
        </a>
    </div>

    <!-- Kolom Kanan: Latest Post Card -->
    <div class="lg:col-span-5 relative flex flex-col justify-center">
        <div class="absolute inset-0 -z-10 bg-slate-300/40 rounded-full blur-3xl scale-90"></div>

        <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-md">
            <div class="flex items-center justify-between mb-3">
                <span class="text-[10px] font-bold text-[#ff2b56] uppercase tracking-widest">Latest Article</span>
                <span class="text-[10px] text-slate-400">Sept 2026</span>
            </div>
            <h3 class="text-lg font-bold text-slate-800 leading-snug mb-2">Mastering Utility-First Styling with Tailwind CDN</h3>
            <p class="text-xs text-slate-500 leading-relaxed mb-6">
                Discover how to rapidly prototype web layouts without waiting for Vite or Node compilation tasks.
            </p>
            <a href="#" class="inline-block bg-slate-900 hover:bg-[#ff2b56] text-white text-xs font-bold px-6 py-2.5 rounded transition">
                Read Article
            </a>
        </div>
    </div>

    <!-- Teks Tepi Vertikal -->
    <div class="hidden xl:flex absolute right-0 bottom-4 items-center gap-3 text-[10px] font-bold tracking-widest text-slate-400 uppercase rotate-90 origin-right">
        <span>Writings</span>
        <span class="w-8 h-[1px] bg-slate-400"></span>
    </div>
@endsection