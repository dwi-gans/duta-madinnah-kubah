@props(['active' => false])

<a {{ $attributes->class([
        'flex items-center gap-2 px-3.5 py-2 rounded-xl text-sm font-bold uppercase tracking-wider font-[\'Barlow_Condensed\'] transition duration-150 ease-in-out md:px-4',
        'bg-[#0F2038] text-[#D9B35A] border border-[#C09A3E]/40 shadow-sm' => $active,
        'text-gray-300 hover:bg-[#0F2038]/70 hover:text-white border border-transparent' => !$active,
    ])->merge() }}
    x-on:click="open = false">
    {{ $slot }}
</a>
