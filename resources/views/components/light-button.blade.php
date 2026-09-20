<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-2.5 bg-[#0F2038] border border-[#1E3A64] rounded-xl font-[\'Barlow_Condensed\'] font-bold text-xs text-gray-300 uppercase tracking-widest hover:bg-[#152B4B] hover:text-white hover:border-[#2A5086] focus:outline-none focus:ring-2 focus:ring-[#1E3A64] transition ease-in-out duration-150 cursor-pointer shadow-sm']) }}>
    {{ $slot }}
</button>
