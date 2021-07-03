@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'inline-flex items-center px-1 pt-1 border-b-4 border-gray-800 text-sm font-medium leading-5 text-gray-600 focus:outline-none focus:border-gray-700 transition'
                : 'inline-flex items-center px-1 pt-1 border-b-4 border-transparent hover:border-gray-800 text-sm font-medium leading-5 text-gray-600 focus:outline-none focus:border-gray-700 transition';
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
