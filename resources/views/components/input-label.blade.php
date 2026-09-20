@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-bold text-xs uppercase tracking-wider text-gray-300 mb-1 font-[\'Barlow_Condensed\']']) }}>
    {{ $value ?? $slot }}
</label>
