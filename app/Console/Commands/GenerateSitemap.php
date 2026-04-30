<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Blog;
use App\Models\Service;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate sitemap';

    public function handle()
    {
        $sitemap = Sitemap::create()
            ->add(Url::create('/'))
            ->add(Url::create('/aboutus'))
            ->add(Url::create('/portfolio'))
            ->add(Url::create('/blogs'))
            ->add(Url::create('/contact'))
            ->add(Url::create('/team'))
            ->add(Url::create('/geographics'));

        // Sab blogs automatically
        Blog::all()->each(function ($blog) use ($sitemap) {
            $sitemap->add(Url::create('/blogs/' . $blog->slug));
        });

        // Sab services automatically
        Service::all()->each(function ($service) use ($sitemap) {
            $sitemap->add(Url::create('/servicesdetail/' . $service->slug));
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully!');
    }
}