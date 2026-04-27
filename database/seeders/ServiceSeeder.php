<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Detail;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{


    public function run(): void
    {
       $services = [
            [
                'title' => 'AI & Automation',
                'image' => 'Feature Card Background (23).png',
                'short_desc' => 'We design and deploy intelligent AI systems that automate workflows.',
                'tags' => ['Machine Learning', 'Process Automation', 'Predictive AI'],
                'blocks' => [
                    [
                        'type' => 'section_split',
                        'title' => 'Enterprise AI Transformation at Scale',
                        'description' => 'We deliver comprehensive AI solutions that revolutionize how enterprises operate.',
                        'list_items' => [
                            'Generative AI development',
                            'AI automation solutions',
                            'Enterprise AI architecture',
                            'Scalable AI infrastructure'
                        ],
                        'image' => 'img (4).png' // Right side image
                    ],
                    [
                        'type' => 'section_grid',
                        'title' => 'Driving AI-Catalyzed Enterprise Operation on the Go',
                        'center_image' => 'brain-image.png', // Center main image
                        'grid_items' => [
                            [
                                'title' => 'AI Infrastructure',
                                
                                'desc' => 'Scalable cloud-native architecture for enterprise AI deployment'
                            ],
                            [
                                'title' => 'Data Pipeline',
                                
                                'desc' => 'Seamless data pipeline management and processing'
                            ],
                            [
                                'title' => 'Security & Governance',
                               
                                'desc' => 'Enterprise-grade security protocols and compliance'
                            ],
                            [
                                'title' => 'AI Deployment',
                               
                                'desc' => 'Rapid deployment with continuous monitoring'
                            ]
                        ]

                        
                    ],
                    [
                        'type' => 'full_width_banner',
                        'title' => 'Transform Your Business with AI',
                        'description' => 'Join leading enterprises leveraging our AI solutions',
                        'cta_text' => 'Get Started',
                        'cta_link' => '/contact',
                        'background_image' => 'banner-bg.jpg'
                    ]
                ]
            ],
            [
                'title' => 'SaaS & Web Development',
                'image' => 'Feature Card Background (22).png',
                'short_desc' => 'We build scalable SaaS platforms and digital products.',
                'tags' => ['Web Apps', 'Cloud Platforms', 'UI/UX Design'],
                'blocks' => [
                    [
                        'type' => 'section_split',
                        'title' => 'Modern SaaS Solutions',
                        'description' => 'Build scalable cloud applications with our expert team.',
                        'list_items' => [
                            'Multi-tenant architecture',
                            'API-first design',
                            'Real-time features'
                        ],
                        'image' => 'saas-dev.png'
                    ]
                ]
            ]
        ];

        foreach ($services as $s) {
    $slug = Str::slug($s['title']);

    // 1. Main Service: Sirf slug ki bunyaad par check karega
    foreach ($services as $s) {
    $slug = Str::slug($s['title']);

    // 1. Main Service table mein sirf basic info jayegi
    $service = Service::updateOrCreate(
        ['slug' => $slug], 
        [
            'title'      => $s['title'],
            'image'      => $s['image'],
            'short_desc' => $s['short_desc'],
            'tags'       => $s['tags'],
            // 'blocks' yahan se hata diya hai kyunki column nahi hai
        ]
    );

    // 2. Details table mein blocks jayenge
    if (isset($s['blocks'])) {
        \App\Models\Detail::updateOrCreate(
            ['service_id' => $service->id], 
            [
                'content_blocks' => $s['blocks'], 
            ]
        );
    }
    }
        }
    }
}