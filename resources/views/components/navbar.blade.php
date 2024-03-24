<nav class="bg-gray-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-start mx-auto p-4 bg-">
        <a href="#" class="flex items-start space-x-3 pe-5 rtl:space-x-reverse">
            <img src="{{asset('assets/logo/logomark.png')}}" class="h-9" alt="IWM Logo"/>
        </a>
        <button data-collapse-toggle="navbar-dropdown" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-primary-900 rounded-lg md:hidden hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul
                class="flex flex-col font-medium text-gray-900 md:p-0 mt-4 border border-primary-900 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-gray-50">
                <li>
                    <a href="#"
                        class="block px-5 py-6 hover:text-gray-50 hover:bg-primary-900"
                        aria-current="page">Beranda</a>
                </li>
                {{-- Tentang Kami Item Nav --}}
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-900 md:p-0 md:w-auto">Tentang Kami
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-10 hidden font-normal bg-gray-50 divide-y divide-gray-200 rounded border-primary-900 shadow w-44">
                        <ul class="py-2 text-sm text-gray-900" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:text-gray-50 hover:bg-primary-900">Tentang</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:text-gray-50 hover:bg-primary-900">Struktur</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:text-gray-50 hover:bg-primary-900">Kontak</a>
                            </li>
                        </ul>
                    </div>
                </li> 
                {{-- Layanan Item Nav --}}
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbarTentang"
                        class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-900 md:p-0 md:w-auto">Layanan
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbarTentang"
                        class="z-10 hidden font-normal bg-gray-50 divide-y divide-gray-200 rounded border-primary-900 shadow w-44">
                        <ul class="py-2 text-sm text-gray-900" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:text-gray-50 hover:bg-primary-900">Jasa</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:text-gray-50 hover:bg-primary-900">Simpanan</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:text-gray-50 hover:bg-primary-900">Pembiayaan</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:text-gray-50 hover:bg-primary-900">Projek Tahunan</a>
                            </li>
                        </ul>
                    </div>
                </li> 
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-900 md:p-0 dark:text-white">Belanja</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-900 md:p-0 dark:text-white">Daftar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
