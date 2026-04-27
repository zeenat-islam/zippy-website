<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
{
    $projects = [
        [
            'title' => 'MediCare App',
            'category_1' => 'Healthcare',
            'category_2' => 'Mobile App',
            'image' => 'img (5).png',
            'description' => 'AI-powered patient management system with real-time 
                                health monitoring',
            'rating' => 4.9,
            'project_url' => '#'
        ],
        [
            'title' => 'PropertyHub',
            'category_1' => 'Real Estate',
            'category_2' => 'Website',
            'image' => 'img (6).png',
            'description' => 'Smart property search platform with AI-driven 
                                recommendations',
            'rating' => 4.8,
            'project_url' => '#'
        ],
        [
            'title' => 'HealthMetrics Pro',
            'category_1' => 'Healthcare',
            'category_2' => 'Dashboard',
            'image' => 'img (7).png',
            'description' => 'Real-time stock tracking and investment management.',
            'rating' => 4.7,
            'project_url' => '#'
        ],
        
    ];

    foreach ($projects as $project) {
        \App\Models\Portfolio::create($project);
    }
}
}