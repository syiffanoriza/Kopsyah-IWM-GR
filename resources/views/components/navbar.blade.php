<nav class="flex items-center justify-between bg-gray-100 px-5">
    <div class="flex items-center justify-between text-gray-900 ml-9">
        <div class="flex px-5">
            <img src="{{asset('assets/logo/logomark.png')}}" class="h-10" alt="IWM Logo"/>
        </div>
        <button data-collapse-toggle="navbar-dropdown" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-primary-900 rounded-lg md:hidden hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div>
            <ul class="flex items-center justify-evenly text-md text-gray-900">
                <li>
                    <a href="#beranda" class="block py-6 px-4 hover:text-gray-50 hover:bg-primary-900">Beranda</a>
                </li>
                {{-- Tentang Kami Dropdown --}}
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between py-6 px-4 hover:text-gray-50 hover:bg-primary-900">Tentang Kami
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
                {{-- Layanan Kami Dropdown --}}
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="layananDropdownNavbar" class="flex items-center justify-between py-6 px-4 hover:text-gray-50 hover:bg-primary-900">Layanan
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="layananDropdownNavbar"
                        class="z-10 hidden font-normal bg-gray-50 divide-y divide-gray-200 rounded border-primary-900 shadow w-44">
                        <ul class="py-2 text-sm text-gray-900" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="#jasa-page"
                                    class="block px-4 py-2 hover:text-gray-50 hover:bg-primary-900">Jasa</a>
                            </li>
                            <li>
                                <a href="#simpanan-page"
                                    class="block px-4 py-2 hover:text-gray-50 hover:bg-primary-900">Simpanan</a>
                            </li>
                            <li>
                                <a href="#pembiayaan-page"
                                    class="block px-4 py-2 hover:text-gray-50 hover:bg-primary-900">Pembiayaan</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:text-gray-50 hover:bg-primary-900">Proyek Tahunan</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#belanja" class="block py-6 px-4 hover:text-gray-50 hover:bg-primary-900">Belanja</a>
                </li><li>
                    <a href="#daftar" class="block py-6 px-4 hover:text-gray-50 hover:bg-primary-900">Daftar</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="flex items-center justify-between text-md">
        <button class="items-center rounded-md ring-2 text-sm ring-primary-900 text-primary-900 py-1 px-3 hover:text-gray-50 hover:ring-primary-900 hover:bg-primary-900">
            Sign In
        </button>
        <div class="flex items-center ml-5">
            <div class="inline-flex items-center justify-center hover:bg-primary-200 flex-shrink-0 w-8 h-8 text-primary-500 bg-primary-100 rounded-lg">
                <a href="#profile">
                    <img src="Assets/icons/cart.svg" class="h-6 hover:text-gray-900" alt="Cart Icon">
                    <span class="sr-only">Cart icon</span>
                </a>
            </div>  
            <div class="inline-flex m-4 items-center justify-center hover:bg-primary-200 flex-shrink-0 w-8 h-8 text-primary-500 bg-primary-100 rounded-lg">
                <a href="#profile">
                    <img src="Assets/icons/user.svg" class="h-6" alt="Cart Icon">
                    <span class="sr-only">User icon</span>
                </a>
            </div>        
            
            
        </div>
    </div>
</nav>