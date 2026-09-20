@props(['hasError' => false, 'disabled' => false, 'rows' => 4])

<textarea @disabled($disabled) rows="{{ $rows }}"
    {{ $attributes->class(['bg-[#050B14] text-white border p-2.5 focus:outline-none focus:border-[#C09A3E] focus:ring-1 focus:ring-[#C09A3E] rounded-xl text-sm w-full resize-none transition-colors', 'border-[#1E3A64] shadow-inner' => !$hasError, 'border-red-600 focus:border-red-500 focus:ring-red-500' => $hasError])->merge() }}>{{ $slot }}</textarea>
