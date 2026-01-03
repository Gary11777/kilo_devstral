<x-layout>
    <div class="min-h-screen flex flex-col">
        <x-navigation />
        
        <main class="flex-1">
            <!-- Hero Section -->
            <section class="relative py-20 lg:py-32 bg-gradient-to-br from-peach/30 to-coral/20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center max-w-4xl mx-auto">
                        <h1 class="text-4xl lg:text-5xl font-bold text-secondary mb-6">
                            Our Portfolio
                        </h1>
                        <p class="text-xl text-gray-600 dark:text-gray-300 mb-8">
                            Explore our collection of digital projects that showcase our expertise in web design, development, and digital strategy.
                        </p>
                        
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <x-button variant="primary" size="large">
                                All Projects
                            </x-button>
                            <x-button variant="outline" size="large">
                                Recent Work
                            </x-button>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Filter Section -->
            <section class="py-8 bg-white dark:bg-gray-900 sticky top-16 z-40">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-wrap justify-center gap-4">
                        <button class="px-4 py-2 bg-accent text-white rounded-full text-sm font-medium hover:bg-opacity-90 transition-colors">All</button>
                        <button class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm font-medium hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors">Web Design</button>
                        <button class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm font-medium hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors">E-commerce</button>
                        <button class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm font-medium hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors">Mobile Apps</button>
                        <button class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm font-medium hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors">Branding</button>
                        <button class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm font-medium hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors">SEO</button>
                    </div>
                </div>
            </section>
            
            <!-- Projects Grid -->
            <section class="py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        
                        @foreach($projects as $project)
                            <x-project-card :project="$project" />
                        @endforeach
                    </div>
                </div>
            </section>
            
            <!-- Featured Project Showcase -->
            <section class="py-16 bg-gray-50 dark:bg-gray-800">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl lg:text-4xl font-bold text-secondary mb-4">Featured Project</h2>
                        <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                            Our most comprehensive project that demonstrates our full range of capabilities.
                        </p>
                    </div>
                    
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg overflow-hidden">
                        <div class="grid grid-cols-1 lg:grid-cols-2">
                            <div class="p-8 lg:p-12">
                                <div class="mb-4">
                                    <span class="inline-block px-3 py-1 bg-accent text-white text-sm font-medium rounded-full mb-4">Featured</span>
                                </div>
                                
                                <h3 class="text-3xl font-bold text-secondary mb-4">Complete Digital Transformation</h3>
                                <p class="text-gray-600 dark:text-gray-300 mb-6">
                                    A comprehensive digital transformation project for a multinational corporation, including website redesign, e-commerce platform, mobile app development, and digital marketing strategy.
                                </p>
                                
                                <div class="mb-6">
                                    <h4 class="font-semibold text-secondary mb-2">Key Features:</h4>
                                    <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-accent mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                            Multi-language support with 15+ languages
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-accent mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                            Advanced analytics and reporting dashboard
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-accent mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                            Custom CRM integration and automation
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-accent mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                            Mobile-responsive design with PWA capabilities
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="flex flex-wrap gap-2 mb-8">
                                    <span class="px-3 py-1 bg-gray-100 dark:bg-gray-600 text-gray-700 dark:text-gray-200 text-sm rounded-full">Laravel</span>
                                    <span class="px-3 py-1 bg-gray-100 dark:bg-gray-600 text-gray-700 dark:text-gray-200 text-sm rounded-full">Vue.js</span>
                                    <span class="px-3 py-1 bg-gray-100 dark:bg-gray-600 text-gray-700 dark:text-gray-200 text-sm rounded-full">React Native</span>
                                    <span class="px-3 py-1 bg-gray-100 dark:bg-gray-600 text-gray-700 dark:text-gray-200 text-sm rounded-full">AWS</span>
                                    <span class="px-3 py-1 bg-gray-100 dark:bg-gray-600 text-gray-700 dark:text-gray-200 text-sm rounded-full">Stripe</span>
                                </div>
                                
                                <div class="flex flex-col sm:flex-row gap-4">
                                    <x-button variant="primary" class="flex-1">
                                        View Case Study
                                    </x-button>
                                    <x-button variant="outline" class="flex-1">
                                        Visit Website
                                    </x-button>
                                </div>
                            </div>
                            
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Featured project showcase" class="w-full h-full object-cover">
                                
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                                
                                <div class="absolute bottom-6 left-6 right-6 text-white">
                                    <div class="flex justify-between items-end mb-4">
                                        <div>
                                            <p class="text-sm opacity-80 mb-1">Client</p>
                                            <p class="font-semibold">GlobalTech Solutions</p>
                                        </div>
                                        <div>
                                            <p class="text-sm opacity-80 mb-1">Year</p>
                                            <p class="font-semibold">2023</p>
                                        </div>
                                        <div>
                                            <p class="text-sm opacity-80 mb-1">Duration</p>
                                            <p class="font-semibold">6 Months</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- CTA Section -->
            <section class="py-16 bg-gradient-to-r from-amber-500 to-orange-500">
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Inspired by Our Work?</h2>
                    <p class="text-xl text-white/90 mb-8">Let's discuss how we can create something amazing for your business.</p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <x-button variant="dark" size="large">
                            Start Your Project
                        </x-button>
                        <x-button variant="ghost" size="large" class="text-white border-white hover:bg-white/10">
                            Contact Us
                        </x-button>
                    </div>
                </div>
            </section>
        </main>
        
        <!-- Footer -->
        <footer class="bg-secondary text-white py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="md:col-span-1">
                        <h3 class="text-xl font-semibold mb-4">SiteStar</h3>
                        <p class="text-gray-300 mb-4">Crafting digital experiences that inspire and engage.</p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-300 hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                            </a>
                            <a href="#" class="text-gray-300 hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path><circle cx="4" cy="4" r="2"></circle></svg>
                            </a>
                            <a href="#" class="text-gray-300 hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold mb-4">Services</h4>
                        <ul class="space-y-2 text-gray-300">
                            <li><a href="#" class="hover:text-white transition-colors">Web Design</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Web Development</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">E-commerce</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">SEO Optimization</a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold mb-4">Company</h4>
                        <ul class="space-y-2 text-gray-300">
                            <li><a href="/" class="hover:text-white transition-colors">Home</a></li>
                            <li><a href="/about" class="hover:text-white transition-colors">About</a></li>
                            <li><a href="/contact" class="hover:text-white transition-colors">Contact</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold mb-4">Contact</h4>
                        <address class="text-gray-300 not-italic">
                            <p class="mb-2">123 Digital Street</p>
                            <p class="mb-2">San Francisco, CA 94102</p>
                            <p class="mb-2">hello@sitestar.com</p>
                            <p>(415) 555-1234</p>
                        </address>
                    </div>
                </div>
                
                <div class="border-t border-gray-700 mt-12 pt-8 text-center text-gray-400">
                    <p>&copy; {{ date('Y') }} SiteStar. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
</x-layout>