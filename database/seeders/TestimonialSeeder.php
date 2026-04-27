<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'client_name' => 'Ahmed Khan',
                'client_role' => 'CEO, TechCorp',
                'message' => 'Zippy provided us with an amazing AI infrastructure. Their team is highly professional!',
                'rating' => 5,
                'is_active' => true,
                'order' => 1,
            ],
            [
                'client_name' => 'Sarah Williams',
                'client_role' => 'Marketing Director',
                'message' => 'The web development services exceeded our expectations. Highly recommended!',
                'rating' => 5,
                'is_active' => true,
                'client_image' => null,
                'order' => 2,
            ],
            [
                'client_name' => 'John Doe',
                'client_role' => 'Freelancer',
                'message' => 'Great experience working with them on our data pipeline projects.',
                'rating' => 4,
                'is_active' => true,
                'order' => 3,
            ],
        ];

        foreach ($testimonials as $data) {
            Testimonial::create($data);
        }
    }
}
