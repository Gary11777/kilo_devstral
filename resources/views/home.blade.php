<x-layout>
    <div class="min-h-screen flex flex-col">
        <x-navigation />
        
        <main class="flex-1">
            <!-- Hero Section -->
            <section class="relative py-20 lg:py-32 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-peach/20 to-coral/10"></div>
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center lg:text-left max-w-3xl">
                        <h1 class="text-4xl lg:text-6xl font-bold text-secondary mb-6 leading-tight">
                            Crafting Digital Experiences
                        </h1>
                        <p class="text-xl lg:text-2xl text-gray-600 dark:text-gray-300 mb-8 max-w-2xl mx-auto lg:mx-0">
                            We design and develop beautiful, functional websites that help your business grow and stand out in the digital landscape.
                        </p>
                        
                        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                            <x-button variant="primary" size="large" class="group">
                                View Our Work
                                <svg class="ml-2 w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </x-button>
                            
                            <x-button variant="outline" size="large" class="group">
                                Get in Touch
                                <svg class="ml-2 w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </x-button>
                        </div>
                    </div>
                </div>
                
                <!-- Hero Image -->
                <div class="absolute right-0 bottom-0 w-full lg:w-1/2 h-64 lg:h-full">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Team collaboration" class="w-full h-full object-cover opacity-80">
                </div>
            </section>
            
            <!-- Featured Projects -->
            <section class="py-16 bg-white dark:bg-gray-900">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl lg:text-4xl font-bold text-secondary mb-4">Featured Projects</h2>
                        <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                            Explore some of our recent work that showcases our expertise in web design and development.
                        </p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @php
                            $featuredProjects = [
                                [
                                    'title' => 'E-commerce Platform',
                                    'description' => 'A modern online store with custom product builder and seamless checkout experience.',
                                    'image' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                                    'category' => 'E-commerce',
                                    'technologies' => ['Laravel', 'Vue.js', 'Tailwind CSS'],
                                    'date' => '2023'
                                ],
                                [
                                    'title' => 'Corporate Website',
                                    'description' => 'Professional corporate website with custom CMS and interactive elements.',
                                    'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                                    'category' => 'Corporate',
                                    'technologies' => ['Laravel', 'Alpine.js', 'Livewire'],
                                    'date' => '2023'
                                ],
                                [
                                    'title' => 'Mobile App Dashboard',
                                    'description' => 'Responsive dashboard for mobile app analytics and user management.',
                                    'image' => 'https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                                    'category' => 'Dashboard',
                                    'technologies' => ['React', 'Node.js', 'MongoDB'],
                                    'date' => '2022'
                                ]
                            ];
                        @endphp
                        
                        @foreach($featuredProjects as $project)
                            <x-project-card :project="$project" />
                        @endforeach
                    </div>
                    
                    <div class="text-center mt-12">
                        <x-button variant="outline" href="/portfolio">
                            View All Projects
                        </x-button>
                    </div>
                </div>
            </section>
            
            <!-- Services Section -->
            <section class="py-16 bg-gray-50 dark:bg-gray-800">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl lg:text-4xl font-bold text-secondary mb-4">Our Services</h2>
                        <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                            We provide comprehensive digital solutions tailored to your business needs.
                        </p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="text-center p-6 bg-white dark:bg-gray-700 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="mb-4">
                                <svg class="w-12 h-12 mx-auto text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-secondary mb-2">Web Design</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">Beautiful, responsive designs that captivate your audience and drive engagement.</p>
                        </div>
                        
                        <div class="text-center p-6 bg-white dark:bg-gray-700 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="mb-4">
                                <svg class="w-12 h-12 mx-auto text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-secondary mb-2">Web Development</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">Robust, scalable web applications built with modern technologies and best practices.</p>
                        </div>
                        
                        <div class="text-center p-6 bg-white dark:bg-gray-700 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="mb-4">
                                <svg class="w-12 h-12 mx-auto text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-secondary mb-2">E-commerce</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">Complete online store solutions with secure payments and inventory management.</p>
                        </div>
                        
                        <div class="text-center p-6 bg-white dark:bg-gray-700 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="mb-4">
                                <svg class="w-12 h-12 mx-auto text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-secondary mb-2">SEO Optimization</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">Improve your search engine rankings and drive organic traffic to your website.</p>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Testimonials -->
            <section class="py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl lg:text-4xl font-bold text-secondary mb-4">Client Testimonials</h2>
                        <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                            Hear what our clients have to say about working with us.
                        </p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @php
                            $testimonials = [
                                [
                                    'quote' => 'SiteStar transformed our online presence. Their attention to detail and creative approach exceeded our expectations.',
                                    'name' => 'Sarah Johnson',
                                    'title' => 'Marketing Director',
                                    'company' => 'Tech Innovations',
                                    'avatar' => 'https://randomuser.me/api/portraits/women/44.jpg',
                                    'rating' => 5
                                ],
                                [
                                    'quote' => 'The team delivered a stunning website that perfectly represents our brand. Professional, efficient, and highly skilled.',
                                    'name' => 'Michael Chen',
                                    'title' => 'CEO',
                                    'company' => 'Global Solutions',
                                    'avatar' => 'https://randomuser.me/api/portraits/men/32.jpg',
                                    'rating' => 5
                                ],
                                [
                                    'quote' => 'Our e-commerce platform has seen a 300% increase in sales since launching the new site. Exceptional work!',
                                    'name' => 'Emily Rodriguez',
                                    'title' => 'E-commerce Manager',
                                    'company' => 'Fashion Trends',
                                    'avatar' => 'https://randomuser.me/api/portraits/women/68.jpg',
                                    'rating' => 5
                                ]
                            ];
                        @endphp
                        
                        @foreach($testimonials as $testimonial)
                            <x-testimonial-card :testimonial="$testimonial" />
                        @endforeach
                    </div>
                </div>
            </section>
            
            <!-- CTA Section -->
            <section class="py-16 bg-gradient-to-r from-amber-500 to-orange-500">
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Ready to Start Your Project?</h2>
                    <p class="text-xl text-white/90 mb-8">Let's create something amazing together.</p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <x-button variant="dark" size="large">
                            Get a Free Consultation
                        </x-button>
                        <x-button variant="ghost" size="large" class="text-white border-white hover:bg-white/10">
                            View Our Portfolio
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
                            <li><a href="/about" class="hover:text-white transition-colors">About Us</a></li>
                            <li><a href="/portfolio" class="hover:text-white transition-colors">Portfolio</a></li>
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