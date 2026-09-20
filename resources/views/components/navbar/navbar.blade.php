@props(['isFixed' => false])

<nav {{ $attributes->class(['bg-[#050B14] border-b border-[#1E3A64] relative z-50', 'sticky top-0 left-0 right-0' => $isFixed]) }}
    x-data="{ open: false }" x-on:click.away="open = false">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-3 gap-4">
        {{-- Brand --}}
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 shrink-0 group">
            <div class="w-10 h-10 bg-[#0A1628] border border-[#C09A3E] rounded-xl flex items-center justify-center p-1.5 shadow-inner">
                <img src="{{ Vite::image('logo.png') }}" class="w-full h-full object-contain" alt="Duta Madinna Kubah Logo" />
            </div>
            <div class="leading-tight">
                <span class="block text-base font-extrabold text-white uppercase tracking-wider font-['Barlow_Condensed']">Duta Madinna Kubah</span>
                <span class="inline-block text-[10px] font-bold text-[#D9B35A] bg-[#C09A3E]/15 border border-[#C09A3E]/30 px-2.5 py-0.5 rounded-full tracking-widest uppercase mt-0.5">Admin Control Panel</span>
            </div>
        </a>

        {{-- Mobile Toggler --}}
        <button
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-gray-300 rounded-xl md:hidden bg-[#0A1628] border border-[#1E3A64] hover:border-[#C09A3E] hover:text-[#D9B35A] focus:outline-none"
            x-on:click="open = !open" aria-label="Toggle navigation">
            <svg class="h-5 w-5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
                <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        {{-- Mobile Dropdown Menu --}}
        <div class="w-full md:w-auto" x-show="open" x-collapse>
            <ul class="flex flex-col gap-1 p-3 mt-2 border border-[#1E3A64] rounded-2xl bg-[#0A1628] shadow-xl md:hidden">
                {{ $navlinks }}
            </ul>
        </div>

        {{-- Desktop Navigation --}}
        <div class="hidden md:block w-auto">
            <ul class="flex gap-1.5 items-center">
                {{ $navlinks }}
            </ul>
        </div>
    </div>
    <div class="h-[1px] w-full bg-gradient-to-r from-transparent via-[#C09A3E]/50 to-transparent"></div>
</nav>
