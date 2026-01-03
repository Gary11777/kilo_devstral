<nav x-data="{ open: false }" class="bg-primary/90 backdrop-blur-sm shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="/" class="flex-shrink-0 flex items-center">
                    <span class="text-xl font-semibold text-secondary">SiteStar</span>
                    <span class="ml-2 w-2 h-2 bg-accent rounded-full"></span>
                </a>
                
                <div class="hidden md:ml-10 md:flex md:space-x-8">
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                    <x-nav-link href="/portfolio" :active="request()->is('portfolio')">Portfolio</x-nav-link>
                    <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                </div>
            </div>
            
            <div class="hidden md:flex items-center space-x-4">
                <x-button variant="secondary" class="hidden lg:inline-flex">
                    Get in Touch
                </x-button>
                
                <div class="flex items-center">
                    <button class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800">
                        <svg class="h-5 w-5 text-gray-600 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                    <button class="ml-2 p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800">
                        <svg class="h-5 w-5 text-gray-600 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <div class="-mr-2 flex items-center md:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-accent">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" x-show="!open" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6" x-show="open" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <div x-show="open" x-transition class="md:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-nav-link href="/" :active="request()->is('/')" class="block pl-3 pr-4 py-2">Home</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')" class="block pl-3 pr-4 py-2">About</x-nav-link>
            <x-nav-link href="/portfolio" :active="request()->is('portfolio')" class="block pl-3 pr-4 py-2">Portfolio</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')" class="block pl-3 pr-4 py-2">Contact</x-nav-link>
        </div>
        <div class="pt-4 pb-3 border-t border-gray-200 dark:border-gray-700">
            <div class="px-4">
                <x-button variant="primary" class="w-full">Get in Touch</x-button>
            </div>
        </div>
    </div>
</nav>