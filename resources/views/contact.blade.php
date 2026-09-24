@extends('layouts.app')

@section('content')
    <!-- Kolom Kiri: Informasi Kontak -->
    <div class="lg:col-span-7 flex flex-col items-start z-10 pr-0 lg:pr-6">
        <div class="flex items-center gap-2 text-xs tracking-widest font-bold text-slate-500 uppercase mb-6">
            <span class="w-6 h-[2px] bg-slate-400"></span>
            <span>Get In Touch</span>
        </div>

        <h1 class="text-3xl md:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight mb-4">
            Let's <span class="text-[#ff2b56]">Connect</span> & Build.
        </h1>

        <p class="text-xs md:text-sm text-slate-500 leading-relaxed mb-6">
            Have a project idea, want to collaborate, or just want to talk about clean code? Feel free to reach out directly via email or social platforms.
        </p>

        <!-- Status Availability -->
        <div class="flex items-center gap-3 bg-emerald-50 text-emerald-700 px-4 py-2 rounded-full border border-emerald-200 text-xs font-semibold mb-8">
            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
            <span>Available for new opportunities</span>
        </div>

        <a href="mailto:azka@example.com" class="bg-[#ff2b56] hover:bg-[#e02047] text-white text-xs font-bold tracking-widest px-10 py-3 shadow-md transition">
            Send An Email
        </a>
    </div>

    <!-- Kolom Kanan: Card Sosial & Fast Info -->
    <div class="lg:col-span-5 relative flex flex-col justify-center">
        <div class="absolute inset-0 -z-10 bg-slate-300/40 rounded-full blur-3xl scale-90"></div>

        <div class="bg-white/90 backdrop-blur p-6 rounded-2xl border border-slate-200 shadow-sm space-y-4">
            <h3 class="text-xs font-bold tracking-widest text-slate-400 uppercase mb-4">Direct Channels</h3>

            <div class="flex justify-between items-center py-2 border-b border-slate-100">
                <span class="text-xs font-bold text-slate-600">Email</span>
                <span class="text-xs text-slate-800 font-medium">azka@example.com</span>
            </div>

            <div class="flex justify-between items-center py-2 border-b border-slate-100">
                <span class="text-xs font-bold text-slate-600">Location</span>
                <span class="text-xs text-slate-800 font-medium">Indonesia</span>
            </div>

            <div class="flex justify-between items-center py-2">
                <span class="text-xs font-bold text-slate-600">Socials</span>
                <span class="text-xs text-[#ff2b56] font-bold">GitHub / LinkedIn / IG</span>
            </div>
        </div>
    </div>

    <!-- Teks Tepi Vertikal -->
    <div class="hidden xl:flex absolute right-0 bottom-4 items-center gap-3 text-[10px] font-bold tracking-widest text-slate-400 uppercase rotate-90 origin-right">
        <span>Say Hello</span>
        <span class="w-8 h-[1px] bg-slate-400"></span>
    </div>
@endsection