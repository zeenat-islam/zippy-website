<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\TeamMember;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function home()
{
    // Yahan hum 'services' (plural) naam rakhenge kyunke ye poori list hai
    $services = \App\Models\Service::all(); 
    
    // Hero section ke liye agar single object chahiye toh:
    $service = $services->first(); 

    $team = TeamMember::all();
    $blogs = \App\Models\Blog::latest()->take(3)->get();


    //testimonial section 
     $testimonials = Testimonial::where('is_active', true)
                               ->orderBy('order')
                               ->get();
    
    // Compact mein ab 'services' (plural) aur 'service' (singular) dono bhejien
    return view('index', compact('services', 'service', 'team', 'blogs','testimonials'));
}

    public function about()
    {
        $team = TeamMember::all();
        return view('aboutus', compact('team'));
    }

    public function contact()
    {
        return view('contact');
    }

   public function blogs()
{
    $blogs = Blog::latest()->get();
    return view('blogs', compact('blogs'));
}
   public function blogDetail($slug)
{
    // Eager load detail relationship
    $blog = Blog::with('detail')->where('slug', $slug)->firstOrFail();
    
    return view('blogs-detail', compact('blog'));
}

    public function portfolio()
    {
        $projects = Portfolio::all();
        return view('portfolio', compact('projects'));
    }

    public function team()
    {
        $team = TeamMember::all();
        return view('team', compact('team'));
    }

    public function geographics()
    {
        return view('geographics');
    }

    public function servicesdetail($slug)
    {
        // 'detail' relationship ko load karna lazmi hai
    $service = Service::with('detail')->where('slug', $slug)->firstOrFail();
    
    $projects = Portfolio::all();

    return view('servicesdetail', compact('service', 'projects'));
    }
}