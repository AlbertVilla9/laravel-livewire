@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500']) !!}>
