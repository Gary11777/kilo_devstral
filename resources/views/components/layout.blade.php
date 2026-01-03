<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>{{ $title ?? config('app.name', 'SiteStar') }}</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <!-- SiteStar Color Palette -->
        <style>
            :root {
                --color-white: #FFFFFF;
                --color-black: #000000;
                --color-dark-gray: #333333;
                --color-amber: #FFC107;
                --color-peach: #FFE0B2;
                --color-coral: #FF8A65;
            }
            
            .bg-primary { background-color: var(--color-white); }
            .bg-secondary { background-color: var(--color-dark-gray); }
            .bg-accent { background-color: var(--color-amber); }
            .bg-peach { background-color: var(--color-peach); }
            .bg-coral { background-color: var(--color-coral); }
            
            .text-primary { color: var(--color-white); }
            .text-secondary { color: var(--color-dark-gray); }
            .text-accent { color: var(--color-amber); }
            .text-peach { color: var(--color-peach); }
            .text-coral { color: var(--color-coral); }
            
            .border-accent { border-color: var(--color-amber); }
            .hover\:border-accent:hover { border-color: var(--color-amber); }
        </style>
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] font-sans">
        {{ $slot }}
    </body>
</html>