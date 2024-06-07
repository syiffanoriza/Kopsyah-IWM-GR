<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belanja</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar />
    {{-- Start Search Bar --}}
    <x-search-belanja />
    {{-- End Search Bar --}}
    {{-- Start Section Landing --}}
    <section id="landing-belanja" class="mb-20">
        <div class="container w-full">
            <div class="flex flex-wrap justify-between">
                {{-- Kategori Small --}}
                <div class="lg:hidden w-full my-2">
                    <p class="text-primary-900 font-semibold text-xl p-2">Kategori</p>
                    <ul
                        class="text-sm font-medium w-full max-h-16 overflow-x-auto border-gray-900 border text-center text-gray-500 rounded-lg shadow flex whitespace-nowrap">
                        @foreach ($products as $category => $items)
                        <li class="w-full">
                            <a href="#{{strtolower($category)}}"
                                class="block w-full p-4 bg-white border-r border-primary-600 hover:text-gray-700 hover:bg-primary-100 rounded-s-lg focus:ring-2 focus:ring-primary-300 focus:outline-none"
                                aria-current="page">{{$category}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                {{-- Kategori Medium --}}
                <div class="border-gray-900 border w-1/4 max-h-full hidden lg:block p-4 rounded-lg">
                    <p class="text-primary-900 font-semibold text-xl">Kategori</p>
                    <hr class="w-full bg-gray-900 border-0 h-px my-1">
                    <div class="overflow-y-auto mt-5 max-h-80">
                        @foreach ($map as $category => $items)
                        <div id="accordion-{{$category}}" data-accordion="collapse" class="p-1">
                            <h2 id="accordion-{{$category}}-heading-1">
                                <button type="button"
                                    class="flex items-center text-base justify-between w-full py-2 px-3 my-1 font-normal rtl:text-right text-gray-900 rounded-lg focus:ring-1 focus:ring-primary-200 focus:bg-primary-200 focus:text-gray-900 hover:bg-primary-100 gap-3"
                                    data-accordion-target="#accordion-{{$category}}-body-1" aria-expanded="false"
                                    aria-controls="accordion-{{$category}}-body-1">
                                    <span>{{$category}}</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                </button>
                            </h2>
                            <div id="accordion-{{$category}}-body-1" class="hidden"
                                aria-labelledby="accordion-{{$category}}-heading-1">
                                <div class="pl-2">
                                    @foreach ($items as $subcategory => $product)
                                    <a href="/katalog-produk/{{strtolower($category)}}/#{{strtolower($subcategory)}}">
                                        <p
                                            class="text-gray-900 text-base border-none hover:border py-2 px-3 hover:bg-primary-100 rounded-lg">
                                            {{$subcategory}}</p>
                                    </a>    
                                    @endforeach
                                </div>
                            </div>                                
                        </div>
                        @endforeach
                    </div>
                </div>
                {{-- Carousel --}}
                <div class="lg:w-[72%] w-full border border-gray-900 p-3 rounded-lg">
                    <div id="default-carousel" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-72 overflow-hidden rounded-lg md:h-96">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 4 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 5 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div
                            class="absolute z-30 flex -translate-x-1/2 bottom-5 accent-primary-900 left-1/2 space-x-3 rtl:space-x-reverse">
                            <button type="button" class="w-2 h-2 rounded-full" aria-current="true"
                                aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-2 h-2 rounded-full" aria-current="false"
                                aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-2 h-2 rounded-full" aria-current="false"
                                aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-2 h-2 rounded-full" aria-current="false"
                                aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-2 h-2 rounded-full" aria-current="false"
                                aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-primary-100/30  group-hover:bg-primary-200/50 group-focus:ring-1 group-focus:ring-primary-600  group-focus:outline-none">
                                <svg class="w-3 h-3 text-white rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-primary-100/30  group-hover:bg-primary-200/50 group-focus:ring-1 group-focus:ring-primary-600  group-focus:outline-none">
                                <svg class="w-3 h-3 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section Landing --}}

    <section id="body-belanja" class="mb-10">
        @foreach ($products as $category => $items)
        <div class="container w-full">
            <div class="w-full flex justify-start items-center mb-2 space-x-4">
                <svg width="15" height="30" viewBox="0 0 15 30" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect width="15" height="30" rx="4" fill="#00A500" />
            </svg>
            <p class="text-primary-900 font-medium text-base md:text-lg">Kini Tersedia</p>
            </div>
            <div class="w-full flex justify-between items-center mb-10">
                <h2 id="{{strtolower($category)}}" class="text-gray-900 text-2xl font-semibold tracking-wide">{{$category}}</h2>
                <a href="/katalog-produk/{{strtolower($category)}}"
                class="text-white bg-primary-800 hover:bg-primary-100 hover:shadow-lg hover:text-primary-900 tracking-wide focus:ring-4 focus:ring-primary-300 font-medium rounded-md text-xs md:text-sm px-5 py-2.5 md:px-8 md:py-3 focus:outline-none transition duration-500 ease-in-out ">View
                All</a>
            </div>
            <div class="w-full flex">
                <div class="grid w-full overflow-x-auto px-2 py-4 grid-cols-2 lg:grid-cols-4 gap-4">
                    @foreach ($items->take(4) as $product)
                    @component('components.layanan.perdagangan.card-belanja ', [
                        'produk' => $product->product,
                        'harga' => number_format($product->price, 0, '.', ','),
                        'id' => $product->product_id,
                    ])
                    @endcomponent
                    @endforeach
                </div>
        </div>
        </div>
    <hr class="bg-gray-200 border-none h-0.5 mx-5 md:mx-20 my-20 md:my-28">
    @endforeach
    </section>
    <footer>
        <x-footer />
    </footer>
</body>

</html>
