@props(['variant' => 'primary', 'size' => 'medium'])

@php
    $baseClasses = 'inline-flex items-center justify-center font-medium rounded-md transition-all duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-accent';
    
    $variantClasses = [
        'primary' => 'bg-accent text-white hover:bg-opacity-90 border border-transparent',
        'secondary' => 'bg-transparent text-secondary border border-gray-300 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800',
        'outline' => 'bg-transparent text-accent border border-accent hover:bg-accent hover:text-white',
        'ghost' => 'bg-transparent text-secondary hover:bg-gray-100 dark:hover:bg-gray-800',
        'dark' => 'bg-secondary text-white hover:bg-opacity-90',
    ];
    
    $sizeClasses = [
        'small' => 'px-3 py-1.5 text-sm',
        'medium' => 'px-4 py-2 text-base',
        'large' => 'px-6 py-3 text-lg',
    ];
@endphp

<button {{ $attributes->merge(['class' => $baseClasses . ' ' . ($variantClasses[$variant] ?? $variantClasses['primary']) . ' ' . ($sizeClasses[$size] ?? $sizeClasses['medium'])]) }}>
    {{ $slot }}
</button>