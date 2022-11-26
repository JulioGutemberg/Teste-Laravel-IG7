@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-4 border-lime-600 text-sm font-medium leading-5 text-lime-600 focus:outline-none focus:border-lime-500 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-4 border-transparent text-sm font-medium leading-5 text-amber-800 hover:text-cyan-600 hover:border-gray-300 focus:outline-none focus:text-lime-600 focus:border-lime-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
