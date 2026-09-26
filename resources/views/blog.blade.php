@extends('layouts.app')

@section('content')
    <div class="lg:col-span-7 flex flex-col items-start z-10 pr-0 lg:pr-8">
        <div class="flex items-center gap-2 text-xs tracking-widest font-bold text-slate-500 uppercase mb-6">
            <span class="w-6 h-[2px] bg-slate-400"></span>
            <span>Literature & Notes</span>
        </div>

        <h1 class="dark:text-white text-3xl md:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight mb-4">
            Pemikiranku melalui <span class="text-[#ff2b56]">Essay</span> & Jurnal.
        </h1>

        <p class="text-xs md:text-sm text-slate-500 dark:text-slate-400 leading-relaxed mb-8 max-w-lg">
            untuk sementara page blog ini masih kosong, karena jurnal dan essai sedang di-rekap dan digitalisasi. tq
        </p>

        <div class="w-full max-w-lg divide-y divide-slate-200 dark:divide-slate-800 border-y border-slate-200 dark:border-slate-800 mb-8">
            @foreach($articles as $slug => $article)
                <a href="{{ url()->current() }}?selected={{ $slug }}" 
                   class="group py-4 flex items-center justify-between transition-all duration-200">
                    <div class="flex items-center gap-3">
                        <span class="w-1.5 h-1.5 rounded-full {{ $selectedSlug === $slug ? 'bg-[#ff2b56]' : 'bg-transparent group-hover:bg-slate-400' }} transition-colors"></span>
                        <h2 class="text-sm font-semibold transition-colors {{ $selectedSlug === $slug ? 'text-[#ff2b56]' : 'text-slate-800 dark:text-slate-200 group-hover:text-[#ff2b56]' }}">
                            {{ $article['title'] }}
                        </h2>
                    </div>
                    <span class="text-[11px] font-medium text-slate-400 group-hover:text-slate-600 dark:group-hover:text-slate-300 transition-colors shrink-0 ml-4">
                        {{ $article['read_time'] }}
                    </span>
                </a>
            @endforeach
        </div>

        <a href="#" class="inline-flex items-center gap-2 text-xs font-bold text-slate-900 dark:text-white hover:text-[#ff2b56] dark:hover:text-[#ff2b56] tracking-widest uppercase transition group">
            <span>Browse All Posts</span>
            <span>&rarr;</span>
        </a>
    </div>

    <div class="lg:col-span-5 relative flex flex-col justify-center pr-12 lg:pr-16 mt-10 lg:mt-0 ml-auto">
        <div class="absolute inset-0 -z-10 bg-slate-300/30 dark:bg-slate-700/20 rounded-full blur-3xl scale-90"></div>

        <div class="bg-white p-7 rounded-2xl border border-slate-200/80 shadow-xl shadow-slate-950/20">
            <div class="flex items-center justify-between mb-4">
                <span class="text-[10px] font-bold text-[#ff2b56] uppercase tracking-widest">Active Article</span>
                <span class="text-[10px] text-slate-400 font-medium">{{ $activeArticle['date'] }}</span>
            </div>
            
            <h3 class="text-xl font-bold text-slate-900 leading-snug mb-3">
                {{ $activeArticle['title'] }}
            </h3>
            
            <p class="text-xs text-slate-500 leading-relaxed mb-6">
                {{ $activeArticle['summary'] }}
            </p>
            
            <a href="#" class="inline-block bg-[#ff2b56] hover:bg-[#e02047] text-white text-xs font-bold px-6 py-2.5 shadow-md hover:shadow-lg transition">
                Read Article
            </a>
        </div>

    </div>
@endsection