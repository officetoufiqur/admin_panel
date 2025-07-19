{{-- @props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a> --}}

{{-- resources/views/components/nav-link.blade.php --}}
@props(['active' => false])

@php
    $linkClasses = $active
        ? 'flex items-center p-2 text-gray-900 bg-gray-100 rounded-lg group'
        : 'flex items-center p-2 text-gray-500 hover:text-gray-900 rounded-lg hover:bg-gray-100 group';

    $iconClasses = $active
        ? 'text-gray-900 text-lg'
        : 'text-gray-500 text-lg group-hover:text-gray-900';
@endphp

<a {{ $attributes->merge(['class' => $linkClasses]) }}>
    @isset($icon)
        <span class="{{ $iconClasses }} pr-2.5">
            {{ $icon }}
        </span>
    @endisset

    <span class="flex-1 whitespace-nowrap">{{ $slot }}</span>
</a>

