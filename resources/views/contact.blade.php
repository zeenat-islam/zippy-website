@extends('layouts.app')

@section('title', 'Contact Us — Zippy Solutions')
@section('description', 'Get in touch with Zippy Solutions for your next digital project.')
@push('styles')
<link rel="stylesheet" href="{{ asset('src/contact.css') }}">
@endpush

@section('content')

<!-- Hero Section -->
<section class=" relative z-0 flex flex-col 
  px-3 md:px-6 pr-14 
  md:px-12 md:pr-16 
  lg:pl-[94px] lg:pr-20 
  gap-7 md:gap-9 lg:gap-[48px] 
  justify-center min-h-screen overflow-hidden"
 >

 
 <img 
    src="{{ asset('Assests/images/50dad08bca227179ea6907fd3077fac284b5f4d7.jpg') }}"
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
    contact us
  </button>

  <!-- Heading -->
  <h1 class="text-[26px] md:text-[36px] lg:text-[54px] font-[500] 
    w-[300px] md:w-[560px] lg:w-[973px] 
    leading-[1.19] tracking-[-0.03em] text-white mb-4 md:mb-0">
   Let’s Start a Conversation
  </h1>

  <!-- Paragraph -->
  <p class="text-[14px] md:text-[16px] lg:text-[20px] 
    tracking-[-0.012em] 
    w-[300px] md:w-[580px] lg:w-[894px] 
    leading-[1.6] text-[#FFFFFFBF]  ">
   Whether you have a project idea, a business inquiry, or simply want to learn more about our services, our team is ready to help. Reach out to us and let’s discuss how we can bring your ideas to life.
  </p>

 
</section>
<!-- Side Button -->
<div class="business-wrapper">
    <button class="business-btn" onclick="scrollToContact()">
        Lets Talk Business
    </button>
</div>

<section class=" w-full  px-4 md:px-8 mt-20 bg-[#06254E] dark:bg-[#010F23] pb-10" data-purpose="contact-section">
  <!-- Header -->
  @include('partials.contact-form')

</section>

@endsection



