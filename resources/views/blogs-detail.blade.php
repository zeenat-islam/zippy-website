@extends('layouts.app')
@section('title', $blog->title . ' — Zippy Solutions')

@push('styles')
<link rel="stylesheet" href="{{ asset('src/blog-detail.css') }}">
@endpush

@section('content')

{{-- Hero Section --}}
<section class="blog-hero relative z-0 flex flex-col px-3 md:px-6 pr-14 md:px-12 md:pr-16 lg:pl-[94px] lg:pr-20 gap-7 md:gap-9 lg:gap-[48px] justify-center min-h-screen overflow-hidden bg-black/50"
  style="--hero-bg: url('{{ asset('Assests/images/' . basename($blog->image)) }}');">

  <button class="relative uppercase hero-button flex items-center justify-center gap-2 text-[10px] md:text-[12px] lg:text-sm cursor-pointer overflow-hidden text-[#02EEFD] self-start">
    <span class="absolute gradient-border inset-0 pointer-events-none"></span>
    {{ $blog->badge_title ?? 'Blog' }}
  </button>

  <h1 class="text-[26px] md:text-[36px] lg:text-[54px] font-[500] w-[300px] md:w-[560px] lg:w-[973px] leading-[1.19] tracking-[-0.03em] text-white mb-4 md:mb-0">
    {{ $blog->main_heading ?? $blog->title }}
  </h1>

  <div class="text-[14px] md:text-[16px] lg:text-[20px] tracking-[-0.012em] w-[300px] md:w-[580px] lg:w-[894px] leading-[1.6] text-[#FFFFFFBF]">
    {!! $blog->description !!}
  </div>

  <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 text-[#E5E7EB]">
    <div class="flex items-center gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>
      </svg>
      <p>by admin</p>
    </div>
    <div class="flex items-center gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"/>
      </svg>
      <p>{{ $blog->date }}</p>
    </div>
    <div class="flex items-center gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
      </svg>
      <p>{{ $blog->read_time }}</p>
    </div>
  </div>

  <div style="display:inline-flex;gap:12px;align-items:center;">
    
    <div class="tip-wrap" style="width:40px;height:40px;border-radius:50%;background:#FFFFFF1A;display:flex;align-items:center;justify-content:center;cursor:pointer;">
      <svg style="width:14px;height:14px;fill:white;" viewBox="0 0 320 512"><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V167.4c0-51.7 20.3-71.5 72.7-71.5 16.3 0 29.4.4 37 1.2V8.5C291.4 4 256.4 0 236.2 0 129.3 0 80 50.5 80 159.4v42.1H14v97.8h66z"/></svg>
      <span class="tip">Facebook</span>
    </div>

    <div class="tip-wrap" style="width:40px;height:40px;border-radius:50%;background:#FFFFFF1A;display:flex;align-items:center;justify-content:center;cursor:pointer;">
      <svg style="width:14px;height:14px;fill:white;" viewBox="0 0 512 512"><path d="M459.4 151.7c.3 4.5.3 9.1.3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z"/></svg>
      <span class="tip">Twitter</span>
    </div>

    <div class="tip-wrap" style="width:40px;height:40px;border-radius:50%;background:#FFFFFF1A;display:flex;align-items:center;justify-content:center;cursor:pointer;">
      <svg style="width:14px;height:14px;fill:white;" viewBox="0 0 448 512"><path d="M100.3 448H7.4V149.1h92.9V448zm-46.4-340C24.1 108 0 83.5 0 53.8 0 24.1 24.1 0 53.9 0s53.9 24.1 53.9 53.8c0 29.7-24.1 54.2-53.9 54.2zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V149.1h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448h-.1z"/></svg>
      <span class="tip">LinkedIn</span>
    </div>

</div>
  <div class="absolute z-50 top-1/2 -translate-y-1/2 right-0 dark:bg-[#010F23]">
    <button class="business-btn text-[11px] md:text-[14px] lg:text-[22px] py-4 md:py-5 lg:py-6 px-2 md:px-3 dark:text-[#010F23]">
     <a > Lets Talk Business</a>
    </button>
  </div>

</section>

{{-- Blog Content --}}
<section class="flex flex-col justify-between items-center lg:mx-20 my-10 pt-5">
  <div data-aos="fade-right" class="dark:bg-[#010F23] bg-white lg:px-12 px-6 py-10 w-full gap-10 flex flex-col" style="box-shadow: 4px 0 8px #E5E7EB, -4px 0 8px #E5E7EB;">

    {{-- Blog Title --}}
    <h1 class="lg:text-[36px] text-[20px] font-extrabold text-[#111827] leading-[40px] mb-[2px] max-w-[567px] dark:text-white">
      {{ $blog->title }}
    </h1>

   {{-- Content Blocks --}}
@php
    $blocks = $blog->detail->content_blocks ?? null;
@endphp

@if($blocks && count($blocks) > 0)
    @foreach($blocks as $block)
        @php
            $type = $block['type'] ?? '';
            $data = $block['data'] ?? [];
        @endphp

        {{-- ✏️ Simple Paragraph --}}
        @if($type == 'paragraph')
            <div  class="blog-content lg:text-[16px] text-[14px] text-[#6b7280] leading-[1.65] ">
                {!! $data['content'] ?? '' !!}
            </div>

       

        {{-- 📄 Simple Content --}}
       @elseif($type == 'simple-content')
    <div  data-aos="fade-right" class="w-full flex flex-col gap-4">

        {{-- Sub-heading PEHLE --}}
        @if(!empty($data['title']))
            <h2 class="lg:text-[30px] text-[20px] font-bold text-[#111827] mt-6 dark:text-white">
                {{ $data['title'] }}
            </h2>
        @endif

        {{-- Sub-heading ke BAAD saare paragraphs --}}
        @if(!empty($data['hero-content']))
            <div class="lg:text-[16px] text-[14px] text-[#6b7280] leading-[1.65]">
                {!! $data['hero-content'] !!}
            </div>
        @endif

        @if(!empty($data['section1-content']))
            <div class="lg:text-[16px] text-[14px] text-[#6b7280] leading-[1.65]">
                {!! $data['section1-content'] !!}
            </div>
        @endif

        @if(!empty($data['content_1']))
            <div class="lg:text-[16px] text-[14px] text-[#6b7280] leading-[1.65]">
                {!! $data['content_1'] !!}
            </div>
        @endif

        @if(!empty($data['content_2']))
            <div class="lg:text-[16px] text-[14px] text-[#6b7280] leading-[1.65]">
                {!! $data['content_2'] !!}
            </div>
        @endif

    </div>

        {{-- 🔀 Image & Text --}}
        @elseif($type == 'image-text-block')
            @php $layout = $data['type'] ?? 'text-right'; @endphp

            @if($layout == 'text-right')
                <div class="flex flex-col lg:flex-row items-center justify-between gap-10 mt-6 mb-[48px] w-full">
                    <div class="w-full lg:w-[45%]">
                        <h2 class="lg:text-[30px] text-[20px] font-bold text-[#111827] leading-[1.25] mb-[18px] dark:text-white">
                            {{ $data['title'] ?? '' }}
                        </h2>
                        <div class="lg:text-[16px] text-[14px] text-[#94A3B8] leading-[1.65]">
                            {!! $data['content'] ?? '' !!}
                        </div>
                    </div>
                    <div  data-aos="fade-right" class="w-full lg:w-[48%] lg:h-[590px] bg-[#F3F4F6] rounded-2xl overflow-hidden">
                        <img src="{{ asset('Assests/images/' . basename($data['image'] ?? '')) }}"
                             class="w-full h-full object-cover">
                    </div>
                </div>

            @elseif($layout == 'image-left')
                <div  data-aos="fade-left" class="flex flex-col lg:flex-row items-center justify-between gap-10 mt-6 mb-[48px] w-full">
                    <div class="w-full lg:w-[48%] lg:h-[584px] bg-[#F3F4F6] rounded-2xl overflow-hidden">
                        <img src="{{ asset('Assests/images/' . basename($data['image'] ?? '')) }}"

                             class="w-full h-full object-cover">
                    </div>
                    <div class="w-full lg:w-[45%]">
                        <h2 class="lg:text-[30px] text-[20px] font-bold text-[#111827] leading-[1.25] mb-[18px] dark:text-white">
                            {{ $data['title'] ?? '' }}
                        </h2>
                        <div class="lg:text-[16px] text-[14px] text-[#94A3B8] leading-[1.65]">
                            {!! $data['content'] ?? '' !!}
                        </div>
                    </div>
                </div>

            @elseif($layout == 'full-width-text')
                <div  data-aos="fade-right" class="flex flex-col gap-6 mt-6 mb-[48px] w-full">
                    <h2 class="lg:text-[30px] text-[20px] font-bold text-[#111827] dark:text-white">
                        {{ $data['title'] ?? '' }}
                    </h2>
                    <div class="lg:text-[16px] text-[14px] text-[#94A3B8] leading-[1.65]">
                        {!! $data['content'] ?? '' !!}
                    </div>
                    @if(!empty($data['image']))
                        <div class="w-full bg-[#F3F4F6] rounded-2xl overflow-hidden">
                            <img src="{{ asset('Assests/images/'.basename($data['image'] ?? '')) }}"

                                 class="w-full object-cover">
                        </div>
                    @endif
                </div>
            @endif

        @endif
    @endforeach

@else
    <p class="text-gray-400 text-sm">No content available.</p>
@endif

   {{-- Static Blue CTA Banner --}}
<div  data-aos="fade-right" class="flex rounded-2xl flex-col lg:flex-row items-center justify-between gap-10 mt-6 mb-[48px] w-full bg-[#003BA4]">
    <div class="w-full mx-10 mt-6 lg:mt-0 px-5 lg:px-0">

        {{-- Heading — dynamic --}}
        <h2 class="lg:text-[30px] text-[18px] font-bold text-white leading-[1.25] mb-[18px]">
            {{ $blog->cta_heading ?? 'Launch Your App Today' }}
        </h2>

        {{-- Description — dynamic --}}
        <div class="text-[16px] text-[#94A3B8] leading-[1.65] mb-[14px]">
            {!! $blog->cta_description ?? 'Transform your business with a cutting-edge mobile application.' !!}
        </div>

        {{-- Button — static --}}
        <a href="{{ url('contact') }}"
           class="text-sm font-medium bg-[#f0f0f0] w-40 mt-10 text-[#2563EB] h-10 flex gap-2 items-center justify-center rounded-lg">
            Start Your Project
        </a>

    </div>

    {{-- Image — dynamic --}}
    <div class="w-full lg:w-[48%] h-[584px] bg-[#F3F4F6] rounded-2xl overflow-hidden">
        @if($blog->cta_image)
            <img src="{{ asset('Assests/images/' . basename($blog->cta_image)) }}"
                 alt="CTA"
                 class="w-full h-full object-cover"/>
        @else
            <img src="{{ asset('Assests/images/15a6313d76d03074eeab1fe23e28f55b8d115544.png') }}"
                 alt="CTA"
                 class="w-full h-full object-cover"/>
        @endif
    </div>
</div>

  </div>
</section>

@endsection