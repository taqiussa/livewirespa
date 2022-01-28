@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-teal-400 text-base font-medium text-teal-200 bg-teal-500 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out hover:text-teal-700 hover:border-teal-700'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-teal-700 hover:text-teal-200 hover:bg-teal-500 hover:border-teal-400 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
