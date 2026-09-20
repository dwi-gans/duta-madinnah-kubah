<x-app-layout>
    <div class="min-h-screen bg-[#050B14] text-[#F4F7FB] relative overflow-x-hidden">
        {{-- Islamic Geometric Pattern Watermark --}}
        <div class="pointer-events-none absolute inset-0 opacity-[0.035] bg-[radial-gradient(#C09A3E_1px,transparent_1px)] [background-size:24px_24px]"></div>

        <x-navbar :is-fixed="true">
            <x-slot name="navlinks">
                <li>
                    <x-navbar.nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        <svg class="w-4 h-4" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Dashboard
                    </x-navbar.nav-link>
                </li>
                <li>
                    <x-navbar.nav-link :href="route('information')" :active="request()->routeIs('information')">
                        <svg class="w-4 h-4" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Informasi & Promo
                    </x-navbar.nav-link>
                </li>
                <li>
                    <x-navbar.nav-link :href="route('portfolio')" :active="request()->routeIs('portfolio')">
                        <svg class="w-4 h-4" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2M5 21h2m10 0h-4m-6 0h4m0 0V13a1 1 0 011-1h0a1 1 0 011 1v8m-2-8h.01" />
                        </svg>
                        Portofolio
                    </x-navbar.nav-link>
                </li>
                <li class="md:ml-2 md:pl-3 md:border-l md:border-[#1E3A64]">
                    <a href="{{ route('home') }}" target="_blank"
                        class="flex items-center gap-2 px-3.5 py-2 md:px-4 rounded-xl text-sm font-bold uppercase tracking-wider font-['Barlow_Condensed'] text-[#8DA8CA] hover:bg-[#0F2038] hover:text-[#D9B35A] transition duration-150 ease-in-out">
                        <svg class="w-4 h-4" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                        Lihat Beranda
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); this.closest('form').submit();"
                            class="flex items-center gap-2 px-3.5 py-2 md:px-4 rounded-xl text-sm font-bold uppercase tracking-wider font-['Barlow_Condensed'] text-red-400 hover:bg-red-950/40 hover:text-red-300 transition duration-150 ease-in-out cursor-pointer">
                            <svg class="w-4 h-4" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            Log Out
                        </a>
                    </form>
                </li>
            </x-slot>
        </x-navbar>

        @isset($header)
            <header class="bg-[#0A1628] border-b border-[#1E3A64] shadow-md relative">
                <div class="max-w-7xl mx-auto py-5 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Alert Pop-up Notification -->
        @if(session('success'))
        <div x-data="{ show: true }" 
             x-show="show" 
             x-init="setTimeout(() => show = false, 4000)"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 transform translate-y-2"
             x-transition:enter-end="opacity-100 transform translate-y-0"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             style="position: fixed; top: 5rem; right: 1rem; z-index: 9999;"
             class="max-w-sm">
            <div class="bg-[#104A3C] text-white border border-[#26826B] p-4 rounded-xl shadow-2xl flex items-center gap-3">
                <svg class="h-6 w-6 text-[#8CE0C0] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="font-medium text-sm">{{ session('success') }}</span>
                <button @click="show = false" class="ml-auto p-1.5 rounded-lg hover:bg-[#1B6552] transition">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
        @endif

        @if(session('error'))
        <div x-data="{ show: true }" 
             x-show="show" 
             x-init="setTimeout(() => show = false, 4000)"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 transform translate-y-2"
             x-transition:enter-end="opacity-100 transform translate-y-0"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             style="position: fixed; top: 5rem; right: 1rem; z-index: 9999;"
             class="max-w-sm">
            <div class="bg-[#7F1D1D] text-white border border-red-700 p-4 rounded-xl shadow-2xl flex items-center gap-3">
                <svg class="h-6 w-6 text-red-300 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="font-medium text-sm">{{ session('error') }}</span>
                <button @click="show = false" class="ml-auto p-1.5 rounded-lg hover:bg-red-800 transition">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
        @endif

        <main class="relative z-10 pb-16">
            {{ $slot }}
        </main>

        {{-- Global Image Cropper Modal untuk Upload Card & Banner --}}
        <x-image-cropper-modal />
    </div>
</x-app-layout>