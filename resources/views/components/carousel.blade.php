{{-- <!-- Tambahkan Script Flowbite -->
<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script> --}}

{{-- <div id="default-carousel" class="relative w-full " data-carousel="static">
    <div class="relative py-8 px-12 lg:px-24">
        <div class="overflow-hidden relative w-full h-screen">
            <!-- Slide 1 -->
            <div class="carousel-item absolute inset-0 transition-opacity duration-700 ease-in-out z-10">
                <img class="block w-full" src="{{ asset('carousel1.png') }}" alt="Slide 1">
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item absolute inset-0 transition-opacity duration-700 ease-in-out z-0 opacity-0">
                <img class="block w-full" src="{{ asset('carousel2.png') }}" alt="Slide 2">
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item absolute inset-0 transition-opacity duration-700 ease-in-out z-0 opacity-0">
                <img class="block w-full" src="{{ asset('carousel3.png') }}" alt="Slide 3">
            </div>
        </div>
    </div>

    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>

    <!-- Controls -->
    <div class="absolute inset-0 flex justify-between items-center  top-0 start-0 z-30 r h-full px-4 cursor-pointer group focus:outline-none">
        <button id="prev" type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-10 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button id="next" type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-10 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</div> --}}

{{-- <script>
    const slides = document.querySelectorAll('.carousel-item');
    let currentSlide = 0;
    const totalSlides = slides.length;

    document.getElementById('next').addEventListener('click', () => {
        slides[currentSlide].classList.remove('z-10', 'opacity-100');
        slides[currentSlide].classList.add('z-0', 'opacity-0');
        currentSlide = (currentSlide + 1) % totalSlides;
        slides[currentSlide].classList.remove('z-0', 'opacity-0');
        slides[currentSlide].classList.add('z-10', 'opacity-100');
    });

    document.getElementById('prev').addEventListener('click', () => {
        slides[currentSlide].classList.remove('z-10', 'opacity-100');
        slides[currentSlide].classList.add('z-0', 'opacity-0');
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        slides[currentSlide].classList.remove('z-0', 'opacity-0');
        slides[currentSlide].classList.add('z-10', 'opacity-100');
    });
</script> --}}

<div id="default-carousel" class="relative w-full" data-carousel="static">
    <div class="relative py-8 px-12 lg:px-24">
        <div class="carousel w-full">
            <div id="slide1" class="carousel-item relative w-full">
            <img
                src="{{ asset('carousel1.png') }}"
                class="w-full" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide3" class="btn btn-circle">❮</a>
                <a href="#slide2" class="btn btn-circle">❯</a>
            </div>
            </div>
            <div id="slide2" class="carousel-item relative w-full">
            <img
                src="{{ asset('carousel2.png') }}"
                class="w-full" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide1" class="btn btn-circle">❮</a>
                <a href="#slide3" class="btn btn-circle">❯</a>
            </div>
            </div>
            <div id="slide3" class="carousel-item relative w-full">
            <img
                src="{{ asset('carousel3.png') }}"
                class="w-full" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide2" class="btn btn-circle">❮</a>
                <a href="#slide1" class="btn btn-circle">❯</a>
            </div>
            </div>
        </div>
    </div>
</div>
