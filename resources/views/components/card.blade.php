@props(['variant' => 'default', 'hoverEffect' => true])

@php
    $baseClasses = 'rounded-lg shadow-sm overflow-hidden transition-all duration-300';
    
    $variantClasses = [
        'default' => 'bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700',
        'featured' => 'bg-white dark:bg-gray-800 border-2 border-accent',
        'dark' => 'bg-secondary text-white',
        'glass' => 'bg-white/10 backdrop-blur-sm border border-white/20',
    ];
    
    $hoverClasses = $hoverEffect ? 'hover:shadow-md hover:transform hover:-translate-y-1' : '';
@endphp

<div {{ $attributes->merge(['class' => $baseClasses . ' ' . ($variantClasses[$variant] ?? $variantClasses['default']) . ' ' . $hoverClasses]) }}>
    {{ $slot }}
</div>