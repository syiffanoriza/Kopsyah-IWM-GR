<nav class="flex items-center justify-between bg-gray-100 px-9 py-0">
    <div class="flex items-center justify-between text-gray-900">
        <div class="flex mr-5">
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
    <div class="flex items-center justify-evenly text-md">
        <button class="items-center rounded-md ring-2 text-sm ring-primary-900 text-primary-900 py-1 px-3 hover:text-gray-50 hover:ring-primary-900 hover:bg-primary-900 ">
            Sign In
        </button>
        <div>
            <button>
                
            </button>
        </div>
    </div>
</nav>





<nav class="flex items-center justify-between flex-wrap bg-primary-500 p-6">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
      <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
      <span class="font-semibold text-xl tracking-tight">Tailwind CSS</span>
    </div>
    <div class="block lg:hidden">
      <button class="flex items-center px-3 py-2 border rounded text-primary-200 border-primary-400 hover:text-white hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
      </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
      <ul class="text-sm flex-collg:flex-col">
        <li>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-primary-200 hover:text-white mr-4">
                Docs
              </a>
        </li>
        <li>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-primary-200 hover:text-white mr-4">
                Examples
              </a>
        </li>
        <li>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-primary-200 hover:text-white">
                Blog
              </a>
        </li>
      </div>
      <div>
        <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-primary-500 hover:bg-white mt-4 lg:mt-0">Download</a>
      </div>
    </div>
  </nav>