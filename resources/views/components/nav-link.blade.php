@props(['active'])

@php
$baseClasses = 'inline-flex items-center px-3 py-2 text-sm font-medium rounded-md transition duration-200 ease-in-out';
$activeClasses = 'bg-indigo-100 text-indigo-700 border-b-2 border-indigo-500';
$inactiveClasses = 'text-gray-500 hover:text-gray-700 hover:bg-gray-50 hover:border-b-2 hover:border-gray-300';

$classes = ($active ?? false) 
    ? "$baseClasses $activeClasses" 
    : "$baseClasses $inactiveClasses";
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
