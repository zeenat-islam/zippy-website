@props(['image', 'title', 'short_desc', 'tags' => [], 'slug', 'class' => ''])
<div  data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000" class="service-card {{ $class }} bg-white dark:bg-[#06254E] flex flex-col rounded-lg p-[14px] w-full lg:w-[407px] shadow-md">

    <img class="object-cover w-full h-[182px] rounded-[6.79px]"
        src="{{ asset('Assests/images/' . $image) }}"
         alt="{{ $title }}">

    <div class="flex flex-col gap-3 px-1">

        <div class="flex flex-col gap-2">
            <h3 class="font-bold text-[16px] text-black dark:text-white">
                {{ $title }}
            </h3>

            <p class="text-[#0000009E] text-[12px] leading-[1.6] dark:text-white">
                {{ $short_desc }}
            </p>
        </div>

        <div class="border-b border-gray-200 dark:border-none pb-4">
            <div class="flex flex-wrap gap-[6px]">

             @foreach($tags ?? [] as $tag)
        <button class="text-[10px] bg-[#00C6FF] dark:bg-[#00C6FF33] rounded-full px-3 py-1 text-white whitespace-nowrap">
          
            @if(is_array($tag))
                {{ $tag['tag_name'] ?? 'Tag' }}
            @else
                {{ $tag }}
            @endif
        </button>
    @endforeach
            </div>
        </div>

        <a href="{{ route('servicesdetail', ['slug' => $slug]) }}" class=" detail-btn flex justify-between h-[54px] dark:bg-[#010F23] w-full items-center pt-1 bg-[#F8F8F8] border rounded-full px-4 py-3 hover:bg-gray-100 transition no-underline">
            <span class="text-[13px] text-gray-500 dark:text-white">View Details</span>

            <div class="w-[42px] h-[42px] mt-2 rounded-full dark:bg-[#00C6FF] bg-white flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-[#00C6FF] dark:text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                </svg>
            </div>
        </a>

    </div>
</div>