@vite(['resources/css/app.css', 'resources/js/app.js'])
<nav class="fixed w-full z-40 bg-white border-gray-200 border-b px-5">
    <div class="max-w-screen-2xl flex flex-wrap md:flex-nowrap items-center justify-between mx-auto">
        <a href="belanja" class="flex items-center space-x-3 m-2 rtl:space-x-reverse">
            <img src="Assets/logo/logomark.png" class="h-8" alt="IWM Logo" />
        </a>
        <span class="flex items-center md:hidden">
            @if (Auth::check())
                <!-- TOMBOL DROPDOWN -->
                <button id="dropdownAvatarNameButton" data-dropdown-toggle="userDropdown" data-dropdown-trigger="hover"
                    class="flex items-center text-sm font-medium text-gray-900 rounded-full transition duration-200 group hover:text-primary-600 md:me-0 "
                    type="button">
                    <span class="sr-only">Open user menu</span>
                    <svg class="w-2.5 h-2.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                    <div
                        class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-100 rounded-full">
                        <span class="font-semibold">{{ $letters }}</span>
                    </div>
                </button>

                <!-- KONTEN DROPDOWN -->
                <div id="userDropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                        <div class="font-semibold cursor-default">{{ $username }}</div>
                        <div class="truncate cursor-default text-primary-900">{{ Auth::user()->user_id }}</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                        aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                        <li>
                            <a href="{{ route('user.dashboard') }}"
                                class="block px-4 py-2 hover:bg-primary-900 hover:text-gray-50">Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('user.pengaturan') }}"
                                class="block px-4 py-2 hover:bg-primary-900 hover:text-gray-50">Pengaturan</a>
                        </li>
                    </ul>
                    <div class="py-2">
                        <button onclick="document.getElementById('logout-form').submit();" type="button"
                            class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-red-600 hover:text-gray-50">Sign
                            out</button>

                        <form action="{{ route('logout') }}" id="logout-form" method="POST">
                            @csrf
                        </form>
                    </div>
                </div>
            @endif

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
        </span>
        <div class="hidden w-full md:flex justify-between items-center" id="navbar-multi-level">
            <ul
                class="flex text-sm flex-col md:flex-row mt-5 md:mt-0 border border-primary-900 rounded-lg md:border-none lg:text-base">
                <li>
                    <a href="/"
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
                    {{-- <!-- Dropdown menu --> --}}
                    <div id="dropdownNavbar"
                        class="z-50 hidden font-normal ring-1 ring-primary-900 bg-white divide-y divide-gray-100 rounded shadow w-44">
                        <ul class="py-2 text-sm text-gray-900 dark:text-gray-200" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="tentang"
                                    class="block px-4 py-2 text-sm lg:text-base hover:bg-primary-900 hover:text-white">Tentang</a>
                            </li>
                            <li>
                                <a href="manajemen-iwm"
                                    class="block px-4 py-2 text-sm lg:text-base hover:bg-primary-900 hover:text-white">Struktur</a>
                            </li>
                            <li>
                                <a href="kontak"
                                    class="block px-4 py-2 text-sm lg:text-base hover:bg-primary-900 hover:text-white">Kontak</a>
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
                    {{-- <!-- Dropdown menu --> --}}
                    <div id="layananDropdownNavbar"
                        class="z-50 hidden font-normal bg-white divide-y divide-gray-100 rounded ring-1 ring-primary-900 shadow w-44">
                        <ul class="py-2 text-sm text-gray-900 dark:text-gray-200"
                            aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="sektor-jasa"
                                    class="block px-4 py-2 text-sm lg:text-base hover:bg-primary-900 hover:text-white">Jasa</a>
                            </li>
                            <li>
                                <a href="sektor-simpanan"
                                    class="block px-4 py-2 text-sm lg:text-base hover:bg-primary-900 hover:text-white">Simpanan</a>
                            </li>
                            <li>
                                <a href="sektor-pembiayaan"
                                    class="block px-4 py-2 text-sm lg:text-base hover:bg-primary-900 hover:text-white">Pembiayaan</a>
                            </li>
                            <li>
                                <a href="proyek-tahunan"
                                    class="block px-4 py-2 text-sm lg:text-base hover:bg-primary-900 hover:text-white">Proyek
                                    Tahunan</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{route('belanja')}}"
                        class="block py-2 px-3 hover:text-white text-gray-900 text-center hover:bg-primary-900 md:hover:bg-primary-900 md:hover:text-white md:rounded-none md:py-6 md:px-5">Belanja</a>
                </li>
                <li>
                    <a href="daftar"
                        class="block py-2 px-3 hover:text-white rounded-b-md text-gray-900 text-center hover:bg-primary-900 md:hover:bg-primary-900 md:hover:text-white md:rounded-none  md:py-6 md:px-5">Daftar</a>
                </li>
            </ul>
            <div class="flex gap-2 text-center items-center justify-center bg-white m-4">
                @if (Auth::check())
                    <span class="hidden md:flex">
                        @include('components.navigation.avatar', [$username, $letters])
                    </span>
                    <a href="cart-belanja"
                        class="focus:ring-4 items-center justify-center hover:bg-primary-200 focus:ring-primary-300 font-medium rounded-md text-sm p-1 focus:outline-none">
                        <img src="Assets/icons/cart.svg" class="h-6" alt="">
                    </a>
                @else
                    <a href="cart-belanja"
                        class="focus:ring-4 items-center justify-center hover:bg-primary-200 focus:ring-primary-300 font-medium rounded-md text-sm p-1 focus:outline-none">
                        <img src="{{asset('assets/icons/cart.svg')}}" class="h-6" alt="">
                    </a>
                    <a href="{{ route('login') }}"
                        class="text-primary-900 ring-1 ring-primary-900 bg-white hover:bg-primary-900 hover:text-white focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm lg:text-base px-3 py-1 focus:outline-none">Sign
                        In</a>
                @endif
            </div>
        </div>
    </div>
</nav>
<div class="w-full bg-white h-20"></div>
