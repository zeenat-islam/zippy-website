@extends('layouts.app')
@section('title', 'Portfolio — Zippy Solutions')



@push('styles')
<link rel="stylesheet" href="{{ asset('src/portfolio.css') }}">
@endpush

@section('content')
<section class="w-full  py-16 dark:bg-[#010F23]">
    <div class="mx-auto px-4 sm:px-6 lg:px-12 max-w-[1348px]">
        
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-8">
            
            <div class="flex flex-col gap-4">
                <button class="self-start uppercase badge text-[12px] font-[600] leading-[1.6] tracking-[-0.012em] px-4 py-1 cursor-pointer">
                  <a href="portfolio.html">our portfolio</a>
                </button>
                <h1 class="text-[24px] md:text-[42px] lg:text-[48px] font-[700] leading-[1.4] md:leading-[60px] tracking-[-0.5px] text-black dark:text-white">
                    Explore Our Latest Digital Projects
                </h1>

                <p class="text-[#94A3B8] text-[20px]">Explore our diverse range of projects across multiple industries and  technologies</p>
            </div>
        </div>
    </div>
</section>


<section class="bg-[#E5E7EB]">
    <div class=" dark:bg-[#010F23] pt-6 pb-8">
        <div class=" flex justify-between dark:bg-[#06254E] bg-white lg:mx-20 mx-3 lg:p-10 p-4 rounded-lg ">
            <h1 class="">Filters</h1>
            
                <button id="filterToggleBtn" class="flex  dark:bg-[#010F23] gap-2 justify-center items-center border bg-[#E5E7EB] p-1 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                    </svg>
                     <svg id="filterArrow" 
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-3 transition-transform duration-300 dark:bg-[#010F23]">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                 </button>
                
            
     </div>

<div  id="filterContent" class="hidden  ">
         <div class="bg-white lg:mx-20 mx-3 lg:p-10 p-4 border-t dark:bg-[#06254E] dark:border-none " >
            <h1 class="text-[18px] font-bold dark:text-white ">Services</h1>
                <div class="flex gap-2 flex-wrap">
    <button data-filter="service" data-value="ai-development" 
    class="btn-service flex text-[14px] my-3 px-4 py-2 justify-center items-center border rounded-full border-gray-300 dark:border-none">
    <a href="#">AI Development</a>
</button>

<button data-filter="service" data-value="llm-integration" 
    class="btn-service flex text-[14px] my-3 px-4 py-2 justify-center items-center border rounded-full border-gray-300 dark:border-none">
    <a href="#">LLM Integration</a>
</button>

    <button data-filter="service" data-value="vector-semantic-search" 
    class="btn-service flex text-[14px] my-3 px-4 py-2 justify-center items-center border rounded-full border-gray-300 dark:border-none">
    <a href="#">Vector Semantic Search</a>
</button>

                        <button  data-filter="service" data-value="web-development" 
    class="btn-service flex text-[14px] my-3 px-4 py-2 justify-center items-center border rounded-full border-gray-300 dark:border-none">
                            <a href="#">Chatbot Development</a>
                        </button>

                        <button  data-filter="service" data-value="web-development" 
    class="btn-service flex text-[14px] my-3 px-4 py-2 justify-center items-center border rounded-full border-gray-300 dark:border-none">
                            <a href="#">Mobile App Development</a>
                        </button>

                        <button data-filter="service" data-value="ui-ux-design" 
    class="btn-service flex text-[14px] my-3 px-4 py-2 justify-center items-center border rounded-full border-gray-300 dark:border-none">
                            <a href="#">UI/UX Design</a>
                        </button>

                        <button  data-filter="service" data-value="saas-development" 
    class="btn-service flex text-[14px] my-3 px-4 py-2 justify-center items-center border rounded-full border-gray-300 dark:border-none">
                            <a href="#">SaaS Development</a>
                        </button>
                </div>
                
            
        </div>

<!--industries-->

        <div class="bg-white lg:mx-20 mx-3 lg:p-10 p-4 border-t dark:bg-[#06254E] dark:border-none ">
            <h1 class="text-[18px] font-bold dark:text-white ">Industries</h1>
                <div class="flex gap-4 flex-wrap">
                        <button data-filter="industry" data-value="healthcare" 
    class="btn-service flex text-[14px] my-3 px-4 py-2 justify-center items-center border rounded-full border-gray-300 dark:border-none">
                            <a href="#">Healthcare</a>
                        </button>

                        <button  data-filter="industry" data-value="e-commerce" 
    class="btn-service flex text-[14px] my-3 px-4 py-2 justify-center items-center border rounded-full border-gray-300 dark:border-none">
                            <a href="#">E-commerce</a>
                        </button>

                        <button  data-filter="industry" data-value="education" 
    class="btn-service flex text-[14px] my-3 px-4 py-2 justify-center items-center border rounded-full border-gray-300 dark:border-none">
                            <a href="#">Education</a>
                        </button>

                        <button data-filter="industry" data-value="real-estate" 
    class="btn-service flex text-[14px] my-3 px-4 py-2 justify-center items-center border rounded-full border-gray-300 dark:border-none">
                            <a href="#">Real Estate</a>
                        </button>

                        <button  data-filter="industry" data-value="travel" 
    class="btn-service flex text-[14px] my-3 px-4 py-2 justify-center items-center border rounded-full border-gray-300 dark:border-none">
                            <a href="#">Travel</a>
                        </button>

                        <button  data-filter="industry" data-value="technology" 
    class="btn-service flex text-[14px] my-3 px-4 py-2 justify-center items-center border rounded-full border-gray-300 dark:border-none">
                            <a href="#">Technology</a>
                        </button>

                        <button data-filter="industry" data-value="retail" 
    class="btn-service flex text-[14px] my-3 px-4 py-2 justify-center items-center border rounded-full border-gray-300 dark:border-none">
                            <a href="#">Retail</a>
                        </button>
                </div>
                
            
        </div>




<!--Project Type-->
        <div class="bg-white lg:mx-20 mx-3 lg:p-10 p-4 border-t dark:bg-[#06254E] dark:border-none  ">
            <h1 class="text-[18px] font-bold dark:text-white ">Project Type</h1>
                <div class="flex gap-4 flex-wrap">
                        <button  data-filter="project" data-value="mobile-apps" 
    class="btn-service flex text-[14px] my-3 px-4 py-2 justify-center items-center border rounded-full border-gray-300 dark:border-none">
                            <a href="#">Mobile Apps</a>
                        </button>

                        <button data-filter="project" data-value="websites"  class="btn-service flex text-[14px] my-3 px-4 py-2 justify-center items-center border rounded-full border-gray-300 dark:border-none">
                            <a href="#">Websites</a>
                        </button>

                        <button data-filter="project" data-value="web-apps"  class="btn-service flex text-[14px] my-3 px-4 py-2 justify-center items-center border rounded-full border-gray-300 dark:border-none">
                            <a href="#">Web Apps</a>
                        </button>

                        <button data-filter="project" data-value="dashboards"  class="btn-service flex text-[14px] my-3 px-4 py-2 justify-center items-center border rounded-full border-gray-300 dark:border-none">
                            <a href="#">Dashboards</a>
                        </button>

                        <button data-filter="project" data-value="saas" class="btn-service flex text-[14px] my-3 px-4 py-2 justify-center  items-center border rounded-full border-gray-300 dark:border-none">
                            <a href="#">SaaS Platforms</a>
                        </button>

                        <button data-filter="project" data-value="admin" class="btn-service flex text-[14px] my-3 px-4 py-2 justify-center  items-center border rounded-full border-gray-300 dark:border-none">
                            <a href="#">Admin Panels</a>
                        </button>
                </div>
                
            
        </div>
    </div
    </div>    
</section>
   



<section class="mx-auto px-4 sm:px-6 lg:px-18 w-full py-16 dark:bg-[#010F23]">

 <!-- Cards grid: 1-col mobile, 2-col tablet, 3-col desktop -->
      <div class="grid lg:mx-20 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        @foreach($projects as $project)
            <article class="{{ $loop->index >= 3 ? 'hidden' : '' }} bg-white dark:bg-[#06254E] rounded-xl overflow-hidden flex flex-col shadow-sm">
                <img src="{{ asset('Assests/images/' . basename($project->image)) }}" alt="{{ $project->title }}" class="w-full h-[200px] object-cover">
                
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
                        
                        <a href="{{ $project->project_url ?? '#' }}" class="dark:text-[#00C6FF] text-[#003BA4] font-semibold text-[12px] flex items-center gap-1 hover:underline">
                            View Project
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 transition-transform duration-300 ease-in-out hover:translate-x-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
        @endforeach

    </div>

<div id="show-more-btn" class="flex justify-center items-center mt-10 ">
  <a 
     class="flex items-center justify-center gap-2 
     btn-project 
     text-[#003BA4] dark:text-white 
     dark:border-white 
     px-6 py-2 rounded-full text-sm font-medium

     transition-all duration-300 ease-in-out
     hover:bg-[#003BA4] hover:text-white
     hover:gap-3
     hover:shadow-lg hover:cursor-pointer
     ">

    Load More projects

    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
         stroke-width="1.5" stroke="currentColor" 
         class="size-4 transition-transform duration-300 ease-in-out hover:translate-x-1">
      <path stroke-linecap="round" stroke-linejoin="round" 
            d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
    </svg>

  </a>
</div>
</section>

@endsection



@push('scripts')
<script src="{{ asset('src/portfolio.js') }}"></script>
@endpush