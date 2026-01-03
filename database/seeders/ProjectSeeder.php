<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'title' => 'E-commerce Fashion Platform',
            'description' => 'A complete e-commerce solution for a luxury fashion brand with custom product builder, virtual try-on, and seamless checkout experience.',
            'image' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
            'category' => 'E-commerce',
            'technologies' => ['Laravel', 'Vue.js', 'Tailwind CSS', 'Stripe'],
            'date' => '2023',
            'client' => 'Luxury Threads',
            'url' => '#',
            'is_featured' => true,
        ]);

        Project::create([
            'title' => 'Corporate Website Redesign',
            'description' => 'Modern corporate website with custom CMS, interactive elements, and advanced analytics dashboard for a Fortune 500 company.',
            'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
            'category' => 'Web Design',
            'technologies' => ['Laravel', 'Alpine.js', 'Livewire', 'Inertia'],
            'date' => '2023',
            'client' => 'Global Solutions Inc.',
            'url' => '#',
            'is_featured' => false,
        ]);

        Project::create([
            'title' => 'Mobile App Dashboard',
            'description' => 'Responsive dashboard for mobile app analytics, user management, and real-time reporting with custom data visualization.',
            'image' => 'https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
            'category' => 'Mobile Apps',
            'technologies' => ['React Native', 'Node.js', 'MongoDB', 'D3.js'],
            'date' => '2022',
            'client' => 'AppMetrics',
            'url' => '#',
            'is_featured' => false,
        ]);

        Project::create([
            'title' => 'Healthcare Portal',
            'description' => 'Secure patient portal with appointment scheduling, telemedicine integration, and HIPAA-compliant data management.',
            'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
            'category' => 'Web Development',
            'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'AWS'],
            'date' => '2023',
            'client' => 'MediCare Systems',
            'url' => '#',
            'is_featured' => false,
        ]);

        Project::create([
            'title' => 'Educational Platform',
            'description' => 'Online learning platform with course management, video streaming, and interactive quizzes for a leading university.',
            'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
            'category' => 'Web Development',
            'technologies' => ['Laravel', 'React', 'PostgreSQL', 'Redis'],
            'date' => '2022',
            'client' => 'Harvard University',
            'url' => '#',
            'is_featured' => false,
        ]);

        Project::create([
            'title' => 'Restaurant Booking System',
            'description' => 'Complete reservation and table management system with online ordering, payment processing, and customer loyalty program.',
            'image' => 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
            'category' => 'E-commerce',
            'technologies' => ['Laravel', 'Livewire', 'Stripe', 'Google Maps API'],
            'date' => '2023',
            'client' => 'Gourmet Dining Group',
            'url' => '#',
            'is_featured' => false,
        ]);
    }
}