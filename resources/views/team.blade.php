@extends('layouts.app')

@section('title', 'Contact Us — Zippy Solutions')

@push('styles')
<link rel="stylesheet" href="{{ asset('src/team.css') }}">
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
    cursor-pointer overflow-hidden text-[#02EEFD] self-start uppercase">
    <span class="absolute gradient-border inset-0 pointer-events-none"></span>
    our team
  </button>

  <!-- Heading -->
  <h1 class="text-[26px] md:text-[36px] lg:text-[54px] font-[500] 
    w-[300px] md:w-[560px] lg:w-[973px] 
    leading-[1.19] tracking-[-0.03em] text-white mb-4 md:mb-0">
   Meet the Experts Behind Our Innovation
  </h1>

  <!-- Paragraph -->
  <p class="text-[14px] md:text-[16px] lg:text-[20px] 
    tracking-[-0.012em] 
    w-[300px] md:w-[580px] lg:w-[894px] 
    leading-[1.6] text-[#FFFFFFBF]  ">
   Our team is made up of passionate designers, developers, strategists, and innovators who work together to build exceptional digital experiences. With diverse expertise and a shared vision, we collaborate to deliver impactful solutions for businesses worldwide.
  </p>


</section>

<!-- Side Button -->
<div class="business-wrapper">
    <button class="business-btn" onclick="scrollToContact()">
        Lets Talk Business
    </button>
</div>

<section class="px-8 py-10">
 @include('partials.team-swiper')
</section>


<section class=" w-full  px-4 md:px-8 mt-20 bg-[#06254E] dark:bg-[#010F23] pb-10" data-purpose="contact-section">
 @include('partials.contact-form')

</section>
@endsection