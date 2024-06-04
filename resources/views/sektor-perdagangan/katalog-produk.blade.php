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
    <x-navbar/>
    {{-- Start Button to Top --}}
    <a href="navbar"
        class="fixed z-30 bottom-5 scroll-smooth group text-white right-5 bg-primary-800 hover:bg-primary-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-3 text-center inline-flex items-center me-2">
        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 13V1m0 0L1 5m4-4 4 4" />
        </svg>
        <span class="sr-only">Icon description</span>
    </a>
    {{-- End Button to Top --}}
    {{-- Start Search Bar --}}
    <x-search-belanja/>
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
                <div class="border-gray-900 border shadow-lg hidden xl:block p-4 rounded-lg">
                    <p class="text-primary-900 font-semibold text-xl">Kategori</p>
                    <hr class="w-full bg-gray-900 border-0 h-px my-1">
                    <div class="mt-5 overflow-y-auto max-h-80">
                        @foreach ($map as $category => $items)
                        <div id="accordion-{{strtolower($category)}}" data-accordion="collapse" class="p-1">
                            <h2 id="accordion-{{strtolower($category)}}-heading-1">
                                <button type="button"
                                    class="flex items-center text-base justify-between w-full py-2 px-3 my-1 font-normal rtl:text-right text-gray-900 rounded-lg focus:ring-1 focus:ring-primary-200 focus:bg-primary-200 focus:text-gray-900 hover:bg-primary-100 gap-3"
                                    data-accordion-target="#accordion-{{strtolower($category)}}-body-1" aria-expanded="false"
                                    aria-controls="accordion-{{strtolower($category)}}-body-1">
                                    <span>{{$category}}</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                </button>
                            </h2>
                            <div id="accordion-{{strtolower($category)}}-body-1" class="hidden"
                                aria-labelledby="accordion-{{strtolower($category)}}-heading-1">
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
            </div>

            <!-- Main Content -->
            <div class="py-4 lg:ml-4 mt-3">
                @foreach ($products as $product => $items)
                <div class="w-full flex justify-start items-center mb-3 space-x-4">
                    <svg width="15" height="30" viewBox="0 0 15 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="15" height="30" rx="4" fill="#00A500" />
                </svg>
                <p id="{{strtolower($product)}}" class="text-primary-900 font-medium text-base md:text-lg">{{$product}}</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 overflow-y-auto pb-3">
                    @foreach ($items as $product)
                    @component('components.layanan.perdagangan.card-belanja ', [
                        'produk' => $product->product,
                        'harga' => number_format($product->price, 0, '.', ','),
                        'id' => $product->product_id
                    ])
                    @endcomponent
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
