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
    <div class="p-3 mb-5 lg:mb-16 w-full border-b border-gray-200">
        <div class="container w-full flex justify-end">
            <form class="max-w-xl w-full">
                <div class="flex">
                    <label for="search-dropdown"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your
                        Email</label>
                    <button id="dropdown-button" data-dropdown-toggle="dropdown"
                        class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-white bg-primary-800 border border-primary-800 rounded-s-lg hover:bg-primary-900 focus:ring-1 focus:outline-none focus:ring-primary-500"
                        type="button">All categories <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <div id="dropdown"
                        class="z-50 hidden border border-primary-900 bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-900" aria-labelledby="dropdown-button">
                            <li>
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-primary-900 hover:text-white">Sembako</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2  hover:bg-primary-900 hover:text-white">Produk
                                    Kesehatan</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2  hover:bg-primary-900 hover:text-white">Produk
                                    Kebersihan</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-primary-900 hover:text-white">Perlengkapan
                                    Mandi</button>
                            </li>
                        </ul>
                    </div>
                    <div class="relative w-full">
                        <input type="search" id="search-dropdown"
                            class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-primary-800 focus:border-primary-800"
                            placeholder="Cari Sembako, Produk Kesehatan..." required />
                        <button type="submit"
                            class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-primary-800 rounded-e-lg border border-primary-800 hover:border-primary-900 hover:bg-primary-900 focus:ring-2 focus:outline-none focus:ring-primary-300">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
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
                        <li class="w-full">
                            <a href="#"
                                class="block w-full p-4 bg-white border-r border-primary-600 hover:text-gray-700 hover:bg-primary-100 rounded-s-lg focus:ring-2 focus:ring-primary-300 focus:outline-none"
                                aria-current="page">Sembako</a>
                        </li>
                        <li class="w-full">
                            <a href="#"
                                class="block w-full p-4 bg-white border-r border-primary-600 hover:text-gray-700 hover:bg-primary-100 focus:ring-2 focus:ring-primary-300 focus:outline-none"
                                aria-current="page">Lorem Ipsum</a>
                        </li>
                        <li class="w-full">
                            <a href="#"
                                class="block w-full p-4 bg-white border-r border-primary-600 hover:text-gray-700 hover:bg-primary-100 focus:ring-2 focus:ring-primary-300  focus:outline-none"
                                aria-current="page">Sembako</a>
                        </li>
                        <li class="w-full">
                            <a href="#"
                                class="block w-full p-4 bg-white border-r border-primary-600 hover:text-gray-700 hover:bg-primary-100 focus:ring-2 focus:ring-primary-300 focus:outline-none"
                                aria-current="page">Sembako</a>
                        </li>
                        <li class="w-full">
                            <a href="#"
                                class="block w-full p-4 bg-white border-r border-primary-600 hover:text-gray-700 hover:bg-primary-100 focus:ring-2 focus:ring-primary-300 focus:outline-none">Perlengkapan
                                Mandi</a>
                        </li>
                        <li class="w-full">
                            <a href="#"
                                class="block w-full p-4 bg-white border-r border-primary-600 hover:text-gray-700 hover:bg-primary-100 focus:ring-2 focus:ring-primary-300 focus:outline-none">Perlengkapan
                                Kebersihan</a>
                        </li>
                        <li class="w-full">
                            <a href="#"
                                class="block w-full p-4 bg-white border-s-0 border-primary-600 rounded-e-lg hover:text-gray-700 hover:bg-primary-100 focus:ring-2 focus:outline-none focus:ring-primary-300">Produk
                                Kesehatan</a>
                        </li>
                    </ul>
                </div>
                {{-- Kategori Medium --}}
                <div class="border-gray-900 border w-1/4 max-h-full hidden lg:block p-4 rounded-lg">
                    <p class="text-primary-900 font-semibold text-xl">Kategori</p>
                    <hr class="w-full bg-gray-900 border-0 h-px my-1">
                    <div class="overflow-y-auto mt-5 max-h-80">
                        <div id="accordion-collapse" data-accordion="collapse" class="p-1">
                            <h2 id="accordion-collapse-heading-1">
                                <button type="button"
                                    class="flex items-center text-base justify-between w-full py-2 px-3 my-1 font-normal rtl:text-right text-gray-900 rounded-lg focus:ring-1 focus:ring-primary-200 focus:bg-primary-200 focus:text-gray-900 hover:bg-primary-100 gap-3"
                                    data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                    aria-controls="accordion-collapse-body-1">
                                    <span>Sembako</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-1" class="hidden"
                                aria-labelledby="accordion-collapse-heading-1">
                                <div class="pl-2">
                                    <a href="">
                                        <p
                                            class="text-gray-900 text-base border-none hover:border py-2 px-3 hover:bg-primary-100 rounded-lg">
                                            Beras</p>
                                    </a>
                                    <a href="">
                                        <p
                                            class="text-gray-900 text-base border-none hover:border py-2 px-3 hover:bg-primary-100 rounded-lg">
                                            Minuman</p>
                                    </a>
                                </div>
                            </div>
                            <h2 id="accordion-collapse-heading-2">
                                <button type="button"
                                    class="flex items-center text-base justify-between w-full py-2 px-3 my-1 font-normal rtl:text-right text-gray-900 rounded-lg focus:ring-1 focus:ring-primary-200 focus:bg-primary-200 focus:text-gray-900 hover:bg-primary-100 gap-3"
                                    data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                    aria-controls="accordion-collapse-body-2">
                                    <span>Perlengkapan Mandi</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-2" class="hidden"
                                aria-labelledby="accordion-collapse-heading-2">
                                <div class="pl-2">
                                    <a href="">
                                        <p
                                            class="text-gray-900 text-base border-none hover:border py-2 px-3 hover:bg-primary-100 rounded-lg">
                                            Sabun</p>
                                    </a>
                                    <a href="">
                                        <p
                                            class="text-gray-900 text-base border-none hover:border py-2 px-3 hover:bg-primary-100 rounded-lg">
                                            Sampo</p>
                                    </a>
                                </div>
                            </div>
                            <h2 id="accordion-collapse-heading-3">
                                <button type="button"
                                    class="flex items-center text-base justify-between w-full py-2 px-3 my-1 font-normal rtl:text-right text-gray-900 rounded-lg focus:ring-1 focus:ring-primary-200 focus:bg-primary-200 focus:text-gray-900 hover:bg-primary-100 gap-3"
                                    data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                    aria-controls="accordion-collapse-body-3">
                                    <span class="overflow-y-auto whitespace-nowrap">Perlengkapan Kebersihan</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-3" class="hidden"
                                aria-labelledby="accordion-collapse-heading-3">
                                <div class="pl-2">
                                    <a href="">
                                        <p
                                            class="text-gray-900 text-base border-none hover:border py-2 px-3 hover:bg-primary-100 rounded-lg">
                                            Sabun Cuci Baju</p>
                                    </a>
                                    <a href="">
                                        <p
                                            class="text-gray-900 text-base border-none hover:border py-2 px-3 hover:bg-primary-100 rounded-lg">
                                            Sabun Cuci Piring</p>
                                    </a>
                                    <a href="">
                                        <p
                                            class="text-gray-900 text-base border-none hover:border py-2 px-3 hover:bg-primary-100 rounded-lg">
                                            Pembersih Lantai</p>
                                    </a>
                                </div>
                            </div>
                            <h2 id="accordion-collapse-heading-4">
                                <button type="button"
                                    class="flex items-center text-base justify-between w-full py-2 px-3 my-1 font-normal rtl:text-right text-gray-900 rounded-lg focus:ring-1 focus:ring-primary-200 focus:bg-primary-200 focus:text-gray-900 hover:bg-primary-100 gap-3"
                                    data-accordion-target="#accordion-collapse-body-4" aria-expanded="true"
                                    aria-controls="accordion-collapse-body-4">
                                    <span>Produk Kesehatan</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-4" class="hidden"
                                aria-labelledby="accordion-collapse-heading-4">
                                <div class="pl-2">
                                    <a href="">
                                        <p
                                            class="text-gray-900 text-base border-none hover:border py-2 px-3 hover:bg-primary-100 rounded-lg">
                                            Madu</p>
                                    </a>
                                    <a href="">
                                        <p
                                            class="text-gray-900 text-base border-none hover:border py-2 px-3 hover:bg-primary-100 rounded-lg">
                                            Panadol</p>
                                    </a>
                                </div>
                            </div>

                            <h2 id="accordion-collapse-heading-5">
                                <button type="button"
                                    class="flex items-center text-base justify-between w-full py-2 px-3 my-1 font-normal rtl:text-right text-gray-900 rounded-lg focus:ring-1 focus:ring-primary-200 focus:bg-primary-200 focus:text-gray-900 hover:bg-primary-100 gap-3"
                                    data-accordion-target="#accordion-collapse-body-5" aria-expanded="true"
                                    aria-controls="accordion-collapse-body-5">
                                    <span>Sembako</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-5" class="hidden"
                                aria-labelledby="accordion-collapse-heading-5">
                                <div class="pl-2">
                                    <a href="">
                                        <p
                                            class="text-gray-900 text-base border-none hover:border py-2 px-3 hover:bg-primary-100 rounded-lg">
                                            Beras</p>
                                    </a>
                                    <a href="">
                                        <p
                                            class="text-gray-900 text-base border-none hover:border py-2 px-3 hover:bg-primary-100 rounded-lg">
                                            Minuman</p>
                                    </a>
                                </div>
                            </div>

                            <h2 id="accordion-collapse-heading-6">
                                <button type="button"
                                    class="flex items-center text-base justify-between w-full py-2 px-3 my-1 font-normal rtl:text-right text-gray-900 rounded-lg focus:ring-1 focus:ring-primary-200 focus:bg-primary-200 focus:text-gray-900 hover:bg-primary-100 gap-3"
                                    data-accordion-target="#accordion-collapse-body-6" aria-expanded="true"
                                    aria-controls="accordion-collapse-body-6">
                                    <span>Sembako</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-6" class="hidden"
                                aria-labelledby="accordion-collapse-heading-6">
                                <div class="pl-2">
                                    <a href="">
                                        <p
                                            class="text-gray-900 text-base border-none hover:border py-2 px-3 hover:bg-primary-100 rounded-lg">
                                            Beras</p>
                                    </a>
                                    <a href="">
                                        <p
                                            class="text-gray-900 text-base border-none hover:border py-2 px-3 hover:bg-primary-100 rounded-lg">
                                            Minuman</p>
                                    </a>
                                </div>
                            </div>

                            <h2 id="accordion-collapse-heading-7">
                                <button type="button"
                                    class="flex items-center text-base justify-between w-full py-2 px-3 my-1 font-normal rtl:text-right text-gray-900 rounded-lg focus:ring-1 focus:ring-primary-200 focus:bg-primary-200 focus:text-gray-900 hover:bg-primary-100 gap-3"
                                    data-accordion-target="#accordion-collapse-body-7" aria-expanded="true"
                                    aria-controls="accordion-collapse-body-7">
                                    <span>Sembako</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-7" class="hidden"
                                aria-labelledby="accordion-collapse-heading-7">
                                <div class="pl-2">
                                    <a href="">
                                        <p
                                            class="text-gray-900 text-base border-none hover:border py-2 px-3 hover:bg-primary-100 rounded-lg">
                                            Beras</p>
                                    </a>
                                    <a href="">
                                        <p
                                            class="text-gray-900 text-base border-none hover:border py-2 px-3 hover:bg-primary-100 rounded-lg">
                                            Minuman</p>
                                    </a>
                                </div>
                            </div>

                            <h2 id="accordion-collapse-heading-8">
                                <button type="button"
                                    class="flex items-center text-base justify-between w-full py-2 px-3 my-1 font-normal rtl:text-right text-gray-900 rounded-lg focus:ring-1 focus:ring-primary-200 focus:bg-primary-200 focus:text-gray-900 hover:bg-primary-100 gap-3"
                                    data-accordion-target="#accordion-collapse-body-8" aria-expanded="true"
                                    aria-controls="accordion-collapse-body-8">
                                    <span>Sembako</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-8" class="hidden"
                                aria-labelledby="accordion-collapse-heading-8">
                                <div class="pl-2">
                                    <a href="">
                                        <p
                                            class="text-gray-900 text-base border-none hover:border py-2 px-3 hover:bg-primary-100 rounded-lg">
                                            Beras</p>
                                    </a>
                                    <a href="">
                                        <p
                                            class="text-gray-900 text-base border-none hover:border py-2 px-3 hover:bg-primary-100 rounded-lg">
                                            Minuman</p>
                                    </a>
                                </div>
                            </div>
                        </div>
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
        <div class="container w-full">
            <div class="w-full flex justify-start items-center mb-2 space-x-4">
                <svg width="15" height="30" viewBox="0 0 15 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="15" height="30" rx="4" fill="#00A500" />
                </svg>
                <p class="text-primary-900 font-medium text-base md:text-lg">Kini Tersedia</p>
            </div>
            <div class="w-full flex justify-between items-center mb-10">
                <h2 class="text-gray-900 text-2xl font-semibold tracking-wide">Sembako</h2>
                <a href="/katalog-produk"
                    class="text-white bg-primary-800 hover:bg-primary-100 hover:shadow-lg hover:text-primary-900 tracking-wide focus:ring-4 focus:ring-primary-300 font-medium rounded-md text-xs md:text-sm px-5 py-2.5 md:px-8 md:py-3 focus:outline-none transition duration-500 ease-in-out ">View
                    All</a>
            </div>
            <div class="w-full flex">
                <div class="grid overflow-x-auto px-2 py-4 grid-cols-2 lg:grid-cols-4 gap-3">
                    <div
                        class="w-full max-w-sm bg-white border border-gray-900 rounded-lg transition duration-500 ease-in-out hover:shadow-lg hover:shadow-primary-100 pt-3 px-2.5">
                        <div class="relative pb-2">
                            <a href="#">
                                <img class="rounded-lg border border-gray-900"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg"
                                    alt="product image" />
                            </a>
                            <a href="/cart-belanja">
                                <div
                                    class="text-sm absolute top-0 right-0 bg-[#E8FFCC] text-primary-900 px-4 rounded-full h-10 w-10 flex flex-col items-center justify-center mt-3 mr-3 hover:shadow-md hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 15C13.8954 15 13 15.8954 13 17C13 18.1046 13.8954 19 15 19C16.1046 19 17 18.1046 17 17C17 15.8954 16.1046 15 15 15ZM15 15H7.29394C6.83269 15 6.60197 15 6.41211 14.918C6.24466 14.8456 6.09934 14.7288 5.99349 14.5802C5.87348 14.4118 5.82609 14.1863 5.72945 13.7353L3.27148 2.26477C3.17484 1.81376 3.12587 1.58825 3.00586 1.4198C2.90002 1.27123 2.75525 1.15441 2.5878 1.08205C2.39794 1 2.16779 1 1.70653 1H1M4 4H16.8732C17.595 4 17.9557 4 18.1979 4.15036C18.4101 4.28206 18.5652 4.48838 18.6329 4.72876C18.7102 5.00319 18.611 5.34996 18.411 6.04346L17.0264 10.8435C16.9068 11.2581 16.8469 11.4655 16.7256 11.6193C16.6185 11.7551 16.4772 11.8608 16.3171 11.926C16.1356 12 15.9199 12 15.4883 12H5.73047M6 19C4.89543 19 4 18.1046 4 17C4 15.8954 4.89543 15 6 15C7.10457 15 8 15.8954 8 17C8 18.1046 7.10457 19 6 19Z"
                                                stroke="currentColor" stroke-width="1.38636" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div class="px-1 pb-3 md:pb-4">
                            <a href="#">
                                <h5 class="md:text-xl text-lg font-normal tracking-tight mb-1 md:mb-2 text-gray-900">
                                    Sabun Lervia</h5>
                            </a>
                            <div class="flex items-end justify-between">
                                <div class="flex items-center space-x-0.5">
                                    <span class="font-normal text-gray-600 text-sm md:text-base rounded">Rp</span>
                                    <p class="text-primary-900 text-base md:text-xl font-medium">25.000</p>
                                </div>
                                <p class="text-gray-400 font-normal text-xs md:text-sm">50
                                    <span>terjual</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full max-w-sm bg-white border border-gray-900 rounded-lg transition duration-500 ease-in-out hover:shadow-lg hover:shadow-primary-100 pt-3 px-2.5">
                        <div class="relative pb-2">
                            <a href="#">
                                <img class="rounded-lg border border-gray-900"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg"
                                    alt="product image" />
                            </a>
                            <a href="/cart-belanja">
                                <div
                                    class="text-sm absolute top-0 right-0 bg-[#E8FFCC] text-primary-900 px-4 rounded-full h-10 w-10 flex flex-col items-center justify-center mt-3 mr-3 hover:shadow-md hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 15C13.8954 15 13 15.8954 13 17C13 18.1046 13.8954 19 15 19C16.1046 19 17 18.1046 17 17C17 15.8954 16.1046 15 15 15ZM15 15H7.29394C6.83269 15 6.60197 15 6.41211 14.918C6.24466 14.8456 6.09934 14.7288 5.99349 14.5802C5.87348 14.4118 5.82609 14.1863 5.72945 13.7353L3.27148 2.26477C3.17484 1.81376 3.12587 1.58825 3.00586 1.4198C2.90002 1.27123 2.75525 1.15441 2.5878 1.08205C2.39794 1 2.16779 1 1.70653 1H1M4 4H16.8732C17.595 4 17.9557 4 18.1979 4.15036C18.4101 4.28206 18.5652 4.48838 18.6329 4.72876C18.7102 5.00319 18.611 5.34996 18.411 6.04346L17.0264 10.8435C16.9068 11.2581 16.8469 11.4655 16.7256 11.6193C16.6185 11.7551 16.4772 11.8608 16.3171 11.926C16.1356 12 15.9199 12 15.4883 12H5.73047M6 19C4.89543 19 4 18.1046 4 17C4 15.8954 4.89543 15 6 15C7.10457 15 8 15.8954 8 17C8 18.1046 7.10457 19 6 19Z"
                                                stroke="currentColor" stroke-width="1.38636" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div class="px-1 pb-3 md:pb-4">
                            <a href="#">
                                <h5 class="md:text-xl text-lg font-normal tracking-tight mb-1 md:mb-2 text-gray-900">
                                    Sabun Lervia</h5>
                            </a>
                            <div class="flex items-end justify-between">
                                <div class="flex items-center space-x-0.5">
                                    <span class="font-normal text-gray-600 text-sm md:text-base rounded">Rp</span>
                                    <p class="text-primary-900 text-base md:text-xl font-medium">25.000</p>
                                </div>
                                <p class="text-gray-400 font-normal text-xs md:text-sm">50
                                    <span>terjual</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full max-w-sm bg-white border border-gray-900 rounded-lg transition duration-500 ease-in-out hover:shadow-lg hover:shadow-primary-100 pt-3 px-2.5">
                        <div class="relative pb-2">
                            <a href="#">
                                <img class="rounded-lg border border-gray-900"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg"
                                    alt="product image" />
                            </a>
                            <a href="/cart-belanja">
                                <div
                                    class="text-sm absolute top-0 right-0 bg-[#E8FFCC] text-primary-900 px-4 rounded-full h-10 w-10 flex flex-col items-center justify-center mt-3 mr-3 hover:shadow-md hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 15C13.8954 15 13 15.8954 13 17C13 18.1046 13.8954 19 15 19C16.1046 19 17 18.1046 17 17C17 15.8954 16.1046 15 15 15ZM15 15H7.29394C6.83269 15 6.60197 15 6.41211 14.918C6.24466 14.8456 6.09934 14.7288 5.99349 14.5802C5.87348 14.4118 5.82609 14.1863 5.72945 13.7353L3.27148 2.26477C3.17484 1.81376 3.12587 1.58825 3.00586 1.4198C2.90002 1.27123 2.75525 1.15441 2.5878 1.08205C2.39794 1 2.16779 1 1.70653 1H1M4 4H16.8732C17.595 4 17.9557 4 18.1979 4.15036C18.4101 4.28206 18.5652 4.48838 18.6329 4.72876C18.7102 5.00319 18.611 5.34996 18.411 6.04346L17.0264 10.8435C16.9068 11.2581 16.8469 11.4655 16.7256 11.6193C16.6185 11.7551 16.4772 11.8608 16.3171 11.926C16.1356 12 15.9199 12 15.4883 12H5.73047M6 19C4.89543 19 4 18.1046 4 17C4 15.8954 4.89543 15 6 15C7.10457 15 8 15.8954 8 17C8 18.1046 7.10457 19 6 19Z"
                                                stroke="currentColor" stroke-width="1.38636" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div class="px-1 pb-3 md:pb-4">
                            <a href="#">
                                <h5 class="md:text-xl text-lg font-normal tracking-tight mb-1 md:mb-2 text-gray-900">
                                    Sabun Lervia</h5>
                            </a>
                            <div class="flex items-end justify-between">
                                <div class="flex items-center space-x-0.5">
                                    <span class="font-normal text-gray-600 text-sm md:text-base rounded">Rp</span>
                                    <p class="text-primary-900 text-base md:text-xl font-medium">25.000</p>
                                </div>
                                <p class="text-gray-400 font-normal text-xs md:text-sm">50
                                    <span>terjual</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full max-w-sm bg-white border border-gray-900 rounded-lg transition duration-500 ease-in-out hover:shadow-lg hover:shadow-primary-100 pt-3 px-2.5">
                        <div class="relative pb-2">
                            <a href="#">
                                <img class="rounded-lg border border-gray-900"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg"
                                    alt="product image" />
                            </a>
                            <a href="/cart-belanja">
                                <div
                                    class="text-sm absolute top-0 right-0 bg-[#E8FFCC] text-primary-900 px-4 rounded-full h-10 w-10 flex flex-col items-center justify-center mt-3 mr-3 hover:shadow-md hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 15C13.8954 15 13 15.8954 13 17C13 18.1046 13.8954 19 15 19C16.1046 19 17 18.1046 17 17C17 15.8954 16.1046 15 15 15ZM15 15H7.29394C6.83269 15 6.60197 15 6.41211 14.918C6.24466 14.8456 6.09934 14.7288 5.99349 14.5802C5.87348 14.4118 5.82609 14.1863 5.72945 13.7353L3.27148 2.26477C3.17484 1.81376 3.12587 1.58825 3.00586 1.4198C2.90002 1.27123 2.75525 1.15441 2.5878 1.08205C2.39794 1 2.16779 1 1.70653 1H1M4 4H16.8732C17.595 4 17.9557 4 18.1979 4.15036C18.4101 4.28206 18.5652 4.48838 18.6329 4.72876C18.7102 5.00319 18.611 5.34996 18.411 6.04346L17.0264 10.8435C16.9068 11.2581 16.8469 11.4655 16.7256 11.6193C16.6185 11.7551 16.4772 11.8608 16.3171 11.926C16.1356 12 15.9199 12 15.4883 12H5.73047M6 19C4.89543 19 4 18.1046 4 17C4 15.8954 4.89543 15 6 15C7.10457 15 8 15.8954 8 17C8 18.1046 7.10457 19 6 19Z"
                                                stroke="currentColor" stroke-width="1.38636" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div class="px-1 pb-3 md:pb-4">
                            <a href="#">
                                <h5 class="md:text-xl text-lg font-normal tracking-tight mb-1 md:mb-2 text-gray-900">
                                    Sabun Lervia</h5>
                            </a>
                            <div class="flex items-end justify-between">
                                <div class="flex items-center space-x-0.5">
                                    <span class="font-normal text-gray-600 text-sm md:text-base rounded">Rp</span>
                                    <p class="text-primary-900 text-base md:text-xl font-medium">25.000</p>
                                </div>
                                <p class="text-gray-400 font-normal text-xs md:text-sm">50
                                    <span>terjual</span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <hr class="bg-gray-200 border-none h-0.5 mx-5 md:mx-20 my-20 md:my-28">
        <div class="container w-full">
            <div class="w-full flex justify-start items-center mb-2 space-x-4">
                <svg width="15" height="30" viewBox="0 0 15 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="15" height="30" rx="4" fill="#00A500" />
                </svg>
                <p class="text-primary-900 font-medium text-base md:text-lg">Kini Tersedia</p>
            </div>
            <div class="w-full flex justify-between items-center mb-10">
                <h2 class="text-gray-900 text-2xl font-semibold tracking-wide">Perlengkapan Mandi</h2>
                <a href="/katalog-produk"
                    class="text-white bg-primary-800 hover:bg-primary-100 hover:shadow-lg hover:text-primary-900 tracking-wide focus:ring-4 focus:ring-primary-300 font-medium rounded-md text-xs md:text-sm px-5 py-2.5 md:px-8 md:py-3 focus:outline-none transition duration-500 ease-in-out ">View
                    All</a>
            </div>
            <div class="w-full flex">
                <div class="grid overflow-x-auto px-2 py-4 grid-cols-2 lg:grid-cols-4 gap-3">
                    <div
                        class="w-full max-w-sm bg-white border border-gray-900 rounded-lg transition duration-500 ease-in-out hover:shadow-lg hover:shadow-primary-100 pt-3 px-2.5">
                        <div class="relative pb-2">
                            <a href="#">
                                <img class="rounded-lg border border-gray-900"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg"
                                    alt="product image" />
                            </a>
                            <a href="/cart-belanja">
                                <div
                                    class="text-sm absolute top-0 right-0 bg-[#E8FFCC] text-primary-900 px-4 rounded-full h-10 w-10 flex flex-col items-center justify-center mt-3 mr-3 hover:shadow-md hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 15C13.8954 15 13 15.8954 13 17C13 18.1046 13.8954 19 15 19C16.1046 19 17 18.1046 17 17C17 15.8954 16.1046 15 15 15ZM15 15H7.29394C6.83269 15 6.60197 15 6.41211 14.918C6.24466 14.8456 6.09934 14.7288 5.99349 14.5802C5.87348 14.4118 5.82609 14.1863 5.72945 13.7353L3.27148 2.26477C3.17484 1.81376 3.12587 1.58825 3.00586 1.4198C2.90002 1.27123 2.75525 1.15441 2.5878 1.08205C2.39794 1 2.16779 1 1.70653 1H1M4 4H16.8732C17.595 4 17.9557 4 18.1979 4.15036C18.4101 4.28206 18.5652 4.48838 18.6329 4.72876C18.7102 5.00319 18.611 5.34996 18.411 6.04346L17.0264 10.8435C16.9068 11.2581 16.8469 11.4655 16.7256 11.6193C16.6185 11.7551 16.4772 11.8608 16.3171 11.926C16.1356 12 15.9199 12 15.4883 12H5.73047M6 19C4.89543 19 4 18.1046 4 17C4 15.8954 4.89543 15 6 15C7.10457 15 8 15.8954 8 17C8 18.1046 7.10457 19 6 19Z"
                                                stroke="currentColor" stroke-width="1.38636" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="px-1 pb-3 md:pb-4">
                            <a href="#">
                                <h5 class="md:text-xl text-lg font-normal tracking-tight mb-1 md:mb-2 text-gray-900">
                                    Sabun Lervia</h5>
                            </a>
                            <div class="flex items-end justify-between">
                                <div class="flex items-center space-x-0.5">
                                    <span class="font-normal text-gray-600 text-sm md:text-base rounded">Rp</span>
                                    <p class="text-primary-900 text-base md:text-xl font-medium">25.000</p>
                                </div>
                                <p class="text-gray-400 font-normal text-xs md:text-sm">50
                                    <span>terjual</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full max-w-sm bg-white border border-gray-900 rounded-lg transition duration-500 ease-in-out hover:shadow-lg hover:shadow-primary-100 pt-3 px-2.5">
                        <div class="relative pb-2">
                            <a href="#">
                                <img class="rounded-lg border border-gray-900"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg"
                                    alt="product image" />
                            </a>
                            <a href="/cart-belanja">
                                <div
                                    class="text-sm absolute top-0 right-0 bg-[#E8FFCC] text-primary-900 px-4 rounded-full h-10 w-10 flex flex-col items-center justify-center mt-3 mr-3 hover:shadow-md hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 15C13.8954 15 13 15.8954 13 17C13 18.1046 13.8954 19 15 19C16.1046 19 17 18.1046 17 17C17 15.8954 16.1046 15 15 15ZM15 15H7.29394C6.83269 15 6.60197 15 6.41211 14.918C6.24466 14.8456 6.09934 14.7288 5.99349 14.5802C5.87348 14.4118 5.82609 14.1863 5.72945 13.7353L3.27148 2.26477C3.17484 1.81376 3.12587 1.58825 3.00586 1.4198C2.90002 1.27123 2.75525 1.15441 2.5878 1.08205C2.39794 1 2.16779 1 1.70653 1H1M4 4H16.8732C17.595 4 17.9557 4 18.1979 4.15036C18.4101 4.28206 18.5652 4.48838 18.6329 4.72876C18.7102 5.00319 18.611 5.34996 18.411 6.04346L17.0264 10.8435C16.9068 11.2581 16.8469 11.4655 16.7256 11.6193C16.6185 11.7551 16.4772 11.8608 16.3171 11.926C16.1356 12 15.9199 12 15.4883 12H5.73047M6 19C4.89543 19 4 18.1046 4 17C4 15.8954 4.89543 15 6 15C7.10457 15 8 15.8954 8 17C8 18.1046 7.10457 19 6 19Z"
                                                stroke="currentColor" stroke-width="1.38636" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div class="px-1 pb-3 md:pb-4">
                            <a href="#">
                                <h5 class="md:text-xl text-lg font-normal tracking-tight mb-1 md:mb-2 text-gray-900">
                                    Sabun Lervia</h5>
                            </a>
                            <div class="flex items-end justify-between">
                                <div class="flex items-center space-x-0.5">
                                    <span class="font-normal text-gray-600 text-sm md:text-base rounded">Rp</span>
                                    <p class="text-primary-900 text-base md:text-xl font-medium">25.000</p>
                                </div>
                                <p class="text-gray-400 font-normal text-xs md:text-sm">50
                                    <span>terjual</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full max-w-sm bg-white border border-gray-900 rounded-lg transition duration-500 ease-in-out hover:shadow-lg hover:shadow-primary-100 pt-3 px-2.5">
                        <div class="relative pb-2">
                            <a href="#">
                                <img class="rounded-lg border border-gray-900"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg"
                                    alt="product image" />
                            </a>
                            <a href="/cart-belanja">
                                <div
                                    class="text-sm absolute top-0 right-0 bg-[#E8FFCC] text-primary-900 px-4 rounded-full h-10 w-10 flex flex-col items-center justify-center mt-3 mr-3 hover:shadow-md hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 15C13.8954 15 13 15.8954 13 17C13 18.1046 13.8954 19 15 19C16.1046 19 17 18.1046 17 17C17 15.8954 16.1046 15 15 15ZM15 15H7.29394C6.83269 15 6.60197 15 6.41211 14.918C6.24466 14.8456 6.09934 14.7288 5.99349 14.5802C5.87348 14.4118 5.82609 14.1863 5.72945 13.7353L3.27148 2.26477C3.17484 1.81376 3.12587 1.58825 3.00586 1.4198C2.90002 1.27123 2.75525 1.15441 2.5878 1.08205C2.39794 1 2.16779 1 1.70653 1H1M4 4H16.8732C17.595 4 17.9557 4 18.1979 4.15036C18.4101 4.28206 18.5652 4.48838 18.6329 4.72876C18.7102 5.00319 18.611 5.34996 18.411 6.04346L17.0264 10.8435C16.9068 11.2581 16.8469 11.4655 16.7256 11.6193C16.6185 11.7551 16.4772 11.8608 16.3171 11.926C16.1356 12 15.9199 12 15.4883 12H5.73047M6 19C4.89543 19 4 18.1046 4 17C4 15.8954 4.89543 15 6 15C7.10457 15 8 15.8954 8 17C8 18.1046 7.10457 19 6 19Z"
                                                stroke="currentColor" stroke-width="1.38636" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div class="px-1 pb-3 md:pb-4">
                            <a href="#">
                                <h5 class="md:text-xl text-lg font-normal tracking-tight mb-1 md:mb-2 text-gray-900">
                                    Sabun Lervia</h5>
                            </a>
                            <div class="flex items-end justify-between">
                                <div class="flex items-center space-x-0.5">
                                    <span class="font-normal text-gray-600 text-sm md:text-base rounded">Rp</span>
                                    <p class="text-primary-900 text-base md:text-xl font-medium">25.000</p>
                                </div>
                                <p class="text-gray-400 font-normal text-xs md:text-sm">50
                                    <span>terjual</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full max-w-sm bg-white border border-gray-900 rounded-lg transition duration-500 ease-in-out hover:shadow-lg hover:shadow-primary-100 pt-3 px-2.5">
                        <div class="relative pb-2">
                            <a href="#">
                                <img class="rounded-lg border border-gray-900"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg"
                                    alt="product image" />
                            </a>
                            <a href="/cart-belanja">
                                <div
                                    class="text-sm absolute top-0 right-0 bg-[#E8FFCC] text-primary-900 px-4 rounded-full h-10 w-10 flex flex-col items-center justify-center mt-3 mr-3 hover:shadow-md hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 15C13.8954 15 13 15.8954 13 17C13 18.1046 13.8954 19 15 19C16.1046 19 17 18.1046 17 17C17 15.8954 16.1046 15 15 15ZM15 15H7.29394C6.83269 15 6.60197 15 6.41211 14.918C6.24466 14.8456 6.09934 14.7288 5.99349 14.5802C5.87348 14.4118 5.82609 14.1863 5.72945 13.7353L3.27148 2.26477C3.17484 1.81376 3.12587 1.58825 3.00586 1.4198C2.90002 1.27123 2.75525 1.15441 2.5878 1.08205C2.39794 1 2.16779 1 1.70653 1H1M4 4H16.8732C17.595 4 17.9557 4 18.1979 4.15036C18.4101 4.28206 18.5652 4.48838 18.6329 4.72876C18.7102 5.00319 18.611 5.34996 18.411 6.04346L17.0264 10.8435C16.9068 11.2581 16.8469 11.4655 16.7256 11.6193C16.6185 11.7551 16.4772 11.8608 16.3171 11.926C16.1356 12 15.9199 12 15.4883 12H5.73047M6 19C4.89543 19 4 18.1046 4 17C4 15.8954 4.89543 15 6 15C7.10457 15 8 15.8954 8 17C8 18.1046 7.10457 19 6 19Z"
                                                stroke="currentColor" stroke-width="1.38636" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div class="px-1 pb-3 md:pb-4">
                            <a href="#">
                                <h5 class="md:text-xl text-lg font-normal tracking-tight mb-1 md:mb-2 text-gray-900">
                                    Sabun Lervia</h5>
                            </a>
                            <div class="flex items-end justify-between">
                                <div class="flex items-center space-x-0.5">
                                    <span class="font-normal text-gray-600 text-sm md:text-base rounded">Rp</span>
                                    <p class="text-primary-900 text-base md:text-xl font-medium">25.000</p>
                                </div>
                                <p class="text-gray-400 font-normal text-xs md:text-sm">50
                                    <span>terjual</span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <hr class="bg-gray-200 border-none h-0.5 mx-5 md:mx-20 my-20 md:my-28">
        <div class="container w-full">
            <div class="w-full flex justify-start items-center mb-2 space-x-4">
                <svg width="15" height="30" viewBox="0 0 15 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="15" height="30" rx="4" fill="#00A500" />
                </svg>
                <p class="text-primary-900 font-medium text-base md:text-lg">Kini Tersedia</p>
            </div>
            <div class="w-full flex justify-between items-center mb-10">
                <h2 class="text-gray-900 text-2xl font-semibold tracking-wide">Perlengkapan Kebersihan</h2>
                <a href="/katalog-produk"
                    class="text-white bg-primary-800 hover:bg-primary-100 hover:shadow-lg hover:text-primary-900 tracking-wide focus:ring-4 focus:ring-primary-300 font-medium rounded-md text-xs md:text-sm px-5 py-2.5 md:px-8 md:py-3 focus:outline-none transition duration-500 ease-in-out ">View
                    All</a>
            </div>
            <div class="w-full flex">
                <div class="grid overflow-x-auto px-2 py-4 grid-cols-2 lg:grid-cols-4 gap-3">
                    <div
                        class="w-full max-w-sm bg-white border border-gray-900 rounded-lg transition duration-500 ease-in-out hover:shadow-lg hover:shadow-primary-100 pt-3 px-2.5">
                        <div class="relative pb-2">
                            <a href="#">
                                <img class="rounded-lg border border-gray-900"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg"
                                    alt="product image" />
                            </a>
                            <a href="/cart-belanja">
                                <div
                                    class="text-sm absolute top-0 right-0 bg-[#E8FFCC] text-primary-900 px-4 rounded-full h-10 w-10 flex flex-col items-center justify-center mt-3 mr-3 hover:shadow-md hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 15C13.8954 15 13 15.8954 13 17C13 18.1046 13.8954 19 15 19C16.1046 19 17 18.1046 17 17C17 15.8954 16.1046 15 15 15ZM15 15H7.29394C6.83269 15 6.60197 15 6.41211 14.918C6.24466 14.8456 6.09934 14.7288 5.99349 14.5802C5.87348 14.4118 5.82609 14.1863 5.72945 13.7353L3.27148 2.26477C3.17484 1.81376 3.12587 1.58825 3.00586 1.4198C2.90002 1.27123 2.75525 1.15441 2.5878 1.08205C2.39794 1 2.16779 1 1.70653 1H1M4 4H16.8732C17.595 4 17.9557 4 18.1979 4.15036C18.4101 4.28206 18.5652 4.48838 18.6329 4.72876C18.7102 5.00319 18.611 5.34996 18.411 6.04346L17.0264 10.8435C16.9068 11.2581 16.8469 11.4655 16.7256 11.6193C16.6185 11.7551 16.4772 11.8608 16.3171 11.926C16.1356 12 15.9199 12 15.4883 12H5.73047M6 19C4.89543 19 4 18.1046 4 17C4 15.8954 4.89543 15 6 15C7.10457 15 8 15.8954 8 17C8 18.1046 7.10457 19 6 19Z"
                                                stroke="currentColor" stroke-width="1.38636" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div class="px-1 pb-3 md:pb-4">
                            <a href="#">
                                <h5 class="md:text-xl text-lg font-normal tracking-tight mb-1 md:mb-2 text-gray-900">
                                    Sabun Lervia</h5>
                            </a>
                            <div class="flex items-end justify-between">
                                <div class="flex items-center space-x-0.5">
                                    <span class="font-normal text-gray-600 text-sm md:text-base rounded">Rp</span>
                                    <p class="text-primary-900 text-base md:text-xl font-medium">25.000</p>
                                </div>
                                <p class="text-gray-400 font-normal text-xs md:text-sm">50
                                    <span>terjual</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full max-w-sm bg-white border border-gray-900 rounded-lg transition duration-500 ease-in-out hover:shadow-lg hover:shadow-primary-100 pt-3 px-2.5">
                        <div class="relative pb-2">
                            <a href="#">
                                <img class="rounded-lg border border-gray-900"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg"
                                    alt="product image" />
                            </a>
                            <a href="/cart-belanja">
                                <div
                                    class="text-sm absolute top-0 right-0 bg-[#E8FFCC] text-primary-900 px-4 rounded-full h-10 w-10 flex flex-col items-center justify-center mt-3 mr-3 hover:shadow-md hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 15C13.8954 15 13 15.8954 13 17C13 18.1046 13.8954 19 15 19C16.1046 19 17 18.1046 17 17C17 15.8954 16.1046 15 15 15ZM15 15H7.29394C6.83269 15 6.60197 15 6.41211 14.918C6.24466 14.8456 6.09934 14.7288 5.99349 14.5802C5.87348 14.4118 5.82609 14.1863 5.72945 13.7353L3.27148 2.26477C3.17484 1.81376 3.12587 1.58825 3.00586 1.4198C2.90002 1.27123 2.75525 1.15441 2.5878 1.08205C2.39794 1 2.16779 1 1.70653 1H1M4 4H16.8732C17.595 4 17.9557 4 18.1979 4.15036C18.4101 4.28206 18.5652 4.48838 18.6329 4.72876C18.7102 5.00319 18.611 5.34996 18.411 6.04346L17.0264 10.8435C16.9068 11.2581 16.8469 11.4655 16.7256 11.6193C16.6185 11.7551 16.4772 11.8608 16.3171 11.926C16.1356 12 15.9199 12 15.4883 12H5.73047M6 19C4.89543 19 4 18.1046 4 17C4 15.8954 4.89543 15 6 15C7.10457 15 8 15.8954 8 17C8 18.1046 7.10457 19 6 19Z"
                                                stroke="currentColor" stroke-width="1.38636" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div class="px-1 pb-3 md:pb-4">
                            <a href="#">
                                <h5 class="md:text-xl text-lg font-normal tracking-tight mb-1 md:mb-2 text-gray-900">
                                    Sabun Lervia</h5>
                            </a>
                            <div class="flex items-end justify-between">
                                <div class="flex items-center space-x-0.5">
                                    <span class="font-normal text-gray-600 text-sm md:text-base rounded">Rp</span>
                                    <p class="text-primary-900 text-base md:text-xl font-medium">25.000</p>
                                </div>
                                <p class="text-gray-400 font-normal text-xs md:text-sm">50
                                    <span>terjual</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full max-w-sm bg-white border border-gray-900 rounded-lg transition duration-500 ease-in-out hover:shadow-lg hover:shadow-primary-100 pt-3 px-2.5">
                        <div class="relative pb-2">
                            <a href="#">
                                <img class="rounded-lg border border-gray-900"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg"
                                    alt="product image" />
                            </a>
                            <a href="/cart-belanja">
                                <div
                                    class="text-sm absolute top-0 right-0 bg-[#E8FFCC] text-primary-900 px-4 rounded-full h-10 w-10 flex flex-col items-center justify-center mt-3 mr-3 hover:shadow-md hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 15C13.8954 15 13 15.8954 13 17C13 18.1046 13.8954 19 15 19C16.1046 19 17 18.1046 17 17C17 15.8954 16.1046 15 15 15ZM15 15H7.29394C6.83269 15 6.60197 15 6.41211 14.918C6.24466 14.8456 6.09934 14.7288 5.99349 14.5802C5.87348 14.4118 5.82609 14.1863 5.72945 13.7353L3.27148 2.26477C3.17484 1.81376 3.12587 1.58825 3.00586 1.4198C2.90002 1.27123 2.75525 1.15441 2.5878 1.08205C2.39794 1 2.16779 1 1.70653 1H1M4 4H16.8732C17.595 4 17.9557 4 18.1979 4.15036C18.4101 4.28206 18.5652 4.48838 18.6329 4.72876C18.7102 5.00319 18.611 5.34996 18.411 6.04346L17.0264 10.8435C16.9068 11.2581 16.8469 11.4655 16.7256 11.6193C16.6185 11.7551 16.4772 11.8608 16.3171 11.926C16.1356 12 15.9199 12 15.4883 12H5.73047M6 19C4.89543 19 4 18.1046 4 17C4 15.8954 4.89543 15 6 15C7.10457 15 8 15.8954 8 17C8 18.1046 7.10457 19 6 19Z"
                                                stroke="currentColor" stroke-width="1.38636" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div class="px-1 pb-3 md:pb-4">
                            <a href="#">
                                <h5 class="md:text-xl text-lg font-normal tracking-tight mb-1 md:mb-2 text-gray-900">
                                    Sabun Lervia</h5>
                            </a>
                            <div class="flex items-end justify-between">
                                <div class="flex items-center space-x-0.5">
                                    <span class="font-normal text-gray-600 text-sm md:text-base rounded">Rp</span>
                                    <p class="text-primary-900 text-base md:text-xl font-medium">25.000</p>
                                </div>
                                <p class="text-gray-400 font-normal text-xs md:text-sm">50
                                    <span>terjual</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full max-w-sm bg-white border border-gray-900 rounded-lg transition duration-500 ease-in-out hover:shadow-lg hover:shadow-primary-100 pt-3 px-2.5">
                        <div class="relative pb-2">
                            <a href="#">
                                <img class="rounded-lg border border-gray-900"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg"
                                    alt="product image" />
                            </a>
                            <a href="/cart-belanja">
                                <div
                                    class="text-sm absolute top-0 right-0 bg-[#E8FFCC] text-primary-900 px-4 rounded-full h-10 w-10 flex flex-col items-center justify-center mt-3 mr-3 hover:shadow-md hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 15C13.8954 15 13 15.8954 13 17C13 18.1046 13.8954 19 15 19C16.1046 19 17 18.1046 17 17C17 15.8954 16.1046 15 15 15ZM15 15H7.29394C6.83269 15 6.60197 15 6.41211 14.918C6.24466 14.8456 6.09934 14.7288 5.99349 14.5802C5.87348 14.4118 5.82609 14.1863 5.72945 13.7353L3.27148 2.26477C3.17484 1.81376 3.12587 1.58825 3.00586 1.4198C2.90002 1.27123 2.75525 1.15441 2.5878 1.08205C2.39794 1 2.16779 1 1.70653 1H1M4 4H16.8732C17.595 4 17.9557 4 18.1979 4.15036C18.4101 4.28206 18.5652 4.48838 18.6329 4.72876C18.7102 5.00319 18.611 5.34996 18.411 6.04346L17.0264 10.8435C16.9068 11.2581 16.8469 11.4655 16.7256 11.6193C16.6185 11.7551 16.4772 11.8608 16.3171 11.926C16.1356 12 15.9199 12 15.4883 12H5.73047M6 19C4.89543 19 4 18.1046 4 17C4 15.8954 4.89543 15 6 15C7.10457 15 8 15.8954 8 17C8 18.1046 7.10457 19 6 19Z"
                                                stroke="currentColor" stroke-width="1.38636" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="px-1 pb-3 md:pb-4">
                            <a href="#">
                                <h5 class="md:text-xl text-lg font-normal tracking-tight mb-1 md:mb-2 text-gray-900">
                                    Sabun Lervia</h5>
                            </a>
                            <div class="flex items-end justify-between">
                                <div class="flex items-center space-x-0.5">
                                    <span class="font-normal text-gray-600 text-sm md:text-base rounded">Rp</span>
                                    <p class="text-primary-900 text-base md:text-xl font-medium">25.000</p>
                                </div>
                                <p class="text-gray-400 font-normal text-xs md:text-sm">50
                                    <span>terjual</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="bg-gray-200 border-none h-0.5 mx-5 md:mx-20 my-20 md:my-28">
        <div class="container w-full">
            <div class="w-full flex justify-start items-center mb-2 space-x-4">
                <svg width="15" height="30" viewBox="0 0 15 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="15" height="30" rx="4" fill="#00A500" />
                </svg>
                <p class="text-primary-900 font-medium text-base md:text-lg">Kini Tersedia</p>
            </div>
            <div class="w-full flex justify-between items-center mb-10">
                <h2 class="text-gray-900 text-2xl font-semibold tracking-wide">Produk Kesehatan</h2>
                <a href="/katalog-produk"
                    class="text-white bg-primary-800 hover:bg-primary-100 hover:shadow-lg hover:text-primary-900 tracking-wide focus:ring-4 focus:ring-primary-300 font-medium rounded-md text-xs md:text-sm px-5 py-2.5 md:px-8 md:py-3 focus:outline-none transition duration-500 ease-in-out ">View
                    All</a>
            </div>
            <div class="w-full flex">
                <div class="grid overflow-x-auto px-2 py-4 grid-cols-2 lg:grid-cols-4 gap-3">
                    <div
                        class="w-full max-w-sm bg-white border border-gray-900 rounded-lg transition duration-500 ease-in-out hover:shadow-lg hover:shadow-primary-100 pt-3 px-2.5">
                        <div class="relative pb-2">
                            <a href="#">
                                <img class="rounded-lg border border-gray-900"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg"
                                    alt="product image" />
                            </a>
                            <a href="/cart-belanja">
                                <div
                                    class="text-sm absolute top-0 right-0 bg-[#E8FFCC] text-primary-900 px-4 rounded-full h-10 w-10 flex flex-col items-center justify-center mt-3 mr-3 hover:shadow-md hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 15C13.8954 15 13 15.8954 13 17C13 18.1046 13.8954 19 15 19C16.1046 19 17 18.1046 17 17C17 15.8954 16.1046 15 15 15ZM15 15H7.29394C6.83269 15 6.60197 15 6.41211 14.918C6.24466 14.8456 6.09934 14.7288 5.99349 14.5802C5.87348 14.4118 5.82609 14.1863 5.72945 13.7353L3.27148 2.26477C3.17484 1.81376 3.12587 1.58825 3.00586 1.4198C2.90002 1.27123 2.75525 1.15441 2.5878 1.08205C2.39794 1 2.16779 1 1.70653 1H1M4 4H16.8732C17.595 4 17.9557 4 18.1979 4.15036C18.4101 4.28206 18.5652 4.48838 18.6329 4.72876C18.7102 5.00319 18.611 5.34996 18.411 6.04346L17.0264 10.8435C16.9068 11.2581 16.8469 11.4655 16.7256 11.6193C16.6185 11.7551 16.4772 11.8608 16.3171 11.926C16.1356 12 15.9199 12 15.4883 12H5.73047M6 19C4.89543 19 4 18.1046 4 17C4 15.8954 4.89543 15 6 15C7.10457 15 8 15.8954 8 17C8 18.1046 7.10457 19 6 19Z"
                                                stroke="currentColor" stroke-width="1.38636" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div class="px-1 pb-3 md:pb-4">
                            <a href="#">
                                <h5 class="md:text-xl text-lg font-normal tracking-tight mb-1 md:mb-2 text-gray-900">
                                    Sabun Lervia</h5>
                            </a>
                            <div class="flex items-end justify-between">
                                <div class="flex items-center space-x-0.5">
                                    <span class="font-normal text-gray-600 text-sm md:text-base rounded">Rp</span>
                                    <p class="text-primary-900 text-base md:text-xl font-medium">25.000</p>
                                </div>
                                <p class="text-gray-400 font-normal text-xs md:text-sm">50
                                    <span>terjual</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full max-w-sm bg-white border border-gray-900 rounded-lg transition duration-500 ease-in-out hover:shadow-lg hover:shadow-primary-100 pt-3 px-2.5">
                        <div class="relative pb-2">
                            <a href="#">
                                <img class="rounded-lg border border-gray-900"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg"
                                    alt="product image" />
                            </a>
                            <a href="/cart-belanja">
                                <div
                                    class="text-sm absolute top-0 right-0 bg-[#E8FFCC] text-primary-900 px-4 rounded-full h-10 w-10 flex flex-col items-center justify-center mt-3 mr-3 hover:shadow-md hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 15C13.8954 15 13 15.8954 13 17C13 18.1046 13.8954 19 15 19C16.1046 19 17 18.1046 17 17C17 15.8954 16.1046 15 15 15ZM15 15H7.29394C6.83269 15 6.60197 15 6.41211 14.918C6.24466 14.8456 6.09934 14.7288 5.99349 14.5802C5.87348 14.4118 5.82609 14.1863 5.72945 13.7353L3.27148 2.26477C3.17484 1.81376 3.12587 1.58825 3.00586 1.4198C2.90002 1.27123 2.75525 1.15441 2.5878 1.08205C2.39794 1 2.16779 1 1.70653 1H1M4 4H16.8732C17.595 4 17.9557 4 18.1979 4.15036C18.4101 4.28206 18.5652 4.48838 18.6329 4.72876C18.7102 5.00319 18.611 5.34996 18.411 6.04346L17.0264 10.8435C16.9068 11.2581 16.8469 11.4655 16.7256 11.6193C16.6185 11.7551 16.4772 11.8608 16.3171 11.926C16.1356 12 15.9199 12 15.4883 12H5.73047M6 19C4.89543 19 4 18.1046 4 17C4 15.8954 4.89543 15 6 15C7.10457 15 8 15.8954 8 17C8 18.1046 7.10457 19 6 19Z"
                                                stroke="currentColor" stroke-width="1.38636" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div class="px-1 pb-3 md:pb-4">
                            <a href="#">
                                <h5 class="md:text-xl text-lg font-normal tracking-tight mb-1 md:mb-2 text-gray-900">
                                    Sabun Lervia</h5>
                            </a>
                            <div class="flex items-end justify-between">
                                <div class="flex items-center space-x-0.5">
                                    <span class="font-normal text-gray-600 text-sm md:text-base rounded">Rp</span>
                                    <p class="text-primary-900 text-base md:text-xl font-medium">25.000</p>
                                </div>
                                <p class="text-gray-400 font-normal text-xs md:text-sm">50
                                    <span>terjual</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full max-w-sm bg-white border border-gray-900 rounded-lg transition duration-500 ease-in-out hover:shadow-lg hover:shadow-primary-100 pt-3 px-2.5">
                        <div class="relative pb-2">
                            <a href="#">
                                <img class="rounded-lg border border-gray-900"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg"
                                    alt="product image" />
                            </a>
                            <a href="/cart-belanja">
                                <div
                                    class="text-sm absolute top-0 right-0 bg-[#E8FFCC] text-primary-900 px-4 rounded-full h-10 w-10 flex flex-col items-center justify-center mt-3 mr-3 hover:shadow-md hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 15C13.8954 15 13 15.8954 13 17C13 18.1046 13.8954 19 15 19C16.1046 19 17 18.1046 17 17C17 15.8954 16.1046 15 15 15ZM15 15H7.29394C6.83269 15 6.60197 15 6.41211 14.918C6.24466 14.8456 6.09934 14.7288 5.99349 14.5802C5.87348 14.4118 5.82609 14.1863 5.72945 13.7353L3.27148 2.26477C3.17484 1.81376 3.12587 1.58825 3.00586 1.4198C2.90002 1.27123 2.75525 1.15441 2.5878 1.08205C2.39794 1 2.16779 1 1.70653 1H1M4 4H16.8732C17.595 4 17.9557 4 18.1979 4.15036C18.4101 4.28206 18.5652 4.48838 18.6329 4.72876C18.7102 5.00319 18.611 5.34996 18.411 6.04346L17.0264 10.8435C16.9068 11.2581 16.8469 11.4655 16.7256 11.6193C16.6185 11.7551 16.4772 11.8608 16.3171 11.926C16.1356 12 15.9199 12 15.4883 12H5.73047M6 19C4.89543 19 4 18.1046 4 17C4 15.8954 4.89543 15 6 15C7.10457 15 8 15.8954 8 17C8 18.1046 7.10457 19 6 19Z"
                                                stroke="currentColor" stroke-width="1.38636" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div class="px-1 pb-3 md:pb-4">
                            <a href="#">
                                <h5 class="md:text-xl text-lg font-normal tracking-tight mb-1 md:mb-2 text-gray-900">
                                    Sabun Lervia</h5>
                            </a>
                            <div class="flex items-end justify-between">
                                <div class="flex items-center space-x-0.5">
                                    <span class="font-normal text-gray-600 text-sm md:text-base rounded">Rp</span>
                                    <p class="text-primary-900 text-base md:text-xl font-medium">25.000</p>
                                </div>
                                <p class="text-gray-400 font-normal text-xs md:text-sm">50
                                    <span>terjual</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full max-w-sm bg-white border border-gray-900 rounded-lg transition duration-500 ease-in-out hover:shadow-lg hover:shadow-primary-100 pt-3 px-2.5">
                        <div class="relative pb-2">
                            <a href="#">
                                <img class="rounded-lg border border-gray-900"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg"
                                    alt="product image" />
                            </a>
                            <a href="/cart-belanja">
                                <div
                                    class="text-sm absolute top-0 right-0 bg-[#E8FFCC] text-primary-900 px-4 rounded-full h-10 w-10 flex flex-col items-center justify-center mt-3 mr-3 hover:shadow-md hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 15C13.8954 15 13 15.8954 13 17C13 18.1046 13.8954 19 15 19C16.1046 19 17 18.1046 17 17C17 15.8954 16.1046 15 15 15ZM15 15H7.29394C6.83269 15 6.60197 15 6.41211 14.918C6.24466 14.8456 6.09934 14.7288 5.99349 14.5802C5.87348 14.4118 5.82609 14.1863 5.72945 13.7353L3.27148 2.26477C3.17484 1.81376 3.12587 1.58825 3.00586 1.4198C2.90002 1.27123 2.75525 1.15441 2.5878 1.08205C2.39794 1 2.16779 1 1.70653 1H1M4 4H16.8732C17.595 4 17.9557 4 18.1979 4.15036C18.4101 4.28206 18.5652 4.48838 18.6329 4.72876C18.7102 5.00319 18.611 5.34996 18.411 6.04346L17.0264 10.8435C16.9068 11.2581 16.8469 11.4655 16.7256 11.6193C16.6185 11.7551 16.4772 11.8608 16.3171 11.926C16.1356 12 15.9199 12 15.4883 12H5.73047M6 19C4.89543 19 4 18.1046 4 17C4 15.8954 4.89543 15 6 15C7.10457 15 8 15.8954 8 17C8 18.1046 7.10457 19 6 19Z"
                                                stroke="currentColor" stroke-width="1.38636" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="px-1 pb-3 md:pb-4">
                            <a href="#">
                                <h5 class="md:text-xl text-lg font-normal tracking-tight mb-1 md:mb-2 text-gray-900">
                                    Sabun Lervia</h5>
                            </a>
                            <div class="flex items-end justify-between">
                                <div class="flex items-center space-x-0.5">
                                    <span class="font-normal text-gray-600 text-sm md:text-base rounded">Rp</span>
                                    <p class="text-primary-900 text-base md:text-xl font-medium">25.000</p>
                                </div>
                                <p class="text-gray-400 font-normal text-xs md:text-sm">50
                                    <span>terjual</span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <hr class="bg-gray-200 border-none h-0.5 mx-5 md:mx-20 my-20 md:my-28">
    </section>
    <footer>
        <x-footer />
    </footer>
</body>

</html>
