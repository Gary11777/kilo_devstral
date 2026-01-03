@props(['project'])

<x-card variant="default" hoverEffect="true" class="overflow-hidden group">
    <div class="relative aspect-video overflow-hidden">
        <img src="{{ $project['image'] ?? 'https://via.placeholder.com/600x400' }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
        
        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        
        <div class="absolute bottom-4 left-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
            <h3 class="text-white font-semibold text-lg mb-2">{{ $project['title'] }}</h3>
            <p class="text-white/80 text-sm mb-3">{{ Str::limit($project['description'], 100) }}</p>
            <div class="flex flex-wrap gap-2">
                @foreach($project['technologies'] ?? [] as $tech)
                    <span class="px-2 py-1 bg-accent/20 text-accent text-xs rounded-full">{{ $tech }}</span>
                @endforeach
            </div>
        </div>
    </div>
    
    <div class="p-4">
        <div class="flex justify-between items-start mb-2">
            <h4 class="font-medium text-gray-800 dark:text-white">{{ $project['title'] }}</h4>
            <span class="text-xs px-2 py-1 bg-peach text-orange-800 rounded-full">{{ $project['category'] ?? 'Web Design' }}</span>
        </div>
        <p class="text-gray-600 dark:text-gray-300 text-sm mb-3">{{ Str::limit($project['description'], 150) }}</p>
        
        <div class="flex justify-between items-center">
            <x-button variant="outline" size="small" class="group-hover:bg-accent group-hover:text-white transition-colors">
                View Project
            </x-button>
            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $project['date'] ?? '2023' }}</span>
        </div>
    </div>
</x-card>