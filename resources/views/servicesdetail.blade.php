@extends('layouts.app')
@section('title', 'services — Zippy Solutions')

@push('styles')
<link rel="stylesheet" href="{{ asset('src/ai-details.css') }}">
@endpush

@section('content')

<section  class="hero-section relative z-0 flex flex-col px-3 md:px-6 pr-14 md:px-12 md:pr-16 lg:pl-[94px] lg:pr-20 gap-7 md:gap-9 lg:gap-[48px] justify-center min-h-screen overflow-hidden"
    style="--hero-bg: url('{{ asset('Assests/images/' . $service->image) }}');">
    
    <button class="relative hero-button flex items-center justify-center gap-2 text-[10px] md:text-[12px] lg:text-sm cursor-pointer overflow-hidden text-[#02EEFD] self-start">
        <span class="absolute gradient-border inset-0 pointer-events-none"></span>
        DIGITAL INNOVATIONS FOR STARTUPS
    </button>

    <h1 class="text-[26px] md:text-[36px] lg:text-[54px] font-[500] w-[300px] md:w-[560px] lg:w-[973px] leading-[1.19] tracking-[-0.03em] text-white mb-4 md:mb-0">
        {{ $service->detail->hero_title  }}
    </h1>

    <p class="text-[14px] md:text-[16px] lg:text-[20px] tracking-[-0.012em] w-[300px] md:w-[580px] lg:w-[894px] leading-[1.6] text-[#FFFFFFBF]">
        {{ $service->short_desc }}
    </p>

    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
        <a href="{{url('contact')}}" class="started-button2 flex items-center justify-center gap-2">
            Consult AI Experts Now
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 lg:size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
            </svg>
        </a>
    </div>

   
</section>
<!-- Side Button -->
<div class="business-wrapper">
    <button class="business-btn">
        <a href="{{url('contact')}}">Lets Talk Business</a>
    </button>
</div>

{{-- Dynamic Blocks Rendering --}}
@if($service->detail && $service->detail->content_blocks)
    @foreach($service->detail->content_blocks as $block)
        
        {{-- SECTION 1: SECTION SPLIT --}}
        @if($block['type'] === 'section_split')
        <section class="w-full py-16 bg-white dark:bg-[#010F23]" data-aos="fade-right">
            <div class="mx-auto px-6 max-w-[1348px] lg:px-12">
                <div class="flex flex-col md:flex-row items-center gap-10 md:gap-8">
                    <div class="flex flex-col w-full md:w-1/2 lg:w-[607px] gap-6 lg:gap-[33px] md:pr-8">
                        <button class="self-start uppercase badge text-[12px] font-[600] leading-[1.6] tracking-[-0.012em] px-4 py-1">
                            About This Service
                        </button>

                        <h2 class="text-[28px] sm:text-[34px] md:text-[38px] lg:text-[48px] font-bold tracking-[-0.5px] text-black dark:text-white leading-tight">
                            {{ $block['data']['title'] }}
                        </h2>

                        <div class="text-[14px] lg:leading-[1.7] text-[#94A3B8] dark:text-gray-300">
                            {!! $block['data']['description'] !!}
                        </div>

                        @if(!empty($block['data']['list_items']))
                            <ul class="flex flex-col gap-3 items-start mt-2">
                                @foreach($block['data']['list_items'] as $item)
                                    <li class="flex gap-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="#0D9488" class="size-4 shrink-0">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                        </svg>
                                        <span class="text-[15px] sm:text-[16px] lg:text-[18px] font-[600] text-black dark:text-white">
                                            {{ $item }}
                                        </span>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <div class="w-full md:w-1/2 lg:flex-1">
                        @if(!empty($block['data']['image']))
                            <img src="{{ asset('Assests/images/' . ($block['data']['image'] ?? 'default.png')) }}" alt="{{ $block['data']['title'] }}" class="w-full lg:h-[584px] object-cover rounded-lg shadow-lg">
                        @endif
                    </div>
                </div>
            </div>
        </section>
        @endif

       

    @endforeach
@endif

<section class="bg-[#06254E] " data-aos="fade-up">
    <x-workflow-section />
</section>

@if($service->detail && $service->detail->content_blocks)
    @foreach($service->detail->content_blocks as $block)
        @if($block['type'] === 'section_grid')
            <section data-aos="fade-up" class="w-full py-16 bg-[#E5E7EB] dark:bg-[#010F23]">
                <div  class="mx-auto px-4 sm:px-6 lg:mx-12 max-w-[1348px]">

                    {{-- Top: heading --}}
                    <div  class="flex flex-col gap-4 mb-8">
                        <button class="self-start uppercase badge text-[12px] font-[600] leading-[1.6] tracking-[-0.012em] px-4 py-1 cursor-pointer">
                            Our Services
                        </button>
                        <h1 style="max-width: 781px;" class="text-[24px] sm:text-[32px] md:text-[38px] lg:text-[48px] font-bold lg:leading-[60px] tracking-[-0.5px] text-black dark:text-white">
                            {{ $block['data']['title'] ?? 'Default Title' }}
                        </h1>
                    </div>

                    @php
                        // Variable set kar rahe hain taake error na aaye
                        $centerImage = $block['data']['center_image'] ?? 'brain-image.png';
                        $icons = ['Vector (9).svg', 'Vector (11).svg', 'Vector (10).svg', 'Vector (12).svg'];
                    @endphp

                    {{-- MOBILE: Center Image on top --}}
                    <div class="flex justify-center mb-8 lg:hidden">
                        <img 
                            src="{{ asset('Assests/images/' . $centerImage) }}" 
                            alt="Service Image" 
                            class="w-[280px] h-[280px] object-contain"
                        >
                    </div>

                    {{-- MOBILE: 2-col card grid --}}
                    <div class="grid grid-cols-2 gap-4 lg:hidden">
                        @php $mobileIndices = [0, 3, 1, 2]; @endphp

                        @foreach($mobileIndices as $index => $gridIdx)
                            @php $item = $block['data']['grid_items'][$gridIdx] ?? null; @endphp
                            @if($item)
                            <div class="flex flex-col dark:bg-[#06254E] bg-white px-4 py-4 gap-3 rounded-lg">
                                <div class="w-9 h-9 rounded-full border flex justify-center items-center shrink-0">
                                    {{-- Yahan icons array use ho raha hai --}}
                                    <img src="{{ asset('Assests/images/' . ($icons[$index] ?? 'Vector (9).svg')) }}" alt="Icon" class="w-4 h-4">
                                </div>
                                <h2 class="text-[15px] font-semibold dark:text-white text-black">
                                    {{ $item['title'] ?? 'No Title' }}
                                </h2>
                                <p class="text-[13px] dark:text-[#94A3B8] text-gray-500">
                                    {{ $item['desc'] ?? '' }}
                                </p>
                            </div>
                            @endif
                        @endforeach
                    </div>

                    {{-- DESKTOP: original 3-col layout --}}
                    <div   class="hidden lg:flex items-center gap-0 mt-10">

                        {{-- Left cards (0 and 1) --}}
                        <div class="flex flex-col gap-8">
                            @foreach([0, 1] as $idx)
                                @php $item = $block['data']['grid_items'][$idx] ?? null; @endphp
                                @if($item)
                                <div class="flex flex-col dark:bg-[#06254E] bg-white w-[331px] px-4 py-4 gap-3 rounded-lg">
                                    <div class="w-9 h-9 rounded-full border flex justify-center items-center {{ $idx == 1 ? 'bg-[#00C6FF1A]' : '' }}">
                                        <img src="{{ asset('Assests/images/' . ($icons[$idx] ?? 'Vector (9).svg')) }}" alt="Icon" class="w-4 h-4">
                                    </div>
                                    <h2 class="text-[18px] dark:text-white text-black">{{ $item['title'] ?? 'No Title' }}</h2>
                                    <p class="dark:text-[#94A3B8]">{{ $item['desc'] ?? '' }}</p>
                                </div>
                                @endif
                            @endforeach
                        </div>

                        {{-- Center Dynamic Image --}}
                        <div class="flex-1 flex justify-center">
                            <img 
                                src="{{ asset('Assests/images/' . $centerImage) }}" 
                                alt="Center Image"
                                class="max-w-full h-auto"
                            >
                        </div>

                        {{-- Right cards (2 and 3) --}}
                        <div class="flex flex-col gap-8">
                            @foreach([2, 3] as $idx)
                                @php $item = $block['data']['grid_items'][$idx] ?? null; @endphp
                                @if($item)
                                <div class="flex flex-col dark:bg-[#06254E] bg-white w-[331px] px-4 py-4 gap-3 rounded-lg">
                                    <div class="w-9 h-9 rounded-full border flex justify-center items-center">
                                        <img src="{{ asset('Assests/images/' . ($icons[$idx] ?? 'Vector (11).svg')) }}" alt="Icon" class="w-4 h-4">
                                    </div>
                                    <h2 class="text-[18px] dark:text-white text-black">{{ $item['title'] ?? 'No Title' }}</h2>
                                    <p class="dark:text-[#94A3B8]">{{ $item['desc'] ?? '' }}</p>
                                </div>
                                @endif
                            @endforeach
                        </div>

                    </div>
                </div>
            </section>
        @endif
    @endforeach
@endif

<section class="w-full bg-[#F8F8F8] py-16 dark:bg-[#010F23]">
    <div class="mx-auto px-4 sm:px-6 lg:px-12 max-w-[1348px]">
        
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-8">
            
            <div class="flex flex-col gap-4">
                <button class="self-start uppercase badge text-[12px] font-[600] leading-[1.6] tracking-[-0.012em] px-4 py-1 cursor-pointer">
                    portfolio
                </button>
                <h1 class="text-[24px] md:text-[42px] lg:text-[48px] font-[700] leading-[1.4] md:leading-[60px] tracking-[-0.5px] text-black dark:text-white">
                    Portfolio ShowCase
                </h1>
            </div>

            <!-- View All button: hidden on mobile, shown on md+ -->
            <a href="{{url('portfolio')}}" class="hidden md:flex view-btn dark:text-white items-center gap-2 text-[#003BA4] text-sm font-medium flex-shrink-0">
                View All
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
                </svg>
            </a>
        </div>


        <!-- Cards grid: 1-col mobile, 2-col tablet, 3-col desktop -->
      <div class="grid lg:mx-20 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 ">

        @foreach($projects as $project)
            <article data-aos="flip-left"   data-aos-easing="ease-out-cubic"
     data-aos-duration="2000" class="bg-white dark:bg-[#06254E] rounded-xl overflow-hidden flex flex-col shadow-sm">
                <img src="{{ asset('Assests/images/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-[200px] object-cover">
                
                <div class="px-4 pb-5 flex flex-col gap-3 mt-4 flex-1">
                    <div class="flex items-center gap-2">
                        <span class="text-[#003BA4] text-[11px] dark:text-white">{{ $project->category_1 }}</span>
                        <span class="text-[#8F8F8F] text-[11px] dark:text-white">{{ $project->category_2 }}</span>
                    </div>

                    <h2 class="text-[20px] font-bold text-black dark:text-white">{{ $project->title }}</h2>
                    <p class="text-[14px] text-[#9CA3AF] flex-1">{{ $project->description }}</p>

                    <div class="flex justify-between items-center mt-auto">
                        <div class="flex flex-row gap-2 items-center">
                            <span class="text-[#EAB308]">★</span>
                            <span class="text-sm dark:text-white">{{ $project->rating }}</span>
                        </div>
                        
                        <a href="{{url('portfolio')}}" class="dark:text-[#00C6FF] text-[#003BA4] font-semibold text-[12px] flex items-center gap-1 hover:underline">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 transition-transform duration-300 ease-in-out hover:translate-x-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
        @endforeach

    </div>

        <!-- View All button: visible only on mobile, centered below cards -->
        <div class="flex justify-center mt-8 md:hidden">
            <a href="{{url('portfolio')}}" class="flex view-btn items-center gap-2 border border-[#003BA4] text-[#003BA4] dark:text-white dark:border-white px-6 py-2 rounded-full text-sm font-medium">
                View All 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
                </svg>
            </a>
        </div>

    </div>
</section>






 <section class="w-full bg-[#F8F8F8] py-16 dark:bg-[#010F23] pt-16">
  <div class="mx-auto px-6 max-w-[1349px]">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-12">
      <div class="flex flex-col gap-4 max-w-[620px]">
        <button class="self-start badge text-[12px] font-[600] leading-[1.6] tracking-[-0.012em] px-4 py-1 cursor-pointer">
          OUR BLOG
        </button>
        <h1 class="text-[24px] md:text-[42px] lg:text-[44px] font-[700] leading-[1.2] tracking-[-0.03em] text-black dark:text-white">
          Stories of our transformations<br>across Services and Industries
        </h1>
      </div>
      <button class="hidden md:flex dark:text-white services-btn items-center gap-2 text-[#003BA4] text-sm font-medium flex-shrink-0">
        <a href="{{url('blogs')}}" class="hover:underline">View All Blogs</a>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
        </svg>
      </button>
    </div>

     <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[21px] mt-10 w-full" data-aos="fade-up">
      @foreach($blogs as $blog)
      <article data-aos="flip-left"   data-aos-easing="ease-out-cubic"
     data-aos-duration="2000" class="bg-white overflow-hidden flex flex-col shadow-sm rounded-t-md dark:bg-[#06254E] dark:border-none">
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


<div class="flex md:hidden justify-start mt-4 justify-center  items-center mt-8">
    <button class="flex services-btn dark:text-white items-center gap-2 text-[#003BA4] text-sm font-medium">
        View All Blogs
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
        </svg>
      </button>
  </div>

</section>
@endsection