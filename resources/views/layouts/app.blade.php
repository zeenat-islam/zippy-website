<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Zippy Solutions')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('src/output.css') }}"/>
    <link rel="stylesheet" href="{{ asset('src/style.css') }}"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    @stack('styles')
</head>
<body>
    @if(session('success'))
    <div id="success-alert" class="fixed top-5 left-1/2 -translate-x-1/2 z-[100] w-[90%] max-w-md shadow-2xl animate-bounce-short" role="alert">
        <div class="flex items-center p-4 rounded-lg border border-green-200 bg-green-50 dark:bg-[#06254E] dark:border-green-800 shadow-sm">
            <svg class="flex-shrink-0 w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
            </svg>
            <div class="ms-3 text-sm font-bold">
                {{ session('success') }}
            </div>
            <button type="button" onclick="this.closest('#success-alert').remove()" class="ms-auto bg-transparent text-gray-400 hover:text-gray-900 rounded-lg p-1.5 inline-flex items-center justify-center h-8 w-8">
                <svg class="w-3 h-3" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    </div>
@endif

@include('partials.navbar')
<main>
        @yield('content')
</main>
@include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script src="{{ asset('src/zippy.js') }}"></script>
    <script src="{{asset('src/blogs.js')}}"></script>
    @stack('scripts')
</body>
</html>