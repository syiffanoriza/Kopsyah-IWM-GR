{{-- Start Search Bar --}}
<div class="py-3 mb-5 lg:mb-16 w-full border-b border-gray-200">
    <div class="container w-full flex justify-end">
        <form class="max-w-xl w-full">
            <div class="flex">
                <label for="search-dropdown"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your
                    Email</label>
                <button id="dropdown-button" data-dropdown-toggle="dropdown"
                    class="flex-shrink-0 hidden md:inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-white bg-primary-800 border border-primary-800 rounded-s-lg hover:bg-primary-900 focus:ring-1 focus:outline-none focus:ring-primary-500"
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
                        class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 sm:rounded-e-lg sm:rounded-s-none rounded-lg border-gray-300 border-s-2 border focus:ring-primary-800 focus:border-primary-800"
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