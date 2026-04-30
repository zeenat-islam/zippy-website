@extends('layouts.app')
@section('title', 'blogs — Zippy Solutions')
@section('description', 'Read our latest blogs on web development, app development, and digital transformation.')


@push('styles')
<link rel="stylesheet" href="{{ asset('src/blogs.css') }}">
@endpush

@section('content')

<!-- Hero Section -->
<section class="blog-hero  relative z-0 flex flex-col 
  px-3 md:px-6 pr-14 
  md:px-12 md:pr-16 
  lg:pl-[94px] lg:pr-20 
  gap-7 md:gap-9 lg:gap-[48px] 
  justify-center min-h-screen overflow-hidden"
 >

 

 
  <!-- Top Badge Button -->
  <button class="relative hero-button flex items-center justify-center gap-2 
    text-[10px] md:text-[12px] lg:text-sm 
    cursor-pointer overflow-hidden text-[#02EEFD] self-start">
    <span class="absolute gradient-border inset-0 pointer-events-none"></span>
    DIGITAL INNOVATIONS FOR STARTUPS
  </button>

  <!-- Heading -->
  <h1 class="text-[26px] md:text-[36px] lg:text-[54px] font-[500] 
    w-[300px] md:w-[560px] lg:w-[973px] 
    leading-[1.19] tracking-[-0.03em] text-white mb-4 md:mb-0">
    AI-Driven Transformation for Your IT Ecosystem
  </h1>

  <!-- Paragraph -->
  <p class="text-[14px] md:text-[16px] lg:text-[20px] 
    tracking-[-0.012em] 
    w-[300px] md:w-[580px] lg:w-[894px] 
    leading-[1.6] text-[#FFFFFFBF]  ">
    Unlock the full potential of artificial intelligence with our enterprise-grade solutions. Transform your business  operations with cutting-edge AI technology and strategic  digital transformation.
  </p>

  <!-- Buttons -->
  <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
    <button  class="started-button2 btn-blog flex items-center justify-center gap-2">
      <a href="{{url('contact')}}">Consult AI Experts Now</a>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
        stroke-width="1.5" stroke="currentColor" class="size-5 lg:size-6">
        <path stroke-linecap="round" stroke-linejoin="round" 
          d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
      </svg>
    </button>
  </div>


</section>
<!-- Side Button -->
<div class="business-wrapper">
    <button class="business-btn">
       <a href="{{url('contact')}}"> Lets Talk Business</a>
    </button>
</div>


<section class="bg-[#E5E7EB] dark:bg-[#010F23] ">
    <div class="lg:mx-20 py-20 px-6">
<div  class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[21px] mt-10 w-full mx-auto px-6">
    @foreach($blogs as $blog)
    <article data-aos="fade-up" class="bg-white overflow-hidden flex flex-col shadow-sm rounded-t-md dark:bg-[#06254E] dark:border-none {{ $loop->index >= 3 ? 'extra-blog hidden' : '' }}">
        
    <div>
            <img src="{{ asset('Assests/images/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-[180px] object-cover">
        </div>
        <div class="px-3 pb-4 flex flex-col gap-3 mt-4">
            <div class="flex items-center gap-2">
                <span class="text-gray-400 text-[11px] dark:text-white">{{ $blog->date }}</span>
                <span class="text-gray-300 text-[11px] dark:text-white">•</span>
                <span class="text-gray-400 text-[11px] dark:text-white">{{ $blog->read_time }}</span>
            </div>
            <h3 class="text-[20px] font-bold text-black dark:text-white">
                {{ $blog->title }}
            </h3>
            <a href="{{ url('/blogs/' . $blog->slug) }}" class="text-[#00C6FF] font-semibold text-[12px] flex items-center gap-1 hover:underline">
                Learn More
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
                </svg>
            </a>
        </div>
    </article>
    @endforeach
</div>

      <div id="loadMoreBtn" class="flex justify-center items-center mt-10">
 <a  onclick="loadMoreBlogs()" class="flex items-center justify-center gap-2 
     btn-blog
     text-[#003BA4] dark:text-white 
     dark:border-white 
      rounded-full text-sm font-medium
     cursor-pointer">

    Load More Blogs

    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
         stroke-width="1.5" stroke="currentColor" 
         class="size-4 ">
      <path stroke-linecap="round" stroke-linejoin="round" 
            d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
    </svg>

</a>
</div>

</div>
</section>

@endsection

