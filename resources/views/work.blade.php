@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 w-full items-center z-10">
    <div class="lg:col-span-7 flex flex-col items-start">
        <div class="flex items-center gap-2 text-xs tracking-widest font-bold text-slate-500 uppercase mb-4 md:mb-6">
            <span class="w-6 h-[2px] bg-slate-400"></span>
            <span>Services & Portfolio</span>
        </div>

        <h1 class="dark:text-white text-3xl md:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight mb-4">
            Jadilah <span class="text-[#ff2b56]">problem solver</span>, bukan programmer.
        </h1>

        <p class="text-xs md:text-sm text-slate-500 dark:text-slate-400 leading-relaxed mb-6 max-w-lg">
            From clean static portfolios to lightweight web applications. I turn design concepts into clean, functional code.
        </p>

        <div class="w-full max-w-lg divide-y divide-slate-200 dark:divide-slate-800 border-y border-slate-200 dark:border-slate-800 mb-6 md:mb-8">
            @foreach($projects as $slug => $item)
                <a href="{{ url()->current() }}?selected={{ $slug }}" 
                   class="group py-3.5 flex items-start justify-between transition-all">
                    <div class="flex items-start gap-4">
                        <span class="text-xs font-mono font-bold transition-colors {{ $selectedSlug === $slug ? 'text-[#ff2b56]' : 'text-slate-400 group-hover:text-slate-700 dark:group-hover:text-slate-300' }}">
                            0{{ $item['num'] }}
                        </span>
                        <div>
                            <h4 class="text-xs font-bold uppercase tracking-wider transition-colors {{ $selectedSlug === $slug ? 'text-[#ff2b56]' : 'text-slate-800 dark:text-slate-200 group-hover:text-[#ff2b56]' }}">
                                {{ $item['title'] }}
                            </h4>
                            <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5">
                                {{ $item['short_desc'] }}
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <a href="https://github.com/azka-style-css?tab=repositories" target="_blank" rel="noopener noreferrer" class="bg-[#ff2b56] hover:bg-[#e02047] text-white text-xs font-bold tracking-widest px-8 py-3 shadow-md transition">
            View Repositories
        </a>
    </div>

    <div class="lg:col-span-5 relative flex flex-col justify-center">
        <div class="absolute inset-0 -z-10 bg-slate-300/30 dark:bg-slate-700/20 rounded-full blur-3xl scale-90"></div>

        <div class="bg-white dark:bg-slate-800 p-6 rounded-2xl border border-slate-200 dark:border-slate-700 shadow-xl shadow-slate-950/20">
            <div class="w-full h-36 bg-slate-100 dark:bg-slate-900 rounded-xl mb-4 flex items-center justify-center text-slate-400 text-xs font-bold uppercase tracking-widest border border-slate-200/60 dark:border-slate-700">
                {{ $activeProject['preview_label'] }}
            </div>
            <span class="text-[10px] font-bold text-[#ff2b56] uppercase tracking-widest">Featured Project</span>
            <h3 class="text-base font-bold text-slate-900 dark:text-white mt-1">{{ $activeProject['featured_title'] }}</h3>
            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1 mb-5 leading-relaxed">{{ $activeProject['featured_desc'] }}</p>
            <a href="{{ $activeProject['link'] }}" target="_blank" rel="noopener noreferrer" class="text-xs font-bold text-slate-900 dark:text-white hover:text-[#ff2b56] dark:hover:text-[#ff2b56] inline-flex items-center gap-1 transition">
                <span>Explore Project Now</span>
                <span>&rarr;</span>
            </a>
        </div>
    </div>
</div>
@endsection