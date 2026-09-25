@extends ('layouts.app')

@section('content')
    <div class="lg:col-span-7 flex flex-col items-start z-10">

        <div class="flex items-center gap-2 text-xs tracking-widest font-bold text-slate-500 uppercase mb-6">
                <span class="w-6 h-[2px] bg-slate-400"></span>
                <span>Welcome</span>
            </div>

            <h1 class="dark:text-white text-4xl md:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight mb-4">
                Hi, I'm <span class="text-[#ff2b56]">Azka</span> CSS
            </h1>

            <p class="text-xs md:text-sm text-slate-500 max-w-md leading-relaxed mb-10">
                Good outcomes are rarely accidental—they come from patience and iteration. I approach every project with attention to detail, constantly refining the process to deliver thoughtful and reliable work.
            </p>

            <a href="/blog" class="bg-[#ff2b56] hover:bg-[#e02047] text-white text-xs font-bold tracking-widest px-10 py-2 shadow-md transition">
                My Literature
            </a>
    </div>

    <div class="lg:col-span-5 relative flex justify-center items-end">
            <div class="absolute inset-0 -z-10 bg-slate-300/40 rounded-full blur-3xl scale-90"></div>

            <img src="" 
                 alt="Azka CSS" 
                 class="w-full max-w-sm lg:max-w-md object-cover">
        </div>


        <div class="hidden xl:flex absolute right-0 bottom-4 items-center gap-3 text-[10px] font-bold tracking-widest text-slate-400 uppercase rotate-90 origin-right">
            <span>Still Skeptism</span>
            <span class="w-8 h-[1px] bg-slate-400"></span>
        </div>
@endsection