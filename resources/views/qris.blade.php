@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 w-full items-center z-10">
    <!-- Gambar QRIS -->
    <div class="lg:col-span-5 relative flex items-center justify-center">
        <div class="absolute inset-0 -z-10 bg-[#ff2b56]/10 rounded-full blur-3xl scale-90"></div>

        <img src="{{ asset('images/qris.jpeg') }}" 
             alt="QRIS Code" 
             class="max-h-[280px] sm:max-h-[350px] md:max-h-[450px] w-auto object-contain rounded-2xl border border-slate-200 dark:border-slate-800 shadow-2xl transition-all duration-300">
    </div>

    <!-- Detail Teks -->
    <div class="lg:col-span-7 flex flex-col justify-center items-start">
        <div class="flex items-center gap-2 text-xs tracking-widest font-bold text-slate-500 uppercase mb-4 md:mb-6">
            <span class="w-6 h-[2px] bg-slate-400"></span>
            <span>Support & Coffee</span>
        </div>

        <p class="text-xs md:text-sm text-slate-500 dark:text-slate-400 leading-relaxed mb-6 max-w-lg">
            Makasih udah sampe sini, untuk kebutuhan cafein ku dan insyaallah donasi ke panti asuhan bisa support & donate melalui barcode disamping atau link donate dibawah. 
        </p>

        <a href="{{ url()->previous() }}" class="inline-flex items-center gap-2 text-xs font-bold text-slate-900 dark:text-white hover:text-[#ff2b56] dark:hover:text-[#ff2b56] tracking-widest uppercase transition group mb-8">
            <span>&larr;</span>
            <span>Back to previous page</span>
        </a>

        <p class="max-w-lg text-xs text-slate-400 italic leading-relaxed">
            btw button rgb nya template, jadi wajrlah biar ke highlight awokawk <br>
            tapi kalau yg lain murni hand typing kayak design layouts, button style, font, texting, color style, dan pstiny hero section and section.<br>
            beberapa dibantu ai buat syntaksis sama structuring sih... <br><br>
            okeyy, thanks buat kunjungan nya wkwkw
        </p>
    </div>
</div>
@endsection