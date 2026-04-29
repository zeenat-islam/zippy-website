@use('Illuminate\Support\Facades\Storage')
@extends('layouts.app')

@section('title', 'Home — Zippy Solutions')

@section('content')

<!-- Hero Section -->

<section  data-aos="fade-down" class="hero-section dark:bg-[#010F23] relative z-0 flex flex-col 
  px-3 md:px-6 pr-14 
  md:px-12 md:pr-16 
  lg:pl-[94px] lg:pr-20 
  gap-7 md:gap-9 lg:gap-[48px] 
  justify-center min-h-screen bg-[#06254E] overflow-hidden">

  <!-- Badge -->
  <div class="hero-button flex items-center justify-center gap-2 
    text-[10px] md:text-[12px] lg:text-sm 
    text-[#02EEFD] self-start">
    DIGITAL INNOVATIONS FOR STARTUPS
  </div>

  <!-- Heading -->
  <h1 data-aos="fade-up" data-aos-delay="200" class="text-[26px] md:text-[36px] lg:text-[54px] font-[500] 
    w-[300px] md:w-[560px] lg:w-[973px] 
    leading-[1.19] tracking-[-0.03em] text-white">
    Empower your business with smart digital solutions
  </h1>

 <p data-aos="fade-up" data-aos-delay="400" class="text-[14px] md:text-[16px] lg:text-[20px] 
  w-full max-w-[300px] md:max-w-[580px] lg:max-w-[894px] 
  leading-[1.6] text-[#FFFFFFBF]">
  Zippy helps startups and growing businesses build scalable web, mobile, 
  and software solutions designed for speed, performance, and growth.
</p>

  <!-- Buttons -->
  <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">

    <a href="{{url('contact')}}" class="started-button2 flex items-center justify-center gap-2">
      Start your Project
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
        stroke-width="1.5" stroke="currentColor" class="size-5 lg:size-6">
        <path stroke-linecap="round" stroke-linejoin="round" 
          d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
      </svg>
    </a>

    <a href="{{ url('portfolio') }}" class="profile-button gap-2 text-white cursor-pointer px-2 flex items-center justify-center">
      View our Portfolio
    </a>

  </div>



</section>
<!-- Side Button -->
<div class="business-wrapper">
    <button class="business-btn" onclick="scrollToContact()">
        Lets Talk Business
    </button>
</div>

<div class="w-full overflow-hidden">
  <div class="marquee-track gap-12 py-10">

    @php
      $logos = [
        'pngegg (1) 1.png',
        'pngegg 3.png',
        'pngegg (1) 1.png',
        'pngegg 3.png',
      ];
    @endphp

    @for ($i = 0; $i < 2; $i++)
      @foreach($logos as $logo)
        <img loading="lazy" src="{{ asset('Assests/images/' . $logo) }}"
             class="object-contain h-10 lg:h-[60px] mx-6">
      @endforeach
    @endfor

  </div>
</div>


<section class="w-full bg-[#F8F8F8] py-16 dark:bg-[#010F23]">
    <div class="mx-auto px-6 w-full">
        
        <!-- Inner Div -->
        <div class="flex flex-col md:flex-row md:items-center  md:justify-between gap-6 min-h-[168px]">
            
            <!-- Left Side: Badge + H1 -->
            <div class="flex flex-col gap-4 max-w-[620px]" data-aos="fade-right">
                <button class="self-start badge text-[12px]  font-[600] leading-[1.6] tracking-[-0.012em] px-4 py-1 cursor-pointer"
                    >
                    OUR SERVICES
                </button>
               <h1 class="text-[24px] md:text-[42px] lg:text-[48px] font-[700] leading-[1.4] md:leading-[60px] tracking-[-0.5px] text-black lg:w-[620px] dark:text-white md:w-[620px]">
                    How do we work to help you in Startup Business
                </h1>
            </div>

            <button  onclick="toggleServices()" 
            class="hidden   md:flex services-btn dark:text-white items-center gap-2 text-[#003BA4] text-sm font-medium flex-shrink-0">
            View All Services
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
            </svg>
        </button>

        </div>




<section>
   {{-- Services Grid --}}
<div id="servicesGrid"  data-aos="fade-up" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mx-auto max-w-[1400px] mt-10">
   @foreach($services as $index => $item)
    <x-service-card 
        :image="$item->image" 
        :title="$item->title" 
        :short_desc="$item->short_desc" 
        :tags="$item->tags ?? []" 
        :slug="$item->slug"
        :class="$index >= 3 ? 'extra-card hidden' : ''"
    />
@endforeach
</div>

<div class="flex md:hidden justify-center items-center mt-8">
      <button onclick="toggleServices()" class="flex services-btn items-center gap-2 text-[#003BA4] dark:text-white text-sm font-medium">
 
     View All Services

         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
            </svg>
      </button>
    </div>
</section>




<!-- Services Section End -->

<!-- About Us Section -->
<section class="w-full py-16 bg-white dark:bg-[#010F23] mt-10">
    <div class="mx-auto lg:px-6 max-w-[1349px]">
        
        <div class="flex flex-col md:flex-row items-center gap-0" data-aos="fade-right">

            <!-- Left Side -->
            <div class="flex flex-col w-full md:w-[607px] gap-[33px]">
                
                <button class="self-start uppercase badge text-[12px] font-[600] leading-[1.6] tracking-[-0.012em] px-4 py-1 cursor-pointer">
                    About Us

                
                </button>

                <h1 class="text-[20px] md:text-[38px] lg:text-[48px] lg:font-[700] lg:leading-[48px] tracking-[-0.5px] text-black dark:text-white">
                    Building apps that <br>empower businesses
                </h1>

                <p class="text-[14px] lg:text-[15px] w-full max-w-[364px] leading-[1.7] dark:text-gray-300">
                  We are a dedicated team of mobile app developers, designers, 
                  and strategists committed to turning ideas into high-performance 
                  applications. With years of experience, we create scalable, secure, and 
                  user-friendly apps for startups, enterprises, and innovators worldwide.
              </p>

                <!-- Stats Row -->
                <div class="flex items-center gap-8 mt-10">
                    
                    <!-- Stat 1 -->
                    <div class="flex flex-col gap-2 items-center justify-center">
                        <div class="w-9 h-9 rounded-full bg-[#00C6FF1A] border flex justify-center items-center">
                            <img loading="lazy" src="Assests/images/svg.svg" alt="Projects Icon" class="w-4 h-4">
                        </div>
                        <span class="text-[24px] font-bold text-black dark:text-white flex items-center justify-center">200+</span>
                        <span class="text-[12px] text-gray-500">Projects Delivered</span>
                    </div>

                    <!-- Divider -->
                    <div class="w-[1px] h-12 bg-gray-200"></div>

                    <!-- Stat 2 -->
                    <div class="flex flex-col items-center justify-center gap-2">
                        <div class="w-9 h-9 rounded-full bg-[#00C6FF1A] border flex justify-center items-center">
                            <img src="Assests/images/svg (2).svg" alt="Customers Icon" class="w-4 h-4">
                        </div>
                        <span class="text-[24px] font-bold text-black dark:text-white flex items-center justify-center">40%</span>
                        <span class="text-[12px] text-gray-500">Satisfied customers</span>
                    </div>

                    <!-- Divider -->
                    <div class="w-[1px] h-12 bg-gray-200"></div>

                    <!-- Stat 3 -->
                    <div class="flex flex-col  items-center justify-center gap-2">
                    <div data-aos="zoom-in" class="w-9 h-9 rounded-full bg-[#00C6FF1A] border flex justify-center items-center">
                        <img src="Assests/images/Vector.svg" alt="Experience Icon" class="w-4 h-4">
                    </div>
                        <span class="text-[24px] flex items-center justify-center font-bold text-black dark:text-white">8+</span>
                        <span class="text-[12px] text-gray-500">years Experience</span>
                    </div>

                </div>

            </div>

            <!-- Right Side: Image -->
            <div class="w-full md:flex-1 mt-10 md:mt-0">
                <img 
                    src="Assests/images/img (2).png" 
                    alt="About Us" 
                    class="w-full h-[300px] md:h-[584px] object-cover rounded-lg">
            </div>

        </div>
    </div>
</section>

<section class="px-8 py-10" data-aos="fade-up">
  

 @include('partials.team-swiper')
</section>


 
<section class="w-full bg-[#F8F8F8] py-16 dark:bg-[#010F23] pt-16" data-aos="fade-right">
  <div class="mx-auto px-6 max-w-[1349px]">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-12">
      <div class="flex flex-col gap-4 max-w-[620px]">
        <button class="self-start badge text-[12px] font-[600] leading-[1.6] tracking-[-0.012em] px-4 py-1 cursor-pointer">
          OUR BLOG
        </button>
        <h1 data-aos="fade-up" class="text-[24px] md:text-[42px] lg:text-[44px] font-[700] leading-[1.2] tracking-[-0.03em] text-black dark:text-white">
          Stories of our transformations<br>across Services and Industries
        </h1>
      </div>
      <button class="hidden md:flex 
       services-btn items-center gap-2 text-[#003BA4] text-sm font-medium flex-shrink-0">
        <a class="flex gap-2" href="{{ url('blogs') }}">View All Blogs
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
          </svg>
        </a>
      </button>
    </div>

    <!-- Blog Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[21px] mt-10 w-full" data-aos="fade-up">
      @foreach($blogs as $blog)
      <article class="bg-white overflow-hidden flex flex-col shadow-sm rounded-t-md dark:bg-[#06254E] dark:border-none">
          <div>
              <img src="{{ asset('Assests/images/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-[180px] object-cover">
          </div>
          <div class="px-3 pb-4 flex flex-col gap-3 mt-4">
              <div class="flex items-center gap-2">
                  <span class="text-gray-400 text-[11px] dark:text-white">{{ $blog->date }}</span>
                  <span class="text-gray-300 text-[11px] dark:text-white">•</span>
                  <span class="text-gray-400 text-[11px] dark:text-white">{{ $blog->read_time }}</span>
              </div>
              <h3 class="text-[20px] font-bold text-black dark:text-white">{{ $blog->title }}</h3>
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

    <!-- Mobile View All Button -->
    <div class="flex md:hidden justify-center items-center mt-8">
      <button class="flex services-btn items-center gap-2 text-[#003BA4] dark:text-white text-sm font-medium">
  <a href="{{ url('blogs') }}" class="dark:text-white">
    View All Blogs
  </a>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
        </svg>
      </button>
    </div>

  </div>
</section>



<!---testimonials-->

<section class="max-w-7xl mx-auto  relative px-6 md:px-10 mb-10 " id="testimonials"  data-aos="fade-right">
  <!-- Section Header -->
  <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6 mt-10">
    <div class="flex flex-col gap-2">
      <!-- Trust Badge -->
      <div class="badge self-start flex gap-2 lg:text-[12px] text-[10px] font-[600] leading-[1.6] tracking-[-0.012em] px-4 py-1 cursor-pointer">
        <div class="flex items-center gap-2">
          <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
        </div>
        <span class="text-[12px] tracking-widest">TRUSTED BY 10,000+ COMPANIES</span>
      </div>
     
      
    </div>
   
    
  </div>


  <div class="flex items-center justify-between lg:pr-6">
      
      <h2 class="lg:text-[48px]  text-[20px] dark:text-white lg:leading-[48px] lg:mt-5 tracking-[0.5px] font-bold" style="font-family: 'Product Sans', sans-serif;">
        What Our Clients Say
      </h2>
      <div class="flex gap-3">
      <button id="testimonialPrev" class="w-10 h-10 bg-[#E5E7EB] dark:bg-[#06254E] rounded-full flex items-center justify-center hover:bg-[#00C6FF1A] hover:border hover:border-[#00C6FF] transition-all cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#003BA4" class="size-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>
      </button>
      <button id="testimonialNext" class="w-10 h-10 bg-[#E5E7EB] dark:bg-[#06254E] rounded-full flex items-center justify-center hover:bg-[#00C6FF1A] hover:border hover:border-[#00C6FF] transition-all cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#003BA4" class="size-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
        </svg>
      </button>
      </div>
    </div>
<div class="swiper myswiper"   data-aos="fade-up"
     data-aos-duration="3000">
    <div class="swiper-wrapper">

        @forelse($testimonials as $testimonial)
        <article class="swiper-slide 
    lg:mt-5 px-6 rounded-2xl py-8 flex flex-col justify-between
    cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-1">

            {{-- Stars --}}
            <div class="flex gap-1 text-[#D9B802] text-[22px]">
                @for($i = 1; $i <= 5; $i++)
                    @if($i <= $testimonial->rating)
                        <span>★</span>
                    @else
                        <span class="text-gray-300">★</span>
                    @endif
                @endfor
            </div>

            {{-- Message --}}
            <blockquote class="text-[16px] pt-3 leading-relaxed pb-8 dark:text-white text-black">
                "{{ $testimonial->message }}"
            </blockquote>

            {{-- Client Info --}}
            <div class="flex items-center gap-3 mt-5">
                <img class="w-10 h-10 rounded-full object-cover"
                    src="{{ $testimonial->client_image ? asset('Assests/images/' . $testimonial->client_image) : asset('Assests/images/default.png') }}"
     alt="{{ $testimonial->client_name }}">
                <div>
                    <p class="text-[16px] font-bold text-[#003BA4] dark:text-white leading-tight">
                        {{ $testimonial->client_name }}
                    </p>
                    <p class="text-[14px] text-gray-500">
                        {{ $testimonial->client_role }}
                    </p>
                </div>
            </div>

        </article>
        @empty
        {{-- Agar database mein koi testimonial nahi hai --}}
        <p class="text-gray-400 text-center py-10">No testimonials yet.</p>
        @endforelse

    </div>
</div>

<section  data-aos="zoom-in" class=" w-full  px-4 md:px-8 mt-20 bg-[#06254E] dark:bg-[#010F23] pb-10" data-purpose="contact-section">
  @include('partials.contact-form')
</section>


@endsection