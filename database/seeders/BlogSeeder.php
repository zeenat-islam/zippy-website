<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;
use App\Models\BlogDetail;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Main Blog Create/Update karein
        $blog = Blog::updateOrCreate(
            ['slug' => 'trends-mobile-design-2026'],
            [
                'title' => 'Trends of Mobile Design: What\'s Next for Your Business',
                'image' => '98c10e4f1c994f7258a3aa47af2b8e84d2830924.jpg',
                'date' => 'March 12, 2026',
                'read_time' => '5 min Read',
            ]
        );

        // 2. JSON Blocks jo dynamic layout create karenge
        $blocks = [
            // Section 1: Simple Text (No Image)
            [
                'type' => 'simple-content',
                'title' => 'The Rise of Minimalistic Design',
                'hero-content' => 'The world of mobile design is evolving at an unprecedented pace. As technology advances and user expectations grow, businesses must stay informed about the latest trends to remain competitive.',
                // Neeche intro ke liye doosra paragraph
                'section1-content' => 'In this article, we explore the key trends shaping the future of mobile design and how your business can leverage these innovations to create exceptional digital experiences that captivate users and drive growth.',
               
                'content_1' => 'Minimalism has become the cornerstone of modern mobile app design. By focusing on simplicity, whitespace, and intuitive navigation, designers create interfaces that are both aesthetically pleasing and highly functional.',
                'content_2' => 'Clean layouts, bold typography, and strategic use of color help guide users through applications effortlessly. Minimalistic design not only improves user experience but also enhances performance by reducing load times.'
            ],

            // Section 2: AI Section (Text Left, Image Right)
            [
                'type' => 'text-right',
                'title' => 'Advanced User Experiences through AI',
                'content' => 'Artificial Intelligence is revolutionizing how users interact with mobile applications. From personalized content recommendations to predictive text and smart search capabilities, AI-powered features are becoming essential components of modern app design.',
                'image' => '2f91c8a91e789a5f373d0454f6fa4b782f86b57f.png'
            ],

            // Section 3: Voice Section (Image Left, Text Right)
            [
                'type' => 'image-left',
                'title' => 'Voice-Activated Interfaces',
                'content' => 'Voice technology is transforming the way users interact with mobile devices. Voice assistants like Siri, Google Assistant, and Alexa have made voice commands a natural part of daily life. Mobile applications are increasingly incorporating voice-activated features.',
                'image' => '74480a9c37ade37427aff06f28c90a3a060ac8dc.png'
            ],

            // Section 4: VR Section (Full Width Text & Image)
            [
                'type' => 'full-width-text',
                'title' => 'Virtual and Augmented Reality Experiences',
                'content' => 'Augmented Reality (AR) and Virtual Reality (VR) are no longer confined to gaming—they are transforming mobile applications across industries. From virtual try-ons in retail to immersive property tours in real estate.',
                'image' => '90820787117fb757dbc054b755c702a5bf5915e3.png'
            ],

            // Section 5: Gesture Section (Text Left, Image Right)
            [
                'type' => 'text-right',
                'title' => 'Gesture-Based Navigation',
                'content' => 'Modern mobile interfaces are moving beyond traditional buttons and menus toward gesture-based interactions. Swiping, pinching, dragging, and tapping have become intuitive ways for users to navigate applications.',
                'image' => 'eab3ca23531dc9b6bd1ae54a883e146f00ceee40.png'
            ],

            // Section 6: Second Gesture Section (Image Left, Text Right)
            [
                'type' => 'image-left',
                'title' => 'Enhanced Fluidity in UX',
                'content' => 'Gesture controls reduce screen clutter and allow for larger content areas, making interfaces feel more spacious and immersive. They also enable faster interactions, as users can perform actions with simple movements.',
                'image' => '0c902ec62ed004e2c383a1f8986a33588079d966.png'
            ]
        ];

         BlogDetail::updateOrCreate(
            ['blog_id' => $blog->id],
            ['content_blocks' => $blocks]
        );


        $blog2 = Blog::updateOrCreate(
            ['slug' => 'web-development-trends-2026'], // Unique Slug zaroori hai
            [
                'title' => 'The Future of Web Development: 2026 and Beyond',
                'image' => 'web-dev-main.jpg', // Apni image ka naam yahan likhen
                'date' => 'April 16, 2026',
                'read_time' => '8 min Read',
            ]
        );

        $blocks2 = [
            [
                'type' => 'simple-content',
                'title' => 'Next-Gen Frameworks',
                'hero-content' => 'Web development is shifting towards more automated and efficient workflows.',
                'section1-content' => 'Let’s dive into how modern tools are making the web faster.',
                'content_1' => 'Frameworks like Laravel and Next.js are leading the way in performance.',
                'content_2' => 'Server-side rendering and edge computing are no longer optional.'
            ],
            [
                'type' => 'image-left',
                'title' => 'Real-time Data Processing',
                'content' => 'Users now expect real-time updates without refreshing the page. Technologies like WebSockets are becoming standard.',
                'image' => 'real-time-dev.png'
            ],
            [
                'type' => 'full-width-text',
                'title' => 'Conclusion',
                'content' => 'Staying updated with these trends is crucial for any modern web developer.',
                'image' => 'conclusion-web.png'
            ]
        ];

       

        BlogDetail::updateOrCreate(
            ['blog_id' => $blog2->id],
            ['content_blocks' => $blocks2]
        );
    }
}