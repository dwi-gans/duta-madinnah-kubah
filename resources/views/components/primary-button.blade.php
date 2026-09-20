<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-2.5 bg-[#C09A3E] border border-[#D9B35A] rounded-xl font-[\'Barlow_Condensed\'] font-extrabold text-xs text-[#050B14] uppercase tracking-widest hover:bg-[#D9B35A] focus:outline-none focus:ring-2 focus:ring-[#C09A3E] focus:ring-offset-2 focus:ring-offset-[#0A1628] transition ease-in-out duration-150 shadow-md cursor-pointer']) }}>
    {{ $slot }}
</button>
