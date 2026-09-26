@extends ('layouts.app')

@section('content')
    <div class="lg:col-span-7 flex flex-col justify-center items-start z-10 pb-12">
        <div class="flex items-center gap-2 text-xs tracking-widest font-bold text-slate-500 uppercase mb-6">
            <span class="w-6 h-[2px] bg-slate-400"></span>
            <span>Hello</span>
        </div>

        <h1 class="dark:text-white text-4xl md:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight mb-4">
            I'm <span class="text-[#ff2b56]">Azka</span> CSS
        </h1>

        <p class="text-xs md:text-sm text-slate-500 max-w-md leading-relaxed mb-10">
            Good outcomes are rarely accidental—they come from patience and iteration. I approach every project with attention to detail, constantly refining the process to deliver thoughtful and reliable work.
        </p>

        <a href="/about" class="bg-[#ff2b56] hover:bg-[#e02047] text-white text-xs font-bold tracking-widest px-10 py-2 shadow-md transition">
            More About Me
        </a>
    </div>

    <div class="lg:col-span-5 flex items-end justify-center lg:justify-end relative self-stretch ml-auto">
        <img 
            src="{{ asset('images/hero-statue.png') }}" 
            alt="hero-statue" 
            class="fixed bottom-0 right-[15%] xl:right-[20%] h-[70vh] w-auto object-contain object-bottom z-0 pointer-events-none mr-24"
        >
        
    </div>
@endsection