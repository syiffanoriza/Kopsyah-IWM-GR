<nav class="flex items-center justify-between bg-gray-100 px-9 py-0">
    <div class="flex items-center justify-between text-gray-900">
        <div class="flex mx-5">
            <img src="{{asset('assets/logo/logomark.png')}}" class="h-10" alt="IWM Logo"/>
        </div>
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
                                    class="block px-4 py-2 hover:text-gray-50 hover:bg-primary-900">Proyek Tahunan</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#beranda" class="block py-6 px-4 hover:text-gray-50 hover:bg-primary-900">Belanja</a>
                </li><li>
                    <a href="#beranda" class="block py-6 px-4 hover:text-gray-50 hover:bg-primary-900">Daftar</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="flex items-center justify-between text-md">
        <button class="items-center rounded-md ring-2 text-sm ring-primary-900 text-primary-900 py-1 px-3 hover:text-gray-50 hover:ring-primary-900 hover:bg-primary-900 ">
            Sign In
        </button>
        <div class="flex m-5">
            <a href="#cart">
                <img src="Assets/icons/shopping-bag.svg" class="h-6" alt="">
            </a>
            <a href="#profile">
                <img src="Assets/icons/user.svg" class="h-6" alt="">
            </a>
        </div>
    </div>
</nav>


