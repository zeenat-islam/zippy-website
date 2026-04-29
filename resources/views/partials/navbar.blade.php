<nav class="px-8 py-4 flex items-center justify-between shadow-sm sticky top-0 z-50 bg-white dark:bg-[#010F23]">

    <a href="{{ route('home') }}">
        <img src="{{ asset('Assests/images/zippy logo (1) 1.png') }}" alt="Logo" class="h-10">
    </a>

    {{-- Desktop Nav --}}
    <ul class="hidden md:flex items-center gap-8 text-sm font-medium" style="color:#94A3BB">

        <li class="relative flex items-center gap-2 cursor-pointer" onclick="toggleWhatWeDo()">
            What We Do
            <svg id="arrowIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 transition-transform duration-300">
                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
            </svg>
            <div id="whatWeDoDropdown" class="absolute hidden bg-white rounded-2xl shadow-xl z-50 w-[804px] top-[40px]
             left-[-94px] p-[40px] overflow-y-auto" style="max-height: 80vh;">
                <div class="flex gap-[26px]">
                    <div class="flex flex-col w-[368px] gap-[56px] ">
                        <p class="text-black font-bold text-[40px]">Capabilities</p>
                        <div class="flex flex-col w-[330px] gap-[20px]">
                            <h2 class="text-black font-bold">Digital Transformation</h2>
                            <ul class="flex flex-col gap-2">
                                <li class="text-[#94A3BB] text-[16px] "><a href="{{ route('servicesdetail', ['slug' => 'web-development']) }}">• Web development</a></li>
                                <li class="text-[#94A3BB] text-[16px]"><a href="{{ route('servicesdetail', ['slug' => 'mobile-app-development']) }}">• App Development</a></li>
                                <li class="text-[#94A3BB] text-[16px]"><a href="{{ route('servicesdetail', ['slug' => 'saas-web-development']) }}">• Custom Software Development</a></li>
                                <li class="text-[#94A3BB] text-[16px]"><a href="{{ route('servicesdetail', ['slug' => 'uiux-design']) }}">• UX/UI Design</a></li>
                            </ul>
                        </div>
                        <div class="flex flex-col w-[330px] gap-[20px]">
                            <h3 class="text-black font-bold text-[16px]">Emerging Technologies</h3>
                            <ul class="flex flex-col gap-2">
                                <li class="text-[#94A3BB] text-[14px]"><a href="{{ route('servicesdetail', ['slug' => 'quality-assurance']) }}">• Augmented reality</a></li>
                                <li class="text-[#94A3BB] text-[14px]"><a href="{{ route('servicesdetail', ['slug' => 'blockchain-crypto-development']) }}">• Blockchain & Cryptography</a></li>
                            </ul>
                        </div>
                        <div class="flex flex-col w-[330px] gap-[20px]">
                            <h3 class="text-black font-bold text-[16px]">Gaming</h3>
                            <ul class="flex flex-col gap-2 mb-5">
                                <li class="text-[#94A3BB] text-[14px]"><a href="{{ route('servicesdetail', ['slug' => 'game-development']) }}">• Art & Design</a></li>
                                <li class="text-[#94A3BB] text-[14px]"><a href="{{ route('servicesdetail', ['slug' => 'saas-web-development']) }}">• Web3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-[1px] bg-[#E5E7EB]"></div>
                    <div class="flex flex-col gap-[26px]">
                        <h3 class="text-black font-bold text-[16px]"><a href="{{ route('servicesdetail', ['slug' => 'ai-automation']) }}">Gen AI</a></h3>
                        <h3 class="text-black font-bold text-[16px]"><a href="{{ route('servicesdetail', ['slug' => 'data-analytics-insights']) }}">Data Analytics</a></h3>
                        <h3 class="text-black font-bold text-[16px]"><a href="{{ route('servicesdetail', ['slug' => 'quality-assurance']) }}">Quality Assurance</a></h3>
                        <h3 class="text-black font-bold text-[16px]"><a href="{{ route('servicesdetail', ['slug' => 'cloud-application']) }}">Cybersecurity</a></h3>
                        <h3 class="text-black font-bold text-[16px]"><a href="{{ route('servicesdetail', ['slug' => 'saas-web-development']) }}">SaaS</a></h3>
                        <div class="flex flex-col gap-[20px]">
                            <h3 class="text-black font-bold text-[16px]">E-commerce</h3>
                            <ul class="flex flex-col gap-2">
                                <li class="text-[#94A3BB] text-[14px]"><a href="{{ route('servicesdetail', ['slug' => 'web-development']) }}">• Design & Development</a></li>
                                <li class="text-[#94A3BB] text-[14px]"><a href="{{ route('servicesdetail', ['slug' => 'maintenance-support']) }}">• Maintenance & Support</a></li>
                                <li class="text-[#94A3BB] text-[14px]"><a href="{{ route('servicesdetail', ['slug' => 'automation-apps']) }}">• Automation & Apps</a></li>
                            </ul>
                        </div>
                        <div class="flex flex-col gap-[20px]">
                            <h3 class="text-black font-bold text-[16px]">Cloud</h3>
                            <ul class="flex flex-col gap-2">
                                <li class="text-[#94A3BB] text-[14px]"><a href="{{ route('servicesdetail', ['slug' => 'cloud-application']) }}">• Cloud Application</a></li>
                                <li class="text-[#94A3BB] text-[14px]"><a href="{{ route('servicesdetail', ['slug' => 'cloud-application']) }}">• Cloud Ops & Migration</a></li>
                                <li class="text-[#94A3BB] text-[14px]"><a href="{{ route('servicesdetail', ['slug' => 'cloud-application']) }}">• Cloud maintenance & integration</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </li>

        <li class="flex items-center gap-2 cursor-pointer">
            What We Help
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
            </svg>
        </li>

        <li class="relative flex items-center gap-2 cursor-pointer" onclick="toggleWhatWeAre()">
            What We Are
            <svg id="whatWeAreArrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 transition-transform duration-300">
                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
            </svg>
            <div id="whatWeAreDropdown" class="absolute hidden bg-white rounded-lg shadow-xl w-[345px] top-[40px] left-0 z-50">
                <ul class="flex flex-col gap-2 text-black p-5">
                    <li><a href="{{ url('aboutus') }}">About</a></li>
                    <li><a href="{{ url('team') }}">Our Team</a></li>
                    <li><a href="{{ url('geographics') }}">Geographics</a></li>
                </ul>
            </div>
        </li>

        <li><a href="{{ route('blogs') }}">Blogs</a></li>
        <li><a href="{{url('contact')}}">Join Zippy</a></li>
    </ul>

    <div class="flex items-center justify-center gap-6">
        <div class="theme-toggle" onclick="toggleTheme()" id="themeToggle">
    <div class="toggle-circle" id="toggleCircle">
        <svg id="sunIcon" class="toggle-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"/>
        </svg>
        <svg id="moonIcon" class="toggle-icon hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z"/>
        </svg>
    </div>
    <!-- Dark mode stars -->
    <div class="toggle-stars">
    <span class="star s1">✦</span>
    <span class="star s2">•</span>
    <span class="star s3">✦</span>
</div>
    
</div>
        <button class="text-sm font-medium bg-[#f0f0f0] w-14 h-10 flex gap-2 items-center justify-center" style="color:black">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
            </svg>
        </button>
        <div class="hidden md:flex">
            <button class="started-button">
              <a href="{{url('contact')}}">  Get Started</a>
            </button>
        </div>
    </div>

    {{-- Mobile Menu Button - SIRF YAHAN CHANGE HUA --}}
    <div class="md:hidden relative">
        <button onclick="toggleMenu()" id="menuBtn"
            style="background:#F0F0F0;width:29.41px;height:26.41px;border-radius:4.32px;padding:7.21px"
            class="flex flex-col justify-center items-center gap-1">
            <span id="ham1" class="block w-3 h-0.5 bg-gray-500 transition-all duration-300 origin-center"></span>
            <span id="ham2" class="block w-3 h-0.5 bg-gray-500 transition-all duration-300"></span>
            <span id="ham3" class="block w-3 h-0.5 bg-gray-500 transition-all duration-300 origin-center"></span>
        </button>

        {{-- Mobile Dropdown - SIRF YAHAN CHANGE HUA --}}
        <div id="mobileMenu" class="hidden absolute bg-white shadow-md rounded-lg p-4 z-50" style="width:260px; top:36px; right:0; max-height:80vh; overflow-y:auto;">
            <ul class="flex flex-col text-sm font-medium" style="gap:4px; color:#94A3BB">

                {{-- What We Do --}}
                <li class="flex items-center justify-between cursor-pointer px-2 py-2 rounded-lg hover:bg-gray-50"
                    onclick="toggleMobileSub('mob-whatwedo', this)">
                    What We Do
                    <svg class="size-3 transition-transform duration-300" xmlns="https://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
                    </svg>
                </li>
                <div id="mob-whatwedo" style="max-height:0; overflow:hidden; transition:max-height 0.3s ease; padding-left:12px;">
                    <div class="py-2 flex flex-col gap-2">
                        <p class="text-xs font-bold text-black">Digital Transformation</p>
                        <a href="{{ route('servicesdetail', ['slug' => 'web-development']) }}" class="text-[#94A3BB] text-xs">• Web development</a>

<a href="{{ route('servicesdetail', ['slug' => 'mobile-app-development']) }}" class="text-[#94A3BB] text-xs">• App Development</a>

<a href="{{ route('servicesdetail', ['slug' => 'saas-web-development']) }}" class="text-[#94A3BB] text-xs">• Custom Software Development</a>

<a href="{{ route('servicesdetail', ['slug' => 'uiux-design']) }}" class="text-[#94A3BB] text-xs">• UX/UI Design</a>

<a href="{{ route('servicesdetail', ['slug' => 'blockchain-crypto-development']) }}" class="text-[#94A3BB] text-xs">• Blockchain & Cryptography</a>

<a href="{{ route('servicesdetail', ['slug' => 'game-development']) }}" class="text-[#94A3BB] text-xs">• Art & Design</a>

<a href="{{ route('servicesdetail', ['slug' => 'gaming-art-design']) }}" class="text-[#94A3BB] text-xs">• Web3</a>

<a href="{{ route('servicesdetail', ['slug' => 'ai-automation']) }}" class="text-[#94A3BB] text-xs">• Gen AI</a>

<a href="{{ route('servicesdetail', ['slug' => 'data-analytics-insights']) }}" class="text-[#94A3BB] text-xs">• Data Analytics</a>

<a href="{{ route('servicesdetail', ['slug' => 'quality-assurance']) }}" class="text-[#94A3BB] text-xs">• Quality Assurance</a>

<a href="{{ route('servicesdetail', ['slug' => 'saas-web-development']) }}" class="text-[#94A3BB] text-xs">• SaaS</a>
                    </div>
                </div>

                {{-- What We Help --}}
                <li class="flex items-center justify-between cursor-pointer px-2 py-2 rounded-lg hover:bg-gray-50">
                    What We Help
                    <svg class="size-3" xmlns="https://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
                    </svg>
                </li>

                {{-- What We Are --}}
                <li class="flex items-center justify-between cursor-pointer px-2 py-2 rounded-lg hover:bg-gray-50"
                    onclick="toggleMobileSub('mob-whatweare', this)">
                    What We Are
                    <svg class="size-3 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
                    </svg>
                </li>
                <div id="mob-whatweare" style="max-height:0; overflow:hidden; transition:max-height 0.3s ease; padding-left:12px;">
                    <div class="py-2 flex flex-col gap-2">
                        <a href="{{ url('aboutus') }}" class="text-[#94A3BB] text-xs">• About</a>
                        <a href="{{ url('team') }}" class="text-[#94A3BB] text-xs">• Our Team</a>
                        <a href="{{ url('geographics') }}" class="text-[#94A3BB] text-xs">• Geographics</a>
                    </div>
                </div>

                <li class="px-2 py-2 rounded-lg hover:bg-gray-50">
                    <a href="{{ url('blogs') }}" style="color:inherit; text-decoration:none">Blogs</a>
                </li>
                <li class="px-2 py-2 rounded-lg hover:bg-gray-50">
                   <a href="{{ url('contact') }}"> Join Zippy</a>
                </li>
            </ul>

            <button class="mt-4 w-full text-white text-xs font-medium py-2 rounded-full"
                style="background:linear-gradient(to right,#00C6FF,#0072FF)">
                Get Started
            </button>
        </div>
    </div>

</nav>