<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom style for sticky sidebar */
        .sticky-sidebar {
            position: -webkit-sticky;
            /* Safari */
            position: sticky;
            top: 0;
        }

        .scroll-smooth {
            scroll-behavior: smooth
        }
    </style>
</head>

<body>
    {{-- Start Button to Top --}}
    <a href="#search-bar"
        class="fixed z-30 bottom-5 scroll-smooth group text-white right-5 bg-primary-800 hover:bg-primary-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-3 text-center inline-flex items-center me-2">
        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 13V1m0 0L1 5m4-4 4 4" />
        </svg>
        <span class="sr-only">Icon description</span>
    </a>
    {{-- End Button to Top --}}
    
    <x-navbar />
    {{-- Start Search Bar --}}
    <x-search-belanja />
    {{-- End Search Bar --}}
    <div class="container">
        <div class="flex flex-col lg:flex-row">
            <!-- Sidebar -->
            <div class="bg-white w-full z-10 pt-7 rounded-b-lg lg:w-1/4 lg:h-screen sticky-sidebar">
                {{-- Kategori Small --}}
                <div class="lg:hidden w-full z-50">
                    <p class="text-primary-900 font-semibold text-xl p-2">Kategori</p>
                    <ul
                        class="text-sm font-medium w-full max-h-16 overflow-x-auto border-gray-900 border text-center text-gray-500 rounded-lg shadow-lg flex whitespace-nowrap">
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
                <div class="border-gray-900 border shadow-lg max-h-full hidden lg:block p-4 rounded-lg">
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
            </div>

            <!-- Main Content -->
            <div class="flex-1 py-4 lg:ml-4 mt-3">
                <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 overflow-y-auto">
                    <!-- Product Card 1 -->
                    <x-card-belanja />
                    <!-- Product Card 2 -->
                    <x-card-belanja />
                    <!-- Product Card 3 -->
                    <x-card-belanja />
                    <!-- Product Card 4 -->
                    <x-card-belanja />
                    <!-- Product Card 5 -->
                    <x-card-belanja />
                    <!-- Product Card 6 -->
                    <x-card-belanja />
                    <!-- Product Card 7 -->
                    <x-card-belanja />
                    <!-- Product Card 8 -->
                    <x-card-belanja />
                    <!-- Product Card 9 -->
                    <x-card-belanja />
                    <!-- Product Card 10 -->
                    <x-card-belanja />
                    <!-- Product Card 11 -->
                    <x-card-belanja />
                    <!-- Product Card 12 -->
                    <x-card-belanja />
                    <!-- Product Card 13 -->
                    <x-card-belanja />
                    <!-- Product Card 14 -->
                    <x-card-belanja />
                </div>
            </div>
        </div>
    </div>
</body>

</html>
