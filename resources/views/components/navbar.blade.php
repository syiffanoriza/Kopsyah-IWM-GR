<nav class="bg-white border-gray-200 border-b">
    <div class="max-w-screen-xl flex flex-wrap md:flex-nowrap items-center justify-between md:justify-start w-full mx-auto">
        <a href="#" class="flex items-center space-x-3 m-2 rtl:space-x-reverse">
            <img src="Assets/logo/logomark.png" class="h-8" alt="IWM Logo" />
        </a>
        <button data-collapse-toggle="navbar-multi-level" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center m-2 text-sm text-primary-900 rounded-lg md:hidden hover:bg-primary-100 focus:outline-none focus:ring-2 focus:ring-primary-200"
            aria-controls="navbar-multi-level" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:justify-between md:flex justify-between items-center" id="navbar-multi-level">
            <ul
                class="flex flex-col font-medium md:p-0 mt-5 border border-gray-100 rounded-lg bg-white md:space-x-0 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                <li>
                    <a href="#"
                        class="block py-2 px-3 hover:text-white text-center text-gray-700 hover:bg-primary-900 md:bg-transparent md:hover:bg-primary-900 md:hover:text-white md:text-gray-700 md:py-6 md:px-5"
                        aria-current="page">Beranda</a>
                </li>
                {{-- Tentang Kami Dropdown --}}
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex items-center justify-center text-center w-full py-2 px-3 md:py-6 md:px-5 hover:bg-primary-900 hover:text-white text-gray-900 md:border-0 md:w-auto">Tentang
                        Kami
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-10 hidden font-normal ring-1 ring-primary-900 bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-primary-900 hover:text-white">Tentang</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-primary-900 hover:text-white">Struktur</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-primary-900 hover:text-white">Kontak</a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- Layanan Dropdown --}}
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="layananDropdownNavbar"
                        class="flex items-center justify-center w-full py-2 px-3 md:py-6 md:px-5 text-center hover:text-white text-gray-900 hover:bg-primary-900 md:border-0 md:w-auto">Layanan
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="layananDropdownNavbar"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded ring-1 ring-primary-900 shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-primary-900 hover:text-white">Jasa</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-primary-900 hover:text-white">Simpanan</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-primary-900 hover:text-white">Pembiayaan</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-primary-900 hover:text-white">Proyek Tahunan</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 hover:text-white text-gray-700 text-center hover:bg-primary-900 md:hover:bg-primary-900 md:hover:text-white md:rounded-none md:text-gray-700 md:py-6 md:px-5">Belanja</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 hover:text-white text-gray-700 text-center hover:bg-primary-900 md:hover:bg-primary-900 md:hover:text-white md:rounded-none md:text-gray-700 md:py-6 md:px-5">Daftar</a>
                </li>
            </ul>
            <div class="flex space-x-3 text-center items-center justify-center bg-white m-4 self-end">
                <button type="button" class="text-primary-900 ring-1 ring-primary-900 bg-white hover:bg-primary-900 hover:text-white focus:ring-4 focus:ring-primary-300 font-medium rounded-md text-sm px-2 py-1.5 focus:outline-none">Sign In</button>
                <button type="button" class="bg-primary-100 focus:ring-4 items-center justify-center hover:bg-primary-200 focus:ring-primary-300 font-medium rounded-md text-sm px-1 py-1  focus:outline-none">
                    <img src="Assets/icons/cart.svg" class="h-6" alt="">
                </button>
                <button type="button" class="bg-primary-100 focus:ring-4 items-center justify-center hover:bg-primary-200 focus:ring-primary-300 font-medium rounded-md text-sm px-1 py-1  focus:outline-none">
                    <img src="Assets/icons/user.svg" class="h-6" alt="">
                </button>
            </div>
        </div>
    </div>
</nav>