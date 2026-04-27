<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeamMember; // Model import karna lazmi hai

class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        TeamMember::create([
            'name' => 'Shahzaib Ansar',
            'designation' => 'Chief Executive Officer',
            'description' => 'As CEO of Zippy Ecom Solutions, I set the vision and lead our team toward innovative digital solutions.',
            'image' => 'div (1).png', // Filename jo Assets folder mein hai
            'linkedin_url' => 'https://linkedin.com/in/shahzaib',
            'twitter_url' => 'https://twitter.com/shahzaib',
            'instagram_url' => 'https://instagram.com/shahzaib',
        ]);

        TeamMember::create([
            'name' => 'John Doe',
            'designation' => 'Lead Developer',
            'description' => 'Expert in Laravel and web architecture, building scalable applications for global clients.',
            'image' => 'div (1).png',
            'linkedin_url' => 'https://linkedin.com/in/johndoe',
            'twitter_url' => null,
            'instagram_url' => null,
        ]);

          TeamMember::create([
            'name' => 'Zeenat',
            'designation' => 'Laraval Developer',
            'description' => 'Expert in Laravel and web architecture, building scalable applications for global clients.',
            'image' => 'div (1).png',
            'linkedin_url' => 'https://linkedin.com/in/johndoe',
            'twitter_url' => null,
            'instagram_url' => null,
        ]);
    }
}