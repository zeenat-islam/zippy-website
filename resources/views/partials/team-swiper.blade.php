<div class="flex items-center justify-between mb-6 gap-4">
    <!-- Left Side: Badge + H1 -->
    
    <div class="flex flex-col gap-4">
       <button class="self-start badge text-[11px] sm:text-[12px] font-[600] lg:px-4 py-1">
        OUR TEAMS
      </button>

       <h1 class="text-[22px] sm:text-[28px] md:text-[38px] lg:text-[42px] font-[700] leading-[1.3] tracking-[-0.5px] text-black dark:text-white">
        See Our Skilled Expert Team
      </h1>
    </div>

    <!-- Right Side: Arrows -->
     <div class="flex items-center gap-3 flex-shrink-0 self-end mb-1">
      <button id="teamPrev" class="w-10 h-10 bg-[#E5E7EB] dark:bg-[#06254E] rounded-full flex items-center justify-center hover:bg-[#00C6FF1A] hover:border hover:border-[#00C6FF] transition-all cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>
      </button>
      <button id="teamNext" class="w-10 h-10 bg-[#E5E7EB] rounded-full dark:bg-[#06254E] flex items-center justify-center hover:bg-[#00C6FF1A] hover:border hover:border-[#00C6FF] transition-all cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Swiper -->
 <div class="swiper mySwiper">
    <div class="swiper-wrapper">

        @foreach($team as $member)
          <div class="swiper-slide rounded-2xl ">
    <div class="group team-slider relative flex lg:flex-row flex-col  items-stretch rounded-2xl overflow-hidden h-[260px]
            shadow-lg hover:shadow-2xl hover:shadow-blue-900/40
            transition-all duration-400 ease-out hover:-translate-y-1">
        
        {{-- Image --}}
        <div class="w-[170px] flex-shrink-0 overflow-hidden relative">
            <img loading="lazy" src="{{ asset('Assests/images/' . basename($member->image)) }}"  
                alt="{{ $member->name }}" 
                class="w-full h-full object-cover object-top 
                       transition-transform duration-700 group-hover:scale-105">
            {{-- Image overlay on hover --}}
            <div class="absolute inset-0 bg-gradient-to-r from-transparent to-[#06254E]/40 
                        opacity-0 group-hover:opacity-100 transition-opacity duration-400"></div>
        </div>
       
        {{-- Glowing left border on hover --}}
        <div class="absolute left-[170px] top-0 w-[2px] h-full bg-[#00C6FF] 
                    scale-y-0 group-hover:scale-y-100 transition-transform duration-400 origin-top"></div>

        {{-- Content --}}
        <div class="flex flex-col px-5 py-4 h-full flex-1">
            
            <h2 class="dark:text-white text-black font-[700] text-[18px] leading-tight
                       group-hover:text-[#00C6FF] transition-colors duration-300">
                {{ $member->name }}
            </h2>
            
            <p class="text-[#00C6FF] font-[500] text-[13px] mt-1">
                {{ $member->designation }}
            </p>
            
            <div class="w-[60px] h-[2px] rounded-full bg-[#00C6FF] my-3
                        group-hover:w-[100px] transition-all duration-400"></div>
            
            <p class="text-[11px] leading-relaxed text-[#94A3B8] flex-1"
               style="display:-webkit-box; -webkit-line-clamp:3; -webkit-box-orient:vertical; overflow:hidden;">
                {{ $member->description }}
            </p>

            {{-- Social Icons --}}
            <div class="flex items-center gap-2 mt-auto pt-2
                        translate-y-1 group-hover:translate-y-0 transition-transform duration-300">
                @if($member->linkedin_url)
                    <a href="{{ $member->linkedin_url }}" target="_blank" 
                       class="w-8 h-8 rounded-full bg-[#00C6FF]/50 border border-[#00AEEF]/30
                              flex items-center justify-center 
                              transition-all duration-300 hover:bg-[#0077B5] hover:border-[#0077B5] hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-3 h-3">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                @endif

                @if($member->twitter_url)
                    <a href="{{ $member->twitter_url }}" target="_blank" 
                       class="w-8 h-8 rounded-full bg-[#00C6FF]/50 border border-[#00AEEF]/30
                              flex items-center justify-center 
                              transition-all duration-300 hover:bg-[#1DA1F2] hover:border-[#1DA1F2] hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-3 h-3">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                @endif

                @if($member->instagram_url)
                    <a href="{{ $member->instagram_url }}" target="_blank" 
                       class="w-8 h-8 rounded-full bg-[#00C6FF]/50 border border-[#00AEEF]/30
                              flex items-center justify-center 
                              transition-all duration-300 hover:bg-[#E1306C] hover:border-[#E1306C] hover:scale-110">
                        <svg role="img" viewBox="0 0 24 24" fill="white" class="w-3 h-3" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/>
                        </svg>
                    </a>
                @endif
            </div>
        </div>
    </div>
</div> @endforeach

    </div> </div> 
  
</section>


  
 


