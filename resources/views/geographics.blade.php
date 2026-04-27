@extends('layouts.app')
@section('title', 'geographics — Zippy Solutions')



@push('styles')
<link rel="stylesheet" href="{{ asset('src/geographic.css') }}">
@endpush

@section('content')

<!-- Hero Section -->
<section class="geographic-hero  relative z-0 flex flex-col 
  px-3 md:px-6 pr-14 
  md:px-12 md:pr-16 
  lg:pl-[94px] lg:pr-20 
  gap-7 md:gap-9 lg:gap-[48px] 
  justify-center min-h-screen overflow-hidden"
 >

 

 
  <!-- Top Badge Button -->
  <button class="relative hero-button flex items-center justify-center gap-2 
    text-[10px] md:text-[12px] lg:text-sm 
    cursor-pointer overflow-hidden text-[#02EEFD] self-start uppercase">
    <span class="absolute gradient-border inset-0 pointer-events-none"></span>
   GEOGRAPHIES
  </button>

  <!-- Heading -->
  <h1 class="text-[26px] md:text-[36px] lg:text-[54px] font-[500] 
    w-[300px] md:w-[560px] lg:w-[973px] 
    leading-[1.19] tracking-[-0.03em] text-white mb-4 md:mb-0">
   Connecting Businesses Across Global Markets
  </h1>

  <!-- Paragraph -->
  <p class="text-[14px] md:text-[16px] lg:text-[20px] 
    tracking-[-0.012em] 
    w-[300px] md:w-[580px] lg:w-[894px] 
    leading-[1.6] text-[#FFFFFFBF]  ">
   Our global presence allows us to collaborate with businesses from different regions and industries. With teams and partners across major international markets, we deliver innovative technology solutions while understanding the unique needs of each geography.

 

  <!-- Side Button -->
  <div class="absolute z-50 top-1/2 -translate-y-1/2 right-0 dark:bg-[#010F23]">
    <button class="business-btn text-[11px] md:text-[14px] lg:text-[22px] 
      py-4 md:py-5 lg:py-6 px-2 md:px-3 dark:text-[#010F23]">
      Lets Talk Business
    </button>
  </div>

</section>

<section>
     <div class="w-full px-4  mt-20" data-purpose="geographics-section">
 
    <!-- 2x2 Grid -->
    <div class="grid lg:grid-cols-4 gap-6 grid-cols-2">
 
      <!-- Dubai -->
      <div class="city-card relative rounded-2xl overflow-hidden cursor-pointer aspect-[4/3]
                  transition-all duration-500 ease-out
                  hover:-translate-y-1 hover:shadow-xl">
        <img
          src=""
          alt="Dubai"
          class="card-img w-full h-full object-cover block brightness-75
                 transition-all duration-700 ease-out"/>
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
        <div class="card-info absolute bottom-0 left-0 p-4 transition-transform duration-500 ease-out">
          <p class="text-white text-[15px] font-600 leading-tight mb-0.5">Dubai</p>
          <p class="text-white/65 text-[11px] font-400">Middle East Hub</p>
        </div>
      </div>
 
      <!-- London -->
      <div class="city-card relative rounded-2xl overflow-hidden hidden sm:flex cursor-pointer aspect-[4/3]
                  transition-all duration-500 ease-out
                  hover:-translate-y-1 hover:shadow-xl">
        <img
          src="https://images.unsplash.com/photo-1529655683826-aba9b3e77383?w=600&q=75"
          alt="London"
          class="card-img w-full h-full object-cover block brightness-75
                 transition-all duration-700 ease-out"/>
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
        <div class="card-info absolute bottom-0 left-0 p-4 transition-transform duration-500 ease-out">
          <p class="text-white text-[15px] font-600 leading-tight mb-0.5">London</p>
          <p class="text-white/65 text-[11px] font-400">European Headquarters</p>
        </div>
      </div>
 
      <!-- Toronto -->
      <div class="city-card relative rounded-2xl overflow-hidden cursor-pointer aspect-[4/3]
                  transition-all duration-500 ease-out
                  hover:-translate-y-1 hover:shadow-xl">
        <img
          src="https://images.unsplash.com/photo-1517090504586-fde19ea6066f?w=600&q=75"
          alt="Toronto"
          class="card-img w-full h-full object-cover block brightness-75
                 transition-all duration-700 ease-out"/>
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
        <div class="card-info absolute bottom-0 left-0 p-4 transition-transform duration-500 ease-out">
          <p class="text-white text-[15px] font-600 leading-tight mb-0.5">Toronto</p>
          <p class="text-white/65 text-[11px] font-400">Canadian Office</p>
        </div>
      </div>
 
      <!-- New York -->
      <div class="city-card relative rounded-2xl overflow-hidden hidden sm:flex cursor-pointer aspect-[4/3]
                  transition-all duration-500 ease-out
                  hover:-translate-y-1 hover:shadow-xl">
        <img
          src="https://images.unsplash.com/photo-1485871981521-5b1fd3805eee?w=600&q=75"
          alt="New York"
          class="card-img w-full h-full object-cover block brightness-75
                 transition-all duration-700 ease-out"/>
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
        <div class="card-info absolute bottom-0 left-0 p-4 transition-transform duration-500 ease-out">
          <p class="text-white text-[15px] font-600 leading-tight mb-0.5">New York</p>
          <p class="text-white/65 text-[11px] font-400">US Headquarters</p>
        </div>
      </div>
 
    </div>


     <!-- 2x2 Grid -->
    <div class="grid lg:grid-cols-4 gap-6 mt-6 grid-cols-2">
 
      <!-- Dubai -->
      <div class="city-card relative rounded-2xl overflow-hidden cursor-pointer aspect-[4/3]
                  transition-all duration-500 ease-out
                  hover:-translate-y-1 hover:shadow-xl">
        <img
          src=""
          alt="Dubai"
          class="card-img w-full h-full object-cover block brightness-75
                 transition-all duration-700 ease-out"/>
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
        <div class="card-info absolute bottom-0 left-0 p-4 transition-transform duration-500 ease-out">
          <p class="text-white text-[15px] font-600 leading-tight mb-0.5">Dubai</p>
          <p class="text-white/65 text-[11px] font-400">Middle East Hub</p>
        </div>
      </div>
 
      <!-- London -->
      <div class="city-card relative rounded-2xl overflow-hidden cursor-pointer aspect-[4/3]
                  transition-all duration-500 ease-out
                  hover:-translate-y-1 hover:shadow-xl">
        <img
          src="https://images.unsplash.com/photo-1529655683826-aba9b3e77383?w=600&q=75"
          alt="London"
          class="card-img w-full h-full object-cover block brightness-75
                 transition-all duration-700 ease-out"/>
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
        <div class="card-info absolute bottom-0 left-0 p-4 transition-transform duration-500 ease-out">
          <p class="text-white text-[15px] font-600 leading-tight mb-0.5">London</p>
          <p class="text-white/65 text-[11px] font-400">European Headquarters</p>
        </div>
      </div>
 
      <!-- Toronto -->
      <div class="city-card hidden sm:flex relative rounded-2xl overflow-hidden cursor-pointer aspect-[4/3]
                  transition-all duration-500 ease-out
                  hover:-translate-y-1 hover:shadow-xl">
        <img
          src="https://images.unsplash.com/photo-1517090504586-fde19ea6066f?w=600&q=75"
          alt="Toronto"
          class="card-img w-full h-full object-cover block brightness-75
                 transition-all duration-700 ease-out"/>
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
        <div class="card-info absolute bottom-0 left-0 p-4 transition-transform duration-500 ease-out">
          <p class="text-white text-[15px] font-600 leading-tight mb-0.5">Toronto</p>
          <p class="text-white/65 text-[11px] font-400">Canadian Office</p>
        </div>
      </div>
 
      <!-- New York -->
      <div class="city-card relative rounded-2xl overflow-hidden cursor-pointer aspect-[4/3]
                  transition-all duration-500 ease-out
                  hover:-translate-y-1 hover:shadow-xl hidden sm:flex">
        <img
          src="https://images.unsplash.com/photo-1485871981521-5b1fd3805eee?w=600&q=75"
          alt="New York"
          class="card-img w-full h-full object-cover block brightness-75
                 transition-all duration-700 ease-out"/>
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
        <div class="card-info absolute bottom-0 left-0 p-4 transition-transform duration-500 ease-out">
          <p class="text-white text-[15px] font-600 leading-tight mb-0.5">New York</p>
          <p class="text-white/65 text-[11px] font-400">US Headquarters</p>
        </div>
      </div>
 
    </div>
 
 
    <!-- View All Button -->
    <div class="flex justify-center mt-6 lg:hidden ">
      <button class="flex items-center gap-2 px-6 py-2.5 rounded-full border border-[#003BA4]
                     text-[#003BA4] text-[13px] font-500  
                     hover:border-gray-400 hover:shadow-sm
                     transition-all duration-300 ease-out dark:[#00F2FF] dark:text-white">
        View All
        <span class="text-base leading-none">→</span>
      </button>
    </div>
 
  </div>
</section>

<section class=" w-full  px-4 md:px-8 mt-20 bg-[#06254E] dark:bg-[#010F23] pb-10" data-purpose="contact-section">
 @include('partials.contact-form')

</section>

@endsection