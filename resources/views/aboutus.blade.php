@extends('layouts.app')

@section('title', 'About Us — Zippy Solutions')
@section('description', 'We are a dedicated team of 
developers committed to turning ideas into high-performance applications.')
@push('styles')
<link rel="stylesheet" href="{{ asset('src/Aboutus.css') }}">
@endpush

@section('content')
<!---Navbar End-->

<!-- Hero Section -->
<section class="  relative z-0 flex flex-col 
  px-3 md:px-6 pr-14 
  md:px-12 md:pr-16 
  lg:pl-[94px] lg:pr-20 
  gap-7 md:gap-9 lg:gap-[48px] 
  justify-center min-h-screen overflow-hidden"
 >

  <img 
    src="{{ asset('Assests/images/f1d264fb73e1bf088c63656ececd3829afc302a5.jpg') }}"
    alt=""
    fetchpriority="high"
    class="absolute inset-0 w-full h-full object-cover object-center -z-10"
  />

  {{-- Overlay --}}
  <div class="absolute inset-0 -z-10 bg-[#1C3950]/60"></div>

 
  <!-- Top Badge Button -->
  <button class="relative hero-button flex items-center justify-center gap-2 
    text-[10px] md:text-[12px] lg:text-sm 
    cursor-pointer overflow-hidden text-[#02EEFD] self-start uppercase">
    <span class="absolute gradient-border inset-0 pointer-events-none"></span>
    about us
  </button>

  <!-- Heading -->
  <h1 class="text-[26px] md:text-[36px] lg:text-[54px] font-[500] 
    w-[300px] md:w-[560px] lg:w-[973px] 
    leading-[1.19] tracking-[-0.03em] text-white mb-4 md:mb-0">
   Empowering Businesses, Inspiring Innovation
  </h1>

  <!-- Paragraph -->
  <p data-aos="fade-up" class="text-[14px] md:text-[16px] lg:text-[20px] 
    tracking-[-0.012em] 
    w-[300px] md:w-[580px] lg:w-[894px] 
    leading-[1.6] text-[#FFFFFFBF]  ">
  At our company, we help businesses grow through innovative 
technology solutions. Our mission is to transform ideas into 
impactful digital products while creating long-term value for our 
clients and Partners.
  </p>


</section>
<!-- Side Button -->
<div class="business-wrapper">
    <button class="business-btn" onclick="scrollToContact()">
        Lets Talk Business
    </button>
</div>

<!-- About Us Section -->

<section data-aos="fade-up" class="w-full py-16 bg-white dark:bg-[#010F23]">
    <div class="mx-auto px-6 max-w-[1348px] lg:px-12">
        
        <div class="flex flex-col md:flex-row items-center gap-10 md:gap-8">

            <!-- Left Side -->
            <div class="flex flex-col w-full md:w-1/2 lg:w-[607px] gap-6 lg:gap-[33px] md:pr-8">
                
                <button class="self-start uppercase badge text-[12px] font-[600] leading-[1.6] tracking-[-0.012em] px-4 py-1 cursor-pointer">
                    OUR STORY
                </button>

                <h1 class="text-[28px] sm:text-[34px] md:text-[38px] lg:text-[48px] font-bold lg:leading-[48px] tracking-[-0.5px] text-black dark:text-white">
                    Building Digital Solutions for a Smarter Future
                </h1>

                <p class="text-[14px] lg:leading-[1.7] text-[#94A3B8] dark:text-gray-300">
                    Our journey began with a vision to help organizations unlock their
                     potential through innovative technology. By combining deep industry knowledge
                      with modern development practices, we create digital products that solve real
                       business challenges and deliver measurable results.
                </p>
                
                
            </div>

            <!-- Right Side: Image -->
            <div class="w-full md:w-1/2 lg:flex-1 lg:mt-0 mt-10">
                <img 
                    src="Assests/images/9813e05437078106d6cc1b1416734ee2127e83fc.png" 
                    alt="About Us" 
                    class="lg:h-[584px] lg:w-[584px] w-full object-cover rounded-lg">
            </div>

        </div>
    </div>
</section>



<section data-aos="fade-right" class="w-full py-16 bg-white dark:bg-[#010F23]">
    <div class="mx-auto px-6 max-w-[1348px] lg:px-12">
        
        <div class="flex flex-col md:flex-row items-center gap-10 md:gap-8">


             <!-- Right Side: Image -->
            <div class="w-full md:w-1/2 lg:flex-1 lg:mt-0 mt-10">
                <img 
                    src="Assests/images/3028917146df0f3f034e21f0587bfa5c29c0383a.png" 
                    alt="About Us" 
                    class="lg:h-[584px] lg:w-[584px] w-full object-cover rounded-lg">
            </div>

            <!-- Left Side -->
            <div class="flex flex-col w-full md:w-1/2 lg:w-[607px] gap-6 lg:gap-[33px] md:pr-8">
                
                <button class="self-start uppercase badge text-[12px] font-[600] leading-[1.6] tracking-[-0.012em] px-4 py-1 cursor-pointer">
                    OUR MISSION
                </button>

                <h1 class="text-[28px] sm:text-[34px] md:text-[38px] lg:text-[48px] font-bold lg:leading-[48px] tracking-[-0.5px] text-black dark:text-white">
                    Empowering Growth Through Technology
                </h1>

                <p class="text-[14px] lg:leading-[1.7] text-[#94A3B8] dark:text-gray-300">
                   Our mission is to empower businesses with cutting-edge digital solutions
                    that accelerate growth and innovation. We strive to deliver scalable platforms
                     and intelligent systems that enable organizations to operate more efficiently
                      and compete in a rapidly evolving digital world
                </p>
                
                
            </div>

           

        </div>
    </div>
</section>

<section data-aos="fade-right" class="w-full py-16 bg-white dark:bg-[#010F23]">
    <div class="mx-auto px-6 max-w-[1348px] lg:px-12">
        
        <div class="flex flex-col md:flex-row items-center gap-10 md:gap-8">

            <!-- Left Side -->
            <div class="flex flex-col w-full md:w-1/2 lg:w-[607px] gap-6 lg:gap-[33px] md:pr-8">
                
                <button class="self-start uppercase badge text-[12px] font-[600] leading-[1.6] tracking-[-0.012em] px-4 py-1 cursor-pointer">
                    OUR VISION
                </button>

                <h1 class="text-[28px] sm:text-[34px] md:text-[38px] lg:text-[48px] font-bold lg:leading-[48px] tracking-[-0.5px] text-black dark:text-white">
                    Shaping the Future of Digital Innovation
                </h1>

                <p class="text-[14px] lg:leading-[1.7] text-[#94A3B8] dark:text-gray-300">
                   We envision a future where technology drives limitless possibilities 
                   for businesses worldwide. Our goal is to become a trusted global 
                   technology partner, helping organizations innovate, grow, and create
                    meaningful digital experiences.
                </p>
                
                
            </div>

            <!-- Right Side: Image -->
            <div class="w-full md:w-1/2 lg:flex-1 lg:mt-0 mt-10">
                <img 
                    src="Assests/images/b846e3caedb68e6c6538aa3fbd68aec6f3800355.png" 
                    alt="About Us" 
                    class="lg:h-[584px] lg:w-[584px] w-full object-cover rounded-lg">
            </div>

        </div>
    </div>
</section>


<section data-aos="fade-right" class="w-full py-16 bg-white dark:bg-[#010F23]">
    <div class="mx-auto px-6 max-w-[1348px] lg:px-12">
        
        <div class="flex flex-col md:flex-row items-center gap-10 md:gap-8">


             <!-- Right Side: Image -->
            <div class="w-full md:w-1/2 lg:flex-1 lg:mt-0 mt-10">
                <img 
                    src="Assests/images/24b56e058aa37ede9bdeed02fd6cd94b2d63d920.png" 
                    alt="About Us" 
                    class="lg:h-[584px] lg:w-[584px] w-full object-cover rounded-lg">
            </div>

            <!-- Left Side -->
            <div class="flex flex-col w-full md:w-1/2 lg:w-[607px] gap-6 lg:gap-[33px] md:pr-8">
                
                <button class="self-start uppercase badge text-[12px] font-[600] leading-[1.6] tracking-[-0.012em] px-4 py-1 cursor-pointer">
                  OUR PRINCIPLES
                </button>

                <h1 class="text-[28px] sm:text-[34px] md:text-[38px] lg:text-[48px] font-bold lg:leading-[48px] tracking-[-0.5px] text-black dark:text-white">
                    Integrity at the Core of Everything We Do
                </h1>

                <p class="text-[14px] lg:leading-[1.7] text-[#94A3B8] dark:text-gray-300">
                   Integrity, transparency, and responsibility define how we operate. 
                   Our business principles ensure that every partnership, project, and decision
                    reflects our commitment to ethical practices and sustainable growth.
                </p>
                
                
            </div>

           

        </div>
    </div>
</section>

<section data-aos="fade-right" class="w-full py-16 bg-white dark:bg-[#010F23]">
    <div class="max-w-[1348px] mx-auto px-6">
        
        <div class="flex flex-col gap-10">

            <!-- Left Side -->
            <div class="flex flex-col w-full lg:w-[607px] gap-6 lg:gap-[33px]">
                
                <button class="self-start uppercase badge text-[12px] font-[600] leading-[1.6] tracking-[-0.012em] px-4 py-1 cursor-pointer">
                    GLOBAL PRESENCE
                </button>

                <h1 class="text-[28px] sm:text-[34px] md:text-[38px] lg:text-[48px] font-bold lg:leading-[48px] tracking-[-0.5px] text-black dark:text-white">
                    Connecting Businesses Across the World
                </h1>
            </div>

            <!-- Cards Grid -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Dubai -->
                <div class="city-card relative rounded-2xl overflow-hidden cursor-pointer aspect-[4/3]
                            transition-all duration-500 ease-out hover:-translate-y-1 hover:shadow-xl">
                    <img src="/Assests/images/christoph-schulz-7tb-b37yHx4-unsplash.jpg" alt="Dubai"
                        class="card-img w-full h-full object-cover block brightness-75 transition-all duration-700 ease-out"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
                    <div class="card-info absolute bottom-0 left-0 p-4">
                        <p class="text-white text-[15px] font-semibold leading-tight mb-0.5">Dubai</p>
                        <p class="text-white/65 text-[11px]">Middle East Hub</p>
                    </div>
                </div>

                <!-- London -->
                <div class="city-card relative rounded-2xl overflow-hidden cursor-pointer aspect-[4/3]
                            transition-all duration-500 ease-out hover:-translate-y-1 hover:shadow-xl">
                    <img src="https://images.unsplash.com/photo-1529655683826-aba9b3e77383?w=600&q=75" alt="London"
                        class="card-img w-full h-full object-cover block brightness-75 transition-all duration-700 ease-out"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
                    <div class="card-info absolute bottom-0 left-0 p-4">
                        <p class="text-white text-[15px] font-semibold leading-tight mb-0.5">London</p>
                        <p class="text-white/65 text-[11px]">European Headquarters</p>
                    </div>
                </div>

                <!-- Toronto -->
                <div class="city-card relative rounded-2xl overflow-hidden cursor-pointer aspect-[4/3]
                            transition-all duration-500 ease-out hover:-translate-y-1 hover:shadow-xl">
                    <img src="https://images.unsplash.com/photo-1517090504586-fde19ea6066f?w=600&q=75" alt="Toronto"
                        class="card-img w-full h-full object-cover block brightness-75 transition-all duration-700 ease-out"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
                    <div class="card-info absolute bottom-0 left-0 p-4">
                        <p class="text-white text-[15px] font-semibold leading-tight mb-0.5">Toronto</p>
                        <p class="text-white/65 text-[11px]">Canadian Office</p>
                    </div>
                </div>

                <!-- New York -->
                <div class="city-card relative rounded-2xl overflow-hidden cursor-pointer aspect-[4/3]
                            transition-all duration-500 ease-out hover:-translate-y-1 hover:shadow-xl">
                    <img src="https://images.unsplash.com/photo-1485871981521-5b1fd3805eee?w=600&q=75" alt="New York"
                        class="card-img w-full h-full object-cover block brightness-75 transition-all duration-700 ease-out"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
                    <div class="card-info absolute bottom-0 left-0 p-4">
                        <p class="text-white text-[15px] font-semibold leading-tight mb-0.5">New York</p>
                        <p class="text-white/65 text-[11px]">US Headquarters</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
     
     

<section data-aos="fade-up" class="px-8 py-10 bg-[#F8F8F8] ">
  @include('partials.team-swiper');
</section>
<section class=" w-full  px-4 md:px-8 mt-20 bg-[#06254E] dark:bg-[#010F23] pb-10" data-purpose="contact-section">

@include('partials.contact-form');

</section>
@endsection