@props(['value'])

<label {{ $attributes->merge(['class' => 'text-sm font-bold text-gray-700 tracking-wide']) }}>
    {{ $value ?? $slot }}
</label>
