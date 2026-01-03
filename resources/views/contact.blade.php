<x-layout>
    <div class="min-h-screen flex flex-col">
        <x-navigation />
        
        <main class="flex-1">
            <!-- Hero Section -->
            <section class="relative py-20 lg:py-32 bg-gradient-to-br from-peach/30 to-coral/20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center max-w-4xl mx-auto">
                        <h1 class="text-4xl lg:text-5xl font-bold text-secondary mb-6">
                            Get in Touch
                        </h1>
                        <p class="text-xl text-gray-600 dark:text-gray-300 mb-8">
                            We'd love to hear from you! Whether you have a project in mind or just want to say hello, our team is ready to help.
                        </p>
                    </div>
                </div>
            </section>
            
            <!-- Contact Info & Form -->
            <section class="py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                        <!-- Contact Information -->
                        <div>
                            <h2 class="text-3xl font-bold text-secondary mb-6">Contact Information</h2>
                            <p class="text-gray-600 dark:text-gray-300 mb-8">
                                Fill out the form or use our contact details below. We typically respond within 24 hours.
                            </p>
                            
                            <div class="space-y-6">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 mr-4">
                                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-secondary mb-1">Email</h3>
                                        <a href="mailto:hello@sitestar.com" class="text-gray-600 dark:text-gray-300 hover:text-accent transition-colors">
                                            hello@sitestar.com
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 mr-4">
                                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-secondary mb-1">Phone</h3>
                                        <a href="tel:+14155551234" class="text-gray-600 dark:text-gray-300 hover:text-accent transition-colors">
                                            (415) 555-1234
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 mr-4">
                                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-secondary mb-1">Address</h3>
                                        <address class="text-gray-600 dark:text-gray-300 not-italic">
                                            123 Digital Street<br>
                                            San Francisco, CA 94102<br>
                                            United States
                                        </address>
                                    </div>
                                </div>
                                
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 mr-4">
                                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-secondary mb-1">Business Hours</h3>
                                        <p class="text-gray-600 dark:text-gray-300">
                                            Monday - Friday: 9:00 AM - 5:00 PM<br>
                                            Saturday - Sunday: Closed
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-8">
                                <h3 class="font-semibold text-secondary mb-3">Follow Us</h3>
                                <div class="flex space-x-4">
                                    <a href="#" class="text-gray-400 hover:text-accent transition-colors">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-accent transition-colors">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path><circle cx="4" cy="4" r="2"></circle></svg>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-accent transition-colors">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Contact Form -->
                        <div>
                            <h2 class="text-3xl font-bold text-secondary mb-6">Send Us a Message</h2>
                            <p class="text-gray-600 dark:text-gray-300 mb-8">
                                Fill out the form below and we'll get back to you as soon as possible.
                            </p>
                            
                            <form action="/contact" method="POST" class="space-y-6">
                                @csrf
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <x-input 
                                        name="name" 
                                        label="Your Name" 
                                        required="true"
                                        placeholder="John Doe"
                                    />
                                    
                                    <x-input 
                                        type="email" 
                                        name="email" 
                                        label="Email Address" 
                                        required="true"
                                        placeholder="john@example.com"
                                    />
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <x-input 
                                        name="phone" 
                                        label="Phone Number"
                                        placeholder="(123) 456-7890"
                                    />
                                    
                                    <x-input 
                                        name="company" 
                                        label="Company Name"
                                        placeholder="Your Company"
                                    />
                                </div>
                                
                                <x-input 
                                    name="subject" 
                                    label="Subject" 
                                    required="true"
                                    placeholder="Project Inquiry"
                                />
                                
                                <x-textarea
                                    name="message"
                                    label="Your Message"
                                    required="true"
                                    placeholder="How can we help you?"
                                    rows="5"
                                />
                                
                                <!-- Cloudflare Turnstile -->
                                <div class="cf-turnstile" data-sitekey="{{ config('services.turnstile.site_key') }}"></div>
                                @error('cf-turnstile-response')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                                
                                <!-- Honeypot field -->
                                <div class="hidden">
                                    <input type="text" name="honeypot" tabindex="-1" autocomplete="off">
                                </div>
                                
                                <div>
                                    <x-button type="submit" variant="primary" size="large" class="w-full">
                                        Send Message
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Map Section -->
            <section class="py-16 bg-gray-50 dark:bg-gray-800">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-bold text-secondary mb-4">Visit Our Office</h2>
                        <p class="text-gray-600 dark:text-gray-300">Find us at our San Francisco location</p>
                    </div>
                    
                    <div class="aspect-video bg-gray-300 dark:bg-gray-700 rounded-lg overflow-hidden">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.835434509374!2d-122.4216799241643!3d37.774929744029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085818c9bc4f3ab%3A0x4d9595b8a0f55b5b!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2sus!4v1634567890123!5m2!1sen!2sus"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            class="w-full h-full"
                        ></iframe>
                    </div>
                </div>
            </section>
            
            <!-- FAQ Section -->
            <section class="py-16">
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl lg:text-4xl font-bold text-secondary mb-4">Frequently Asked Questions</h2>
                        <p class="text-gray-600 dark:text-gray-300">Find answers to common questions about our services and process.</p>
                    </div>
                    
                    <div class="space-y-4" x-data="{ open: null }">
                        <div class="border border-gray-200 dark:border-gray-700 rounded-lg">
                            <button 
                                @click="open = open === 1 ? null : 1"
                                class="w-full flex justify-between items-center p-4 text-left font-medium text-secondary hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors"
                            >
                                <span>What services do you offer?</span>
                                <svg 
                                    class="w-5 h-5 text-gray-500 transition-transform" 
                                    :class="{ 'transform rotate-180': open === 1 }"
                                    fill="none" 
                                    stroke="currentColor" 
                                    viewBox="0 0 24 24"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            
                            <div x-show="open === 1" x-collapse class="p-4 border-t border-gray-200 dark:border-gray-700">
                                <p class="text-gray-600 dark:text-gray-300">
                                    We offer comprehensive digital services including web design, web development, e-commerce solutions, SEO optimization, digital marketing, and ongoing maintenance and support.
                                </p>
                            </div>
                        </div>
                        
                        <div class="border border-gray-200 dark:border-gray-700 rounded-lg">
                            <button 
                                @click="open = open === 2 ? null : 2"
                                class="w-full flex justify-between items-center p-4 text-left font-medium text-secondary hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors"
                            >
                                <span>How long does a typical project take?</span>
                                <svg 
                                    class="w-5 h-5 text-gray-500 transition-transform" 
                                    :class="{ 'transform rotate-180': open === 2 }"
                                    fill="none" 
                                    stroke="currentColor" 
                                    viewBox="0 0 24 24"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            
                            <div x-show="open === 2" x-collapse class="p-4 border-t border-gray-200 dark:border-gray-700">
                                <p class="text-gray-600 dark:text-gray-300">
                                    Project timelines vary depending on scope and complexity. A simple website typically takes 4-6 weeks, while more complex projects like e-commerce platforms or custom web applications can take 3-6 months.
                                </p>
                            </div>
                        </div>
                        
                        <div class="border border-gray-200 dark:border-gray-700 rounded-lg">
                            <button 
                                @click="open = open === 3 ? null : 3"
                                class="w-full flex justify-between items-center p-4 text-left font-medium text-secondary hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors"
                            >
                                <span>Do you provide ongoing support?</span>
                                <svg 
                                    class="w-5 h-5 text-gray-500 transition-transform" 
                                    :class="{ 'transform rotate-180': open === 3 }"
                                    fill="none" 
                                    stroke="currentColor" 
                                    viewBox="0 0 24 24"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            
                            <div x-show="open === 3" x-collapse class="p-4 border-t border-gray-200 dark:border-gray-700">
                                <p class="text-gray-600 dark:text-gray-300">
                                    Yes, we offer comprehensive support packages including maintenance, updates, security monitoring, performance optimization, and technical support to ensure your website continues to perform at its best.
                                </p>
                            </div>
                        </div>
                        
                        <div class="border border-gray-200 dark:border-gray-700 rounded-lg">
                            <button 
                                @click="open = open === 4 ? null : 4"
                                class="w-full flex justify-between items-center p-4 text-left font-medium text-secondary hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors"
                            >
                                <span>What technologies do you use?</span>
                                <svg 
                                    class="w-5 h-5 text-gray-500 transition-transform" 
                                    :class="{ 'transform rotate-180': open === 4 }"
                                    fill="none" 
                                    stroke="currentColor" 
                                    viewBox="0 0 24 24"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            
                            <div x-show="open === 4" x-collapse class="p-4 border-t border-gray-200 dark:border-gray-700">
                                <p class="text-gray-600 dark:text-gray-300">
                                    We work with modern technologies including Laravel, Vue.js, React, Node.js, Tailwind CSS, and various CMS platforms. We choose the best tools for each project based on your specific requirements.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- CTA Section -->
            <section class="py-16 bg-gradient-to-r from-amber-500 to-orange-500">
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Ready to Start Your Project?</h2>
                    <p class="text-xl text-white/90 mb-8">Let's discuss how we can help your business grow through exceptional digital experiences.</p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <x-button variant="dark" size="large">
                            Get a Free Consultation
                        </x-button>
                        <x-button variant="ghost" size="large" class="text-white border-white hover:bg-white/10">
                            Call Us Now
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
                            <li><a href="/portfolio" class="hover:text-white transition-colors">Portfolio</a></li>
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