<x-layout>
    <div class="min-h-screen flex flex-col">
        <x-navigation />
        
        <main class="flex-1">
            <!-- Hero Section -->
            <section class="relative py-20 lg:py-32 bg-gradient-to-br from-peach/30 to-coral/20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center max-w-4xl mx-auto">
                        <h1 class="text-4xl lg:text-5xl font-bold text-secondary mb-6">
                            About SiteStar
                        </h1>
                        <p class="text-xl text-gray-600 dark:text-gray-300 mb-8">
                            We are a passionate team of designers and developers dedicated to creating exceptional digital experiences that help businesses thrive in the digital age.
                        </p>
                    </div>
                </div>
            </section>
            
            <!-- Company Story -->
            <section class="py-16 bg-white dark:bg-gray-900">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h2 class="text-3xl font-bold text-secondary mb-6">Our Story</h2>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">
                                Founded in 2015, SiteStar began as a small web design studio with a big vision: to create digital experiences that not only look beautiful but also drive real business results. Over the years, we've grown into a full-service digital agency, serving clients from startups to Fortune 500 companies.
                            </p>
                            <p class="text-gray-600 dark:text-gray-300 mb-6">
                                Our journey has been marked by innovation, collaboration, and a relentless pursuit of excellence. We believe that great design combined with robust technology can transform businesses and create meaningful connections with audiences.
                            </p>
                            
                            <div class="flex items-center space-x-8">
                                <div>
                                    <div class="text-4xl font-bold text-accent">500+</div>
                                    <div class="text-gray-600 dark:text-gray-300">Projects Completed</div>
                                </div>
                                <div>
                                    <div class="text-4xl font-bold text-accent">98%</div>
                                    <div class="text-gray-600 dark:text-gray-300">Client Satisfaction</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Our team working" class="rounded-lg shadow-lg w-full">
                            
                            <div class="absolute -bottom-4 -right-4 bg-accent text-white p-4 rounded-lg shadow-lg">
                                <div class="text-sm font-medium">Since 2015</div>
                                <div class="text-2xl font-bold">8+ Years</div>
                                <div class="text-sm">of Excellence</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Mission & Values -->
            <section class="py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                        <div class="bg-gradient-to-br from-amber-100 to-orange-100 p-8 rounded-lg">
                            <h3 class="text-2xl font-bold text-secondary mb-4">Our Mission</h3>
                            <p class="text-gray-700 mb-6">
                                To empower businesses with innovative digital solutions that drive growth, enhance user experiences, and create lasting impact in the digital landscape.
                            </p>
                            
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 mr-3">
                                        <svg class="w-6 h-6 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class="text-gray-700">Deliver exceptional quality in every project</p>
                                </div>
                                
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 mr-3">
                                        <svg class="w-6 h-6 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class="text-gray-700">Create meaningful digital experiences</p>
                                </div>
                                
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 mr-3">
                                        <svg class="w-6 h-6 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class="text-gray-700">Drive measurable business results</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-br from-peach-100 to-coral-100 p-8 rounded-lg">
                            <h3 class="text-2xl font-bold text-secondary mb-4">Our Values</h3>
                            <p class="text-gray-700 mb-6">
                                Our core values guide everything we do and define who we are as a company.
                            </p>
                            
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 mr-3">
                                        <svg class="w-6 h-6 text-coral" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class="text-gray-700 font-medium">Innovation</p>
                                </div>
                                
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 mr-3">
                                        <svg class="w-6 h-6 text-coral" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class="text-gray-700 font-medium">Collaboration</p>
                                </div>
                                
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 mr-3">
                                        <svg class="w-6 h-6 text-coral" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class="text-gray-700 font-medium">Excellence</p>
                                </div>
                                
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 mr-3">
                                        <svg class="w-6 h-6 text-coral" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class="text-gray-700 font-medium">Integrity</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Team Section -->
            <section class="py-16 bg-white dark:bg-gray-900">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl lg:text-4xl font-bold text-secondary mb-4">Meet Our Team</h2>
                        <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                            Our talented team brings together diverse skills and expertise to deliver exceptional results.
                        </p>
                    </div>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                        @php
                            $teamMembers = [
                                [
                                    'name' => 'Alex Johnson',
                                    'role' => 'Founder & CEO',
                                    'photo' => 'https://randomuser.me/api/portraits/men/32.jpg',
                                    'bio' => 'With over 15 years in digital design, Alex leads our vision and strategy.',
                                    'twitter' => 'https://twitter.com',
                                    'linkedin' => 'https://linkedin.com',
                                    'github' => 'https://github.com'
                                ],
                                [
                                    'name' => 'Sarah Williams',
                                    'role' => 'Creative Director',
                                    'photo' => 'https://randomuser.me/api/portraits/women/44.jpg',
                                    'bio' => 'Sarah brings award-winning design expertise and creative leadership to every project.',
                                    'twitter' => 'https://twitter.com',
                                    'linkedin' => 'https://linkedin.com',
                                    'github' => 'https://github.com'
                                ],
                                [
                                    'name' => 'Michael Chen',
                                    'role' => 'Lead Developer',
                                    'photo' => 'https://randomuser.me/api/portraits/men/46.jpg',
                                    'bio' => 'Full-stack developer with expertise in Laravel, Vue.js, and modern web technologies.',
                                    'twitter' => 'https://twitter.com',
                                    'linkedin' => 'https://linkedin.com',
                                    'github' => 'https://github.com'
                                ],
                                [
                                    'name' => 'Emily Rodriguez',
                                    'role' => 'UX Designer',
                                    'photo' => 'https://randomuser.me/api/portraits/women/68.jpg',
                                    'bio' => 'Passionate about creating intuitive user experiences that delight and engage.',
                                    'twitter' => 'https://twitter.com',
                                    'linkedin' => 'https://linkedin.com',
                                    'github' => 'https://github.com'
                                ]
                            ];
                        @endphp
                        
                        @foreach($teamMembers as $member)
                            <x-team-card :member="$member" />
                        @endforeach
                    </div>
                </div>
            </section>
            
            <!-- Process Section -->
            <section class="py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl lg:text-4xl font-bold text-secondary mb-4">Our Process</h2>
                        <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                            We follow a structured approach to ensure every project is delivered with excellence.
                        </p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="text-center">
                            <div class="mb-4">
                                <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-accent text-white font-bold text-xl">1</span>
                            </div>
                            <h3 class="text-xl font-semibold text-secondary mb-2">Discovery</h3>
                            <p class="text-gray-600 dark:text-gray-300">We begin by understanding your business goals, target audience, and project requirements through comprehensive research and analysis.</p>
                        </div>
                        
                        <div class="text-center">
                            <div class="mb-4">
                                <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-accent text-white font-bold text-xl">2</span>
                            </div>
                            <h3 class="text-xl font-semibold text-secondary mb-2">Strategy</h3>
                            <p class="text-gray-600 dark:text-gray-300">Based on our findings, we develop a tailored strategy and create wireframes, prototypes, and project roadmaps to guide the development process.</p>
                        </div>
                        
                        <div class="text-center">
                            <div class="mb-4">
                                <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-accent text-white font-bold text-xl">3</span>
                            </div>
                            <h3 class="text-xl font-semibold text-secondary mb-2">Design & Development</h3>
                            <p class="text-gray-600 dark:text-gray-300">Our team brings the strategy to life with pixel-perfect designs and robust development, ensuring seamless functionality and exceptional user experiences.</p>
                        </div>
                        
                        <div class="text-center">
                            <div class="mb-4">
                                <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-accent text-white font-bold text-xl">4</span>
                            </div>
                            <h3 class="text-xl font-semibold text-secondary mb-2">Launch & Support</h3>
                            <p class="text-gray-600 dark:text-gray-300">After thorough testing and quality assurance, we launch your project and provide ongoing support, maintenance, and optimization services.</p>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- CTA Section -->
            <section class="py-16 bg-gradient-to-r from-amber-500 to-orange-500">
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Ready to Work Together?</h2>
                    <p class="text-xl text-white/90 mb-8">Let's discuss how we can help your business grow through exceptional digital experiences.</p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <x-button variant="dark" size="large">
                            Get in Touch
                        </x-button>
                        <x-button variant="ghost" size="large" class="text-white border-white hover:bg-white/10">
                            View Our Work
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