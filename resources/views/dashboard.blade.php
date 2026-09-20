<x-auth-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
            <div>
                <h2 class="font-black text-2xl sm:text-3xl text-white font-['Barlow_Condensed'] uppercase tracking-wider">
                    Dashboard Kontrol
                </h2>
                <p class="text-xs font-semibold text-[#8DA8CA] tracking-wider uppercase mt-1">
                    Selamat datang kembali, <span class="text-[#D9B35A] font-bold">{{ auth()->user()->name }}</span> 👋 Pusat Manajemen Konten PT. Duta Madinna Kubah
                </p>
            </div>
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center gap-1.5 px-3.5 py-1 bg-[#104A3C]/40 border border-[#26826B] rounded-full text-[11px] font-bold uppercase tracking-widest text-[#8CE0C0]">
                    <span class="w-2 h-2 rounded-full bg-[#2ECC71] animate-pulse"></span>
                    Sistem Aktif
                </span>
            </div>
        </div>
    </x-slot>

    <div class="py-5 sm:py-8 px-3 sm:px-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-4 sm:gap-6">

            <!-- Stat Cards (Bento 2-Col on Mobile) -->
            <div class="grid grid-cols-2 gap-3 sm:gap-6">
                <a href="{{ route('portfolio') }}"
                    class="bg-[#0A1628] border border-[#1E3A64] hover:border-[#C09A3E] rounded-xl sm:rounded-2xl p-3.5 sm:p-6 flex flex-col sm:flex-row items-start sm:items-center gap-2.5 sm:gap-5 shadow-xl transition-all duration-300 hover:-translate-y-1 group">
                    <div class="w-10 h-10 sm:w-14 sm:h-14 rounded-lg sm:rounded-xl bg-[#0F2038] border border-[#1E3A64] group-hover:border-[#C09A3E] text-[#D9B35A] flex items-center justify-center shrink-0 shadow-inner transition">
                        <svg class="w-5 h-5 sm:w-7 sm:h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2M5 21h2m10 0h-4m-6 0h4m0 0V13a1 1 0 011-1h0a1 1 0 011 1v8m-2-8h.01" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] sm:text-xs font-bold uppercase tracking-wider sm:tracking-widest text-[#8DA8CA] font-['Barlow_Condensed']">Portofolio Proyek</p>
                        <p class="text-2xl sm:text-4xl font-black text-white font-['Barlow_Condensed'] tracking-wide">{{ $totalPortfolio }}</p>
                        <span class="text-[10px] sm:text-[11px] text-[#D9B35A] font-medium flex items-center gap-1 mt-0.5">Kelola &rarr;</span>
                    </div>
                </a>

                <a href="{{ route('information') }}"
                    class="bg-[#0A1628] border border-[#1E3A64] hover:border-[#26826B] rounded-xl sm:rounded-2xl p-3.5 sm:p-6 flex flex-col sm:flex-row items-start sm:items-center gap-2.5 sm:gap-5 shadow-xl transition-all duration-300 hover:-translate-y-1 group">
                    <div class="w-10 h-10 sm:w-14 sm:h-14 rounded-lg sm:rounded-xl bg-[#104A3C]/40 border border-[#26826B] group-hover:border-[#8CE0C0] text-[#8CE0C0] flex items-center justify-center shrink-0 shadow-inner transition">
                        <svg class="w-5 h-5 sm:w-7 sm:h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] sm:text-xs font-bold uppercase tracking-wider sm:tracking-widest text-[#8DA8CA] font-['Barlow_Condensed']">Informasi & Promo</p>
                        <p class="text-2xl sm:text-4xl font-black text-white font-['Barlow_Condensed'] tracking-wide">{{ $totalInformation }}</p>
                        <span class="text-[10px] sm:text-[11px] text-[#8CE0C0] font-medium flex items-center gap-1 mt-0.5">Kelola &rarr;</span>
                    </div>
                </a>
            </div>

            <!-- Quick Actions (Bento Grid on Mobile) -->
            <div class="bg-[#0A1628] border border-[#1E3A64] rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-xl relative overflow-hidden">
                <div class="flex items-center justify-between mb-3 sm:mb-4 border-b border-[#1E3A64] pb-2.5 sm:pb-3">
                    <h3 class="font-extrabold text-base sm:text-lg text-white font-['Barlow_Condensed'] uppercase tracking-wider flex items-center gap-2">
                        <i class="fa-solid fa-bolt text-[#D9B35A]"></i> Aksi Cepat Manajemen
                    </h3>
                    <span class="text-[10px] sm:text-xs font-bold uppercase tracking-widest text-[#8DA8CA] font-['Barlow_Condensed']">Shortcuts</span>
                </div>
                <div class="grid grid-cols-2 sm:flex sm:flex-wrap gap-2 sm:gap-3">
                    <a href="{{ route('portfolio') }}"
                        class="col-span-1 inline-flex items-center justify-center gap-1.5 sm:gap-2 px-3 sm:px-5 py-2 sm:py-2.5 bg-[#C09A3E] border border-[#D9B35A] rounded-lg sm:rounded-xl font-black text-[11px] sm:text-xs text-[#050B14] uppercase tracking-wider sm:tracking-widest hover:bg-[#D9B35A] transition shadow-md font-['Barlow_Condensed'] text-center">
                        <i class="fa-solid fa-plus text-[10px]"></i> Portofolio
                    </a>
                    <a href="{{ route('information') }}"
                        class="col-span-1 inline-flex items-center justify-center gap-1.5 sm:gap-2 px-3 sm:px-5 py-2 sm:py-2.5 bg-[#104A3C] border border-[#26826B] rounded-lg sm:rounded-xl font-black text-[11px] sm:text-xs text-white uppercase tracking-wider sm:tracking-widest hover:bg-[#1B6552] transition shadow-md font-['Barlow_Condensed'] text-center">
                        <i class="fa-solid fa-bullhorn text-[10px]"></i> Info & Promo
                    </a>
                    <a href="{{ route('home') }}" target="_blank"
                        class="col-span-2 sm:col-auto inline-flex items-center justify-center gap-1.5 sm:gap-2 px-3 sm:px-5 py-2 sm:py-2.5 bg-[#0F2038] border border-[#1E3A64] rounded-lg sm:rounded-xl font-black text-[11px] sm:text-xs text-[#8DA8CA] hover:text-[#D9B35A] hover:border-[#C09A3E] uppercase tracking-wider sm:tracking-widest transition shadow-md font-['Barlow_Condensed'] text-center">
                        <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i> Lihat Halaman Beranda
                    </a>
                </div>
            </div>

            <!-- Recent Data (Rounded) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6">
                <!-- Recent Portfolios -->
                <div class="bg-[#0A1628] border border-[#1E3A64] rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-xl">
                    <div class="flex items-center justify-between mb-3 sm:mb-4 border-b border-[#1E3A64] pb-2.5 sm:pb-3">
                        <h3 class="font-extrabold text-base sm:text-lg text-white font-['Barlow_Condensed'] uppercase tracking-wider flex items-center gap-2">
                            <i class="fa-solid fa-images text-[#D9B35A]"></i> Portofolio Terbaru
                        </h3>
                        <a href="{{ route('portfolio') }}" class="text-xs font-bold text-[#D9B35A] hover:underline uppercase tracking-wider font-['Barlow_Condensed']">Lihat semua &rarr;</a>
                    </div>
                    <ul class="flex flex-col divide-y divide-[#1E3A64]/60">
                        @forelse ($latestPortfolios as $item)
                            <li class="py-2.5 sm:py-3 flex items-center gap-2.5 sm:gap-3.5 hover:bg-[#0F2038]/50 px-2 rounded-lg sm:rounded-xl transition">
                                <img src='{{ $item->image_url }}' class="w-10 h-10 sm:w-12 sm:h-12 rounded-lg border border-[#1E3A64] object-cover shrink-0" alt="{{ $item->title }}">
                                <div class="min-w-0 flex-1">
                                    <p class="text-xs sm:text-sm font-bold text-white truncate">{{ $item->title }}</p>
                                    <p class="text-[11px] sm:text-xs text-[#8DA8CA] truncate mt-0.5">{{ \Illuminate\Support\Str::limit($item->description, 60) }}</p>
                                </div>
                            </li>
                        @empty
                            <li class="py-6 text-sm text-[#8DA8CA] text-center">Belum ada data portofolio.</li>
                        @endforelse
                    </ul>
                </div>

                <!-- Recent Information -->
                <div class="bg-[#0A1628] border border-[#1E3A64] rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-xl">
                    <div class="flex items-center justify-between mb-3 sm:mb-4 border-b border-[#1E3A64] pb-2.5 sm:pb-3">
                        <h3 class="font-extrabold text-base sm:text-lg text-white font-['Barlow_Condensed'] uppercase tracking-wider flex items-center gap-2">
                            <i class="fa-solid fa-newspaper text-[#8CE0C0]"></i> Informasi & Promo Terbaru
                        </h3>
                        <a href="{{ route('information') }}" class="text-xs font-bold text-[#D9B35A] hover:underline uppercase tracking-wider font-['Barlow_Condensed']">Lihat semua &rarr;</a>
                    </div>
                    <ul class="flex flex-col divide-y divide-[#1E3A64]/60">
                        @forelse ($latestInformation as $item)
                            <li class="py-2.5 sm:py-3 flex items-center gap-2.5 sm:gap-3.5 hover:bg-[#0F2038]/50 px-2 rounded-lg sm:rounded-xl transition">
                                <img src='{{ $item->image_url }}' class="w-10 h-10 sm:w-12 sm:h-12 rounded-lg border border-[#1E3A64] object-cover shrink-0" alt="{{ $item->title }}">
                                <div class="min-w-0 flex-1">
                                    <p class="text-xs sm:text-sm font-bold text-white truncate">{{ $item->title }}</p>
                                    <p class="text-[11px] sm:text-xs text-[#8DA8CA] truncate mt-0.5">{{ \Illuminate\Support\Str::limit($item->description, 60) ?: '-' }}</p>
                                </div>
                            </li>
                        @empty
                            <li class="py-6 text-sm text-[#8DA8CA] text-center">Belum ada data informasi & promo.</li>
                        @endforelse
                    </ul>
                </div>
            </div>

        </div>
    </div>
</x-auth-layout>
