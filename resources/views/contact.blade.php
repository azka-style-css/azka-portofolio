@extends('layouts.app')

@section('content')
    <div class="lg:col-span-7 flex flex-col items-start z-10 pr-0 lg:pr-8">
        <div class="flex items-center gap-2 text-xs tracking-widest font-bold text-slate-500 uppercase mb-6">
            <span class="w-6 h-[2px] bg-slate-400"></span>
            <span>Connect & Build</span>
        </div>

        <h1 class="dark:text-white text-3xl md:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight mb-4">
            Tak kenal maka <span class="text-[#ff2b56]">tak cium</span>.
        </h1>

        <p class="text-xs md:text-sm text-slate-500 leading-relaxed mb-6 max-w-lg">
            Have a project idea, want to collaborate, or just want to talk about clean code? Feel free to reach out directly via email or social platforms.
        </p>

        <div class="flex items-center gap-3 bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 px-4 py-2 rounded-full border border-emerald-500/20 text-xs font-semibold mb-8">
            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
            <span>Available for new opportunities</span>
        </div>

        <a href="mailto:azkachirzasc@gmail.com" class="bg-[#ff2b56] hover:bg-[#e02047] text-white text-xs font-bold tracking-widest px-8 py-3 shadow-md transition">
            Send An Email
        </a>
    </div>

    <div class="lg:col-span-5 relative flex flex-col justify-center pr-12 lg:pr-16 mt-10 lg:mt-0">
        
        <h3 class="text-xs font-bold tracking-widest text-slate-400 uppercase mb-6">Direct Channels</h3>

        <div class="space-y-6">
            <div class="border-b border-slate-200 dark:border-slate-800 pb-4">
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest block mb-1">Email</span>
                <a href="mailto:azkachirzasc@gmail.com" class="text-sm md:text-base font-bold text-slate-800 dark:text-slate-100 hover:text-[#ff2b56] dark:hover:text-[#ff2b56] transition">
                    azkachirzasc@gmail.com
                </a>
            </div>

            <div class="border-b border-slate-200 dark:border-slate-800 pb-4">
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest block mb-1">Location</span>
                <span class="text-sm font-semibold text-slate-700 dark:text-slate-300">
                    Bantul, Yogyakarta — Indonesia 🇮🇩
                </span>
            </div>

            <div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest block mb-2">Social Platforms</span>
                <div class="flex items-center gap-4 text-xs font-bold text-[#ff2b56]">
                    <a href="https://github.com/azka-style-css" target="_blank" class="hover:underline">GitHub</a>
                    <span class="text-slate-300 dark:text-slate-700">/</span>
                    <a href="https://www.linkedin.com/in/azka-csc/" target="_blank" class="hover:underline">LinkedIn</a>
                    <span class="text-slate-300 dark:text-slate-700">/</span>
                    <a href="https://www.instagram.com/latestsins" target="_blank" class="hover:underline">Instagram</a>
                </div>
            </div>
        </div>

        <div class="hidden xl:flex absolute right-0 bottom-4 items-center gap-3 text-[10px] font-bold tracking-widest text-slate-400 uppercase rotate-90 origin-right">
            <span>Say Hello</span>
            <span class="w-8 h-[1px] bg-slate-400"></span>
        </div>
    </div>
@endsection