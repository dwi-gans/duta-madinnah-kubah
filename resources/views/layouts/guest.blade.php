<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 px-4 relative overflow-hidden bg-[#050B14]">
        <!-- decorative deep navy & brass atmospheric glow -->
        <div class="pointer-events-none absolute -top-24 -left-24 w-80 h-80 bg-[#1E3A64]/30 rounded-full blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-24 -right-24 w-96 h-96 bg-[#C09A3E]/12 rounded-full blur-3xl"></div>
        <div class="pointer-events-none absolute inset-0 opacity-[0.035] bg-[radial-gradient(#C09A3E_1px,transparent_1px)] [background-size:24px_24px]"></div>

        <div class="relative z-10 flex flex-col items-center mb-6">
            <a href="/" class="flex flex-col items-center gap-3 group">
                <div class="w-18 h-18 bg-[#0A1628] rounded-2xl shadow-2xl flex items-center justify-center p-3 border border-[#C09A3E] transition-transform duration-300 group-hover:scale-105">
                    <img src="{{ Vite::image('logo.png') }}" class="w-12 h-12 object-contain" alt="Duta Madinna Kubah" />
                </div>
                <div class="text-center">
                    <span class="block text-2xl font-black text-white uppercase tracking-wider font-['Barlow_Condensed']">Duta Madinna Kubah</span>
                    <span class="inline-block mt-1 text-[11px] font-bold uppercase tracking-widest text-[#D9B35A] bg-[#C09A3E]/15 px-3.5 py-0.5 rounded-full border border-[#C09A3E]/30 font-['Barlow_Condensed']">Admin Control Panel</span>
                </div>
            </a>
        </div>

        <div class="relative z-10 w-full sm:max-w-md px-6 py-8 sm:px-8 bg-[#0A1628] shadow-2xl overflow-hidden rounded-2xl border border-[#1E3A64]">
            {{ $slot }}
        </div>

        <p class="relative z-10 mt-6 text-xs text-[#8DA8CA] font-['Barlow_Condensed'] uppercase tracking-wider">
            &copy; {{ date('Y') }} PT. Duta Madinna Kubah. Hak Cipta Dilindungi.
        </p>
    </div>
</x-app-layout>
