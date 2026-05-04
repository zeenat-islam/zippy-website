<footer class="dark:bg-[#010F23] bg-white">
  <div class="w-full dark:bg-[#010F23] py-6 bg-white mt-10 lg:px-20 px-6 flex-col lg:flex-row flex justify-between items-start">

        <!-- Logo + Description + Social -->
        <div class="lg:w-[268px]">
            <img src="{{ asset('Assests/images/zippy logo (1) 1.png') }}" alt="Zippy Logo"/>
            <p class="pt-8 text-[#94A3B8]">Empowering businesses with innovative, scalable, and high-performance digital solutions.</p>
            <div class="flex items-center gap-3 mt-4 pb-5">
                <a href="https://www.linkedin.com/company/zippy-ecom-solutions/?originalSubdomain=pk" target="_blank" class="w-9 h-9 rounded-full bg-[#00AEEF] flex items-center justify-center hover:opacity-80 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-4 h-4"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
                <a href="https://twitter.com" target="_blank" class="w-9 h-9 rounded-full bg-[#00AEEF] flex items-center justify-center hover:opacity-80 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-4 h-4"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                </a>
            </div>
        </div>

        <!-- Quick Links  -->
        <div class="flex-col flex self-start lg:items-center lg:w-[268px]">
            <h2 class="text-[18px] pb-4 dark:text-white text-black">Quick Links</h2>
            <ul class="flex flex-col gap-2">
                <li><a href="{{ route('home') }}" class="text-[#94A3B8] text-[14px] hover:underline">Home</a></li>
                <li><a href="{{ route('about') }}" class="text-[#94A3B8] text-[14px] hover:underline">About Us</a></li>
                <li><a href="{{ route('portfolio') }}" class="text-[#94A3B8] text-[14px] hover:underline">Portfolio</a></li>
                <li><a href="{{ route('contact') }}" class="text-[#94A3B8] text-[14px] hover:underline">Contact Us</a></li>
            </ul>
        </div>

        <!-- What We Do + What We Are with dropdowns -->
        <div class="flex-col flex gap-5 w-[268px] pb-8 self-start lg:items-center">
            <h2 class="text-[18px] dark:text-white lg:mt-0 mt-4 text-black">Quick Links</h2>
            <ul class="flex flex-col gap-6">

                <!-- What We Do -->
                <li class="flex flex-col gap-2">
                    <button onclick="toggleFooterSection('footer-whatwedo')"
                        class="flex items-center gap-1 text-[#94A3B8] text-[14px] hover:underline cursor-pointer">
                        What We Do
                        <svg id="footer-whatwedo-arrow" class="size-3 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
                        </svg>
                    </button>
                    <ul id="footer-whatwedo" class="hidden flex-col gap-2 pl-3">
                        <li><a href="{{ route('servicesdetail', ['slug' => 'web-development']) }}" class="text-[#94A3B8] text-[13px] hover:underline">• Web Development</a></li>
                        <li><a href="{{ route('servicesdetail', ['slug' => 'mobile-app-development']) }}" class="text-[#94A3B8] text-[13px] hover:underline">• App Development</a></li>
                        <li><a href="{{ route('servicesdetail', ['slug' => 'saas-web-development']) }}" class="text-[#94A3B8] text-[13px] hover:underline">• Custom Software Development</a></li>
                        <li><a href="{{ route('servicesdetail', ['slug' => 'uiux-design']) }}" class="text-[#94A3B8] text-[13px] hover:underline">• UX/UI Design</a></li>
                        <li><a href="{{ route('servicesdetail', ['slug' => 'ai-automation']) }}" class="text-[#94A3B8] text-[13px] hover:underline">• Gen AI</a></li>
                        <li><a href="{{ route('servicesdetail', ['slug' => 'data-analytics-insights']) }}" class="text-[#94A3B8] text-[13px] hover:underline">• Data Analytics</a></li>
                        <li><a href="{{ route('servicesdetail', ['slug' => 'quality-assurance']) }}" class="text-[#94A3B8] text-[13px] hover:underline">• Quality Assurance</a></li>
                        <li><a href="{{ route('servicesdetail', ['slug' => 'blockchain-crypto-development']) }}" class="text-[#94A3B8] text-[13px] hover:underline">• Blockchain & Cryptography</a></li>
                        <li><a href="{{ route('servicesdetail', ['slug' => 'game-development']) }}" class="text-[#94A3B8] text-[13px] hover:underline">• Game Development</a></li>
                        <li><a href="{{ route('servicesdetail', ['slug' => 'cloud-application']) }}" class="text-[#94A3B8] text-[13px] hover:underline">• Cloud Application</a></li>
                    </ul>
                </li>

                <!-- What We Are -->
                <li class="flex flex-col gap-2">
                    <button onclick="toggleFooterSection('footer-whatweare')"
                        class="flex items-center gap-1 text-[#94A3B8] text-[14px] hover:underline cursor-pointer">
                        What We Are
                        <svg id="footer-whatweare-arrow" class="size-3 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
                        </svg>
                    </button>
                    <ul id="footer-whatweare" class="hidden flex-col gap-2 pl-3">
                        <li><a href="{{ url('aboutus') }}" class="text-[#94A3B8] text-[13px] hover:underline">• About</a></li>
                        <li><a href="{{ url('team') }}" class="text-[#94A3B8] text-[13px] hover:underline">• Our Team</a></li>
                        <li><a href="{{ url('geographics') }}" class="text-[#94A3B8] text-[13px] hover:underline">• Geographics</a></li>
                    </ul>
                </li>

                <li><a href="{{ url('blogs') }}" class="text-[#94A3B8] text-[14px] hover:underline">Blogs</a></li>
                <li><a href="{{ url('contact') }}" class="text-[#94A3B8] text-[14px] hover:underline">Join Zippy</a></li>

            </ul>
        </div>

        <!-- Contact Us  -->
        <div class="flex flex-col gap-2 lg:w-[268px] self-start">
            <h2 class="pb-3 dark:text-white text-black">Contact Us</h2>
            <div class="flex items-center gap-4">
                <a href="#" class="w-9 h-9 rounded-full bg-[#00C6FF] flex items-center justify-center hover:opacity-80 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>
                    </svg>
                </a>
                <p class="text-[#94A3B8] text-[13px]">shahzaib@zippypk.com</p>
            </div>
            <div class="flex items-center gap-4">
                <a href="#" class="w-9 h-9 rounded-full bg-[#00C6FF] flex items-center justify-center hover:opacity-80 transition">
                    <img src="{{ asset('Assests/images/svg (4).svg') }}" alt="Phone" class="w-4 h-4">
                </a>
                <p class="text-[#94A3B8] text-[13px]">+92311 5737012</p>
            </div>
            <div class="flex items-center gap-4">
                <a href="#" class="w-9 h-9 rounded-full bg-[#00C6FF] flex items-center justify-center hover:opacity-80 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>
                    </svg>
                </a>
                <p class="text-[#94A3B8] text-[13px]">DHA-II, Islamabad, Near Giga Mall</p>
            </div>
        </div>

    </div>

    <!-- Bottom bar -->
    <div class="bg-[#06254E] text-white flex items-center gap-2 justify-between flex-wrap mx-5 lg:mx-20 border rounded-2xl py-3 mb-4 px-6">
        <p class="text-[14px]">© 2026 Zippy Ecom Solutions. All Rights Reserved.</p>
        <div>
            <a href="#" class="text-[14px] hover:underline ml-4">Privacy Policy</a>
            <a href="#" class="text-[14px] hover:underline ml-4 border-l border-white pl-4">Terms & Conditions</a>
        </div>
    </div>

    <script>
    function toggleFooterSection(id) {
        const section = document.getElementById(id);
        const arrow = document.getElementById(id + '-arrow');
        if (section.classList.contains('hidden')) {
            section.classList.remove('hidden');
            section.classList.add('flex');
            if (arrow) arrow.style.transform = 'rotate(180deg)';
        } else {
            section.classList.add('hidden');
            section.classList.remove('flex');
            if (arrow) arrow.style.transform = 'rotate(0deg)';
        }
    }
    </script>

</footer>