@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'block pl-3 pr-4 py-2 border-l-4 border-gray-800 text-base font-medium text-gray-600 focus:outline-none focus:text-gray-800 focus:bg-gray-100 focus:border-gray-700 transition'
                : 'block pl-3 pr-4 py-2 border-l-4 border-transparent hover:border-gray-800 text-base font-medium text-gray-600 focus:outline-none focus:text-gray-800 focus:bg-gray-100 focus:border-gray-700 transition';
@endphp

@if($active)
    <div {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </div>
@else
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@endif
