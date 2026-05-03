@extends('layouts.app')
@section('title', 'geographics — Zippy Solutions')

@section('description', 'Explore our geographics.')

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

 
</section>

<!-- Side Button -->
<div class="business-wrapper">
    <button class="business-btn" onclick="scrollToContact()">
        Lets Talk Business
    </button>
</div>

<section>
     <div class="w-full px-4  mt-20" data-purpose="geographics-section">
 
    <!-- 2x2 Grid -->
    <div class="grid lg:grid-cols-4 gap-6 grid-cols-2">
 
      <!-- Dubai -->
      <div class="city-card relative rounded-2xl overflow-hidden cursor-pointer aspect-[4/3]
                  transition-all duration-500 ease-out
                  hover:-translate-y-1 hover:shadow-xl">
        <img
          src="{{ asset('/Assests/images/christoph-schulz-7tb-b37yHx4-unsplash.jpg') }}"
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
          src="{{ asset('/Assests/images/luke-stackpoole-mOEqOtmuPG8-unsplash.jpg') }}"
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
          src="{{ asset('/Assests/images/luke-stackpoole-mOEqOtmuPG8-unsplash.jpg') }}"
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
          src="{{ asset('/Assests/images/anthony-delanoix-hv5pLutRkCI-unsplash.jpg') }}"
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
          src="{{ asset('/Assests/images/christoph-schulz-7tb-b37yHx4-unsplash.jpg') }}"
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
          src="{{ asset('/Assests/images/luke-stackpoole-mOEqOtmuPG8-unsplash.jpg') }}"
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
         src="{{ asset('/Assests/images/mwangi-gatheca-qlKaN7eqay8-unsplash.jpg') }}"
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
          src="{{ asset('/Assests/images/anthony-delanoix-hv5pLutRkCI-unsplash.jpg') }}"
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
 

 
  </div>
</section>

<section class=" w-full  px-4 md:px-8 mt-20 bg-[#06254E] dark:bg-[#010F23] pb-10" data-purpose="contact-section">
 @include('partials.contact-form')

</section>

@endsection