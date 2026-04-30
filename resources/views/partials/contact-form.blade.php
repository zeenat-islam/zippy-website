 <!-- Header -->
  <div  data-aos="fade-up"
     data-aos-anchor-placement="top-center" class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-12 " id="contact-form">
      <div class="flex flex-col max-w-[620px] badge mt-10">
        <button class="self-start badge text-[12px] font-[600] leading-[1.6] tracking-[-0.012em]  cursor-pointer">
          CONTACT US
        </button>
        <h1 class="text-[24px] md:text-[42px] lg:text-[44px] font-[700] leading-[1.2] tracking-[-0.03em] text-white ">
          Get in Touch 
        </h1>
    </div>
    </div>

  <div class="flex gap-20 flex-col lg:flex-row  mt-10 pb-20" data-aos="fade-up">

 
    <!-- Contact Form Card -->
   <section data-aos="zoom-in" class="bg-white rounded-2xl dark:bg-[#06254E] dark:text-white px-6 w-full pb-10 lg:w-[766px] lg:min-h-[660px] lg:mb-10" data-purpose="form-container">
  <form id="contactForm" class="space-y-6 overflow-hidden" method="POST" novalidate action="{{ route('contact.submit') }}">
    @csrf

    {{-- Success Message --}}
    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div data-purpose="input-group" class="flex flex-col gap-4 mt-10 px-6">
            <label class="label-text text-black dark:text-white" for="full_name">Full Name *</label>
            <input class="input-field dark:bg-[#06254E] dark:placeholder:text-gray-400 @error('full_name') border-red-500 @enderror"
                id="full_name" name="full_name" placeholder="Your full name" type="text" value="{{ old('full_name') }}" required />
            <span id="errorName" class="text-red-500 text-sm hidden mt-1">Full name is required</span>
            @error('full_name')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div data-purpose="input-group" class="flex flex-col gap-4 mt-10 px-6">
            <label class="label-text text-black dark:text-white " for="email">Email Address *</label>
            <input class="input-field dark:bg-[#06254E] text-black dark:placeholder:text-gray-400 @error('email') border-red-500 @enderror"
                id="email" name="email" placeholder="your@email.com" type="email" value="{{ old('email') }}" required />
            <span id="errorEmail" class="text-red-500 text-sm hidden mt-1">Please enter a valid email</span>
            @error('email')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div data-purpose="input-group" class="flex flex-col gap-4 px-6">
            <div class="flex flex-col gap-2 ">
                <label class="label-text text-black dark:text-white">Phone Number *</label>
                <div class="relative w-full border rounded flex items-center dark:border-gray-700">
                    <div id="selected" class="flex items-center border-r px-3 gap-2 cursor-pointer dark:border-gray-700">
                        <img id="flag" src="" class="w-4 h-3" />
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="size-3 dark:stroke-gray">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </div>
                    <input type="tel" id="phone_input" name="phone" value="{{ old('phone') }}"
                        class="flex-1 px-3 py-2 outline-none dark:bg-[#06254E]  text-black bg-white" placeholder="Phone number">
                    <div id="dropdown" class="absolute top-full left-0 bg-white dark:bg-[#06254E] border dark:border-gray-700 hidden max-h-60 overflow-y-auto z-50 w-full rounded-lg shadow-lg"></div>
                </div>
                <span id="errorPhone" class="text-red-500 text-sm hidden mt-1">Phone number is required</span>
                @error('phone') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
            </div> 
        </div>

     <div data-purpose="input-group" class="flex flex-col gap-2 px-6">
    <label class="label-text mb-2 text-black dark:text-white" for="service">Service Selection *</label>
    <div class="relative w-full">
        <select 
            id="service" 
            name="service" 
            required
            class="w-full p-3 border border-gray-300 rounded-lg outline-none bg-white  text-black dark:bg-[#06254E] dark:text-white dark:border-gray-700 appearance-none cursor-pointer">
            <option value="">Select a service</option>
            <option value="consulting" {{ old('service') == 'consulting' ? 'selected' : '' }}>Consulting</option>
            <option value="development" {{ old('service') == 'development' ? 'selected' : '' }}>Development</option>
        </select>
        <div class="absolute right-4 top-8 -translate-y-1/2 pointer-events-none">
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>
    <span id="errorService" class="text-red-500 text-sm hidden mt-1 text-black">Please select a service</span>
</div>
    </div>

    {{-- Job Inquiry Field --}}
    <div data-purpose="input-group" class="flex flex-col gap-2 px-6">
        <label class="label-text text-black dark:text-white" for="job_inquiry">I am looking for a job at Zippy Solutions *</label>
        <div class="relative">
            <select class="appearance-none w-full p-3 dark:bg-[#06254E] text-black dark:text-white  bg-white" id="job_inquiry" name="job_inquiry" required>
                <option value="">(000) 123-4567</option>
                <option value="yes" {{ old('job_inquiry') == 'yes' ? 'selected' : '' }}>Yes</option>
                <option value="no" {{ old('job_inquiry') == 'no' ? 'selected' : '' }}>No</option>
                <option value="maybe" {{ old('job_inquiry') == 'maybe' ? 'selected' : '' }}>Maybe Later</option>
            </select>
            <div class="absolute right-3 top-8 -translate-y-1/2 pointer-events-none">
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
        <span id="errorJob" class="text-red-500 text-sm hidden mt-1 ">Please select an option</span>
        @error('job_inquiry') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
    </div>

    <div data-purpose="input-group" class="flex flex-col gap-2 px-6">
        <label class="label-text text-black dark:text-white" for="details">Project Details *</label>
        <textarea class="input-field resize-none dark:bg-[#06254E] dark:text-white text-black" id="details" name="details" rows="6" required>{{ old('details') }}</textarea>
        <span id="errorDetails" class="text-red-500 text-sm hidden mt-1">Details are required</span>
        @error('details') <span class="text-red-500 text-sm ">{{ $message }}</span> @enderror
    </div>

   <div class="px-6 pb-6 mt-4" >
   <button type="submit" 
    class="w-full text-white bg-[#00C6FF] font-bold py-4 rounded-xl shadow-lg transition-all duration-300"
    onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 0 20px rgba(0,198,255,0.4)'; this.style.background='#00B5E6';"
    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow=''; this.style.background='#00C6FF';"
    onmousedown="this.style.transform='translateY(0)';">
    Send Message
</button>
</div>
</form>
    </section>

    <!-- Sidebar -->
    <aside class="w-full lg:w-1/3 flex flex-col space-y-12 lg:mt-10" data-purpose="sidebar-info">
      <!-- Global Presence -->
      <div class="flex flex-col space-y-4" data-purpose="info-block">
        <div class="flex items-center space-x-3">
          <div class="sidebar-icon">
            <img src="Assests/images/svg (3).svg" alt="Global Presence Icon" class="w-6 h-6">
          </div>
          <h2 class="text-white text-[20px]">Global Presence</h2>
        </div>
        <p class=" leading-relaxed font-medium text-[16px] w-full  lg:w-[254px] text-[#6B7280]">We operate across multiple continents with offices in key business hubs.</p>
        <a class="text-[#00C6FF] text-[16px] hover:underline inline-flex items-center" href="#">Learn More</a>
      </div>
      <!-- Global Leaders -->
      <div class="flex flex-col space-y-4" data-purpose="info-block">
        <div class="flex items-center space-x-3">
          <div class="sidebar-icon">
            <img src="Assests/images/Vector (2).svg" alt="Global Leaders Icon" class="w-6 h-6">
          </div>
          <h2 class="text-white text-[20px]">Global Leaders</h2>
        </div>
        <p class=" leading-relaxed font-medium lg:text-[16px] text-[14px] lg:w-[254px] w-full text-[#6B7280]">Our leadership team brings decades of industry experience and innovation.</p>
        <a class="text-[#00C6FF] lg:text-[16px] text-[14px]  hover:underline inline-flex items-center"  href="#">Learn More</a>
      </div>
    </aside>
  </div>
