@extends('layouts.app')

@section('content')
    <div class="lg:col-span-7 flex flex-col items-start z-10 pr-0 lg:pr-6">
        <div class="flex items-center gap-2 text-xs tracking-widest font-bold text-slate-500 uppercase mb-6">
            <span class="w-6 h-[2px] bg-slate-400"></span>
            <span>Literature & Notes</span>
        </div>

        <h1 class="dark:text-white text-3xl md:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight mb-4">
            Thoughts on <span class="text-[#ff2b56]">Web</span> & Code.
        </h1>

        <p class="text-xs md:text-sm text-slate-500 leading-relaxed mb-8">
            I write about minimal web architectures, utility-first CSS strategies, and practical workflows for modern developers.
        </p>

        <div class="space-y-3 w-full max-w-md mb-8">
            @foreach($articles as $slug => $article)
                <a href="{{ url()->current() }}?selected={{ $slug }}" 
                   class="flex items-center justify-between p-3 rounded-lg border transition-all duration-200 
                          {{ $selectedSlug === $slug 
                             ? 'bg-white border-[#ff2b56] shadow-sm' 
                             : 'bg-white/60 border-slate-200 hover:border-slate-400' }}">
                    <span class="text-xs font-semibold {{ $selectedSlug === $slug ? 'text-[#ff2b56]' : 'text-slate-700' }}">
                        {{ $article['title'] }}
                    </span>
                    <span class="text-[10px] font-bold text-slate-400">
                        {{ $article['read_time'] }}
                    </span>
                </a>
            @endforeach
        </div>

        <a href="#" class="bg-[#ff2b56] hover:bg-[#e02047] text-white text-xs font-bold tracking-widest px-10 py-3 shadow-md transition">
            Browse All Posts
        </a>
    </div>

    <div class="lg:col-span-5 flex items-center justify-end relative pr-12 lg:pr-16">
        
        <div class="w-full max-w-sm lg:max-w-md relative">
            <div class="absolute inset-0 -z-10 bg-slate-300/40 rounded-full blur-3xl scale-90"></div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-md">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-[10px] font-bold text-[#ff2b56] uppercase tracking-widest">Latest Article</span>
                    <span class="text-[10px] text-slate-400">{{ $activeArticle['date'] }}</span>
                </div>
                
                <h3 class="text-lg font-bold text-slate-800 leading-snug mb-2">
                    {{ $activeArticle['title'] }}
                </h3>
                
                <p class="text-xs text-slate-500 leading-relaxed mb-6">
                    {{ $activeArticle['summary'] }}
                </p>
                
                <a href="#" class="inline-block bg-slate-900 hover:bg-[#ff2b56] text-white text-xs font-bold px-6 py-2.5 rounded transition">
                    Read Article
                </a>
            </div>
        </div>

        <div class="hidden xl:flex absolute right-0 bottom-4 items-center gap-3 text-[10px] font-bold tracking-widest text-slate-400 uppercase rotate-90 origin-right">
            <span>Writings</span>
            <span class="w-8 h-[1px] bg-slate-400"></span>
        </div>

    </div>
@endsection