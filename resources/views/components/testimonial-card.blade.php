@props(['testimonial'])

<x-card variant="glass" class="p-6 relative">
    <div class="absolute top-4 left-4 text-accent text-4xl font-serif opacity-20">"
    </div>
    
    <div class="relative z-10">
        <div class="flex mb-3">
            @for($i = 0; $i < ($testimonial['rating'] ?? 5); $i++)
                <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20">
                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                </svg>
            @endfor
        </div>
        
        <p class="text-gray-700 dark:text-gray-300 mb-4 italic">"{{ $testimonial['quote'] }}"</p>
        
        <div class="flex items-center">
            <img src="{{ $testimonial['avatar'] ?? 'https://via.placeholder.com/50x50' }}" alt="{{ $testimonial['name'] }}" class="w-12 h-12 rounded-full object-cover mr-4">
            
            <div>
                <h4 class="font-semibold text-gray-800 dark:text-white">{{ $testimonial['name'] }}</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">{{ $testimonial['title'] }}</p>
                <p class="text-xs text-accent mt-1">{{ $testimonial['company'] }}</p>
            </div>
        </div>
    </div>
</x-card>