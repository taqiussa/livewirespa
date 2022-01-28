@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-teal-700 focus:outline-none focus:border-teal-700 transition duration-150 ease-in-out hover:text-teal-200 hover:border-teal-200'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-teal-200 hover:text-teal-700 hover:border-teal-700 focus:outline-none focus:text-teal-300 focus:border-teal-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
