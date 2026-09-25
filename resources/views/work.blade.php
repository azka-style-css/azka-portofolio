@extends('layouts.app')

@section('content')
    <div class="lg:col-span-7 flex flex-col items-start z-10 pr-0 lg:pr-6">
        <div class="flex items-center gap-2 text-xs tracking-widest font-bold text-slate-500 uppercase mb-6">
            <span class="w-6 h-[2px] bg-slate-400"></span>
            <span>Services & Portfolio</span>
        </div>

        <h1 class="dark:text-white text-3xl md:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight mb-4">
            Solutions I <span class="text-[#ff2b56]">Provide</span>.
        </h1>

        <p class="text-xs md:text-sm text-slate-500 leading-relaxed mb-6">
            From clean static portfolios to lightweight web applications. I turn design concepts into clean, functional code.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 w-full mb-8">
            @foreach($projects as $slug => $item)
                <a href="{{ url()->current() }}?selected={{ $slug }}" 
                   class="p-4 rounded-xl border transition-all duration-200 block 
                          {{ $selectedSlug === $slug 
                             ? 'bg-white border-[#ff2b56] shadow-sm' 
                             : 'bg-white/60 border-slate-200 hover:border-slate-400' }}">
                    <h4 class="text-xs font-bold uppercase tracking-wider mb-1 {{ $selectedSlug === $slug ? 'text-[#ff2b56]' : 'text-slate-800' }}">
                        {{ $item['num'] }}. {{ $item['title'] }}
                    </h4>
                    <p class="text-[11px] text-slate-500">
                        {{ $item['short_desc'] }}
                    </p>
                </a>
            @endforeach
        </div>

        <a href="https://github.com/azka-style-css?tab=repositories" target="_blank" rel="noopener noreferrer" class="bg-[#ff2b56] hover:bg-[#e02047] text-white text-xs font-bold tracking-widest px-10 py-3 shadow-md transition">
            View Repositories
        </a>
    </div>

    <div class="lg:col-span-5 relative flex flex-col justify-center">
        <div class="absolute inset-0 -z-10 bg-slate-300/40 rounded-full blur-3xl scale-90"></div>

        <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-md">
            <div class="w-full h-40 bg-slate-200 rounded-lg mb-4 flex items-center justify-center text-slate-400 text-xs font-bold uppercase tracking-widest">
                {{ $activeProject['preview_label'] }}
            </div>
            <span class="text-[10px] font-bold text-[#ff2b56] uppercase tracking-widest">Featured Project</span>
            <h3 class="text-base font-bold text-slate-800 mt-1">{{ $activeProject['featured_title'] }}</h3>
            <p class="text-xs text-slate-500 mt-1 mb-4">{{ $activeProject['featured_desc'] }}</p>
            <a href="{{ $activeProject['link'] }}" target="_blank" rel="noopener noreferrer" class="text-xs font-bold text-slate-800 hover:text-[#ff2b56] flex items-center gap-1 transition">
                Explore Project Now &rarr;
            </a>
        </div>
    </div>

    <div class="hidden xl:flex absolute right-0 bottom-4 items-center gap-3 text-[10px] font-bold tracking-widest text-slate-400 uppercase rotate-90 origin-right">
        <span>Selected Works</span>
        <span class="w-8 h-[1px] bg-slate-400"></span>
    </div>
@endsection
