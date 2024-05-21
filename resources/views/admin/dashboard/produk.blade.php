<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengelolaan Produk</title>
    <link rel="icon" href="{{ asset('/assets/logo/logomark.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('components.admin.sidebar', ['active' => 'Produk'])
    <div class="flex flex-col gap-4 p-4 min-h-screen h-auto sm:ml-64 bg-gray-100">
        <div class="flex flex-col gap-1 p-10 w-full pr-12 bg-gray-50 rounded-md shadow-sm">
            <h1 class="text-2xl font-bold">Pengelolaan Produk</h1>
            <p class="text-sm">Total: {{ count($index) }} Produk</p>
            <div class="flex mt-4 gap-4 items-center">

                @include('components.admin.modal', ['action' => 'create'])

                <label for="table-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.53 20.47L17.689 16.629C18.973 15.106 19.75 13.143 19.75 11C19.75 6.175 15.825 2.25 11 2.25C6.175 2.25 2.25 6.175 2.25 11C2.25 15.825 6.175 19.75 11 19.75C13.143 19.75 15.106 18.973 16.629 17.689L20.47 21.53C20.616 21.676 20.808 21.75 21 21.75C21.192 21.75 21.384 21.677 21.53 21.53C21.823 21.238 21.823 20.763 21.53 20.47ZM3.75 11C3.75 7.002 7.002 3.75 11 3.75C14.998 3.75 18.25 7.002 18.25 11C18.25 14.998 14.998 18.25 11 18.25C7.002 18.25 3.75 14.998 3.75 11Z" />
                        </svg>
                    </div>
                    <input type="text" id="table-search"
                        class="block ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-full bg-gray-50 transition duration-200 hover:border-primary-900 focus:ring-primary-900 focus:border-gray-300"
                        placeholder="Cari Barang">
                </div>
            </div>
        </div>

        <div data-dial-init class="z-30 fixed bottom-6 end-6 group">
            <div id="speed-dial-menu-text-outside-button-square" class="flex flex-col items-center hidden mb-4 space-y-2">
                <button data-modal-target="toggle-create-modal" data-modal-toggle="toggle-create-modal" class="flex items-center justify-center relative w-[52px] h-[52px] shadow-md text-gray-500 bg-white rounded-full border border-gray-200 hover:text-gray-900 focus:ring-0 focus:outline-none">
                    <svg class="w-6 h-6 m-auto" aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.625 2.5H6.375C3.84 2.5 2.5 3.84 2.5 6.375V17.625C2.5 20.16 3.84 21.5 6.375 21.5H17.625C20.16 21.5 21.5 20.16 21.5 17.625V6.375C21.5 3.84 20.16 2.5 17.625 2.5ZM20.5 17.625C20.5 19.586 19.587 20.5 17.625 20.5H6.375C4.414 20.5 3.5 19.586 3.5 17.625V6.375C3.5 4.414 4.414 3.5 6.375 3.5H17.625C19.587 3.5 20.5 4.414 20.5 6.375V17.625ZM16 12C16 12.276 15.776 12.5 15.5 12.5H12.5V15.5C12.5 15.776 12.276 16 12 16C11.724 16 11.5 15.776 11.5 15.5V12.5H8.5C8.224 12.5 8 12.276 8 12C8 11.724 8.224 11.5 8.5 11.5H11.5V8.5C11.5 8.224 11.724 8 12 8C12.276 8 12.5 8.224 12.5 8.5V11.5H15.5C15.776 11.5 16 11.724 16 12Z" fill="#25314C"/>
                    </svg>
                    <span class="absolute block mb-px text-sm font-medium -translate-y-1/2 -start-16 top-1/2">Tambah</span>
                </button>
                <a href="#table-search" class="flex items-center justify-center relative w-[52px] h-[52px] shadow-md text-gray-500 bg-white rounded-full border border-gray-200 hover:text-gray-900 focus:ring-0 focus:outline-none">
                    <svg class="w-6 h-6 mx-auto" aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.53 20.47L17.689 16.629C18.973 15.106 19.75 13.143 19.75 11C19.75 6.175 15.825 2.25 11 2.25C6.175 2.25 2.25 6.175 2.25 11C2.25 15.825 6.175 19.75 11 19.75C13.143 19.75 15.106 18.973 16.629 17.689L20.47 21.53C20.616 21.676 20.808 21.75 21 21.75C21.192 21.75 21.384 21.677 21.53 21.53C21.823 21.238 21.823 20.763 21.53 20.47ZM3.75 11C3.75 7.002 7.002 3.75 11 3.75C14.998 3.75 18.25 7.002 18.25 11C18.25 14.998 14.998 18.25 11 18.25C7.002 18.25 3.75 14.998 3.75 11Z" />
                    </svg>
                    <span class="absolute block mb-px text-sm font-medium -translate-y-1/2 -start-16 top-1/2">Cari</span>
                </a>
            </div>
            <button type="button" data-dial-toggle="speed-dial-menu-text-outside-button-square" aria-controls="speed-dial-menu-text-outside-button-square" aria-expanded="false" class="flex items-center justify-center text-white bg-primary-700 rounded-full w-14 h-14 hover:bg-primary-900 focus:ring-0 focus:outline-none shadow-md">
                <svg class="w-5 h-5 transition-transform group-hover:rotate-45" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
                <span class="sr-only">Open actions menu</span>
            </button>
        </div>

        <div class="flex flex-col gap-4 py-10 pl-9 bg-gray-50 rounded-md shadow-sm">


            @foreach ($group as $keyword => $produk)
                <div id="{{ strtolower($keyword) }}" class="flex flex-col gap-4">
                    <span class="flex items-center gap-1">
                        <svg class="flex-shrink-0 w-6 h-6 text-primary-900" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">     
                            <path d="M18.8419 13.9985C19.0708 13.9986 19.2935 13.9277 19.4762 13.7967C19.659 13.6657 19.7918 13.4817 19.8545 13.2726L21.9597 6.27346C22.0043 6.12466 22.012 5.96806 21.9821 5.81596C21.9522 5.66387 21.8856 5.52045 21.7874 5.39697C21.6893 5.2735 21.5623 5.17335 21.4165 5.1044C21.2707 5.03545 21.11 4.99958 20.9471 4.99962H7.02098L6.39467 2.74491C6.3354 2.53141 6.2034 2.34256 6.01927 2.20781C5.83514 2.07306 5.60923 1.99999 5.37679 2H3.05262C2.77345 2 2.50571 2.10534 2.3083 2.29286C2.1109 2.48037 2 2.73469 2 2.99987C2 3.26506 2.1109 3.51938 2.3083 3.70689C2.50571 3.89441 2.77345 3.99975 3.05262 3.99975H4.56628L5.19785 6.25447V6.26447V6.27346L7.30308 13.2726L8.08833 16.2582C7.56848 16.4772 7.12052 16.8254 6.79175 17.2661C6.46297 17.7069 6.26559 18.2237 6.22044 18.7622C6.17529 19.3007 6.28404 19.8407 6.53523 20.3253C6.78641 20.81 7.17069 21.2211 7.6475 21.5155C8.12431 21.8099 8.67595 21.9764 9.24417 21.9977C9.81239 22.0189 10.3761 21.894 10.8758 21.6362C11.3755 21.3783 11.7926 20.997 12.0831 20.5327C12.3736 20.0683 12.5266 19.538 12.5262 18.9979C12.5227 18.6565 12.4572 18.3182 12.3325 17.998H14.8251C14.7004 18.3182 14.6349 18.6565 14.6314 18.9979C14.6314 19.5911 14.8166 20.1711 15.1636 20.6644C15.5106 21.1577 16.0038 21.5421 16.5808 21.7692C17.1578 21.9962 17.7928 22.0556 18.4053 21.9399C19.0179 21.8241 19.5806 21.5384 20.0222 21.1189C20.4638 20.6994 20.7646 20.1649 20.8864 19.5831C21.0083 19.0012 20.9457 18.3981 20.7067 17.85C20.4677 17.3019 20.063 16.8334 19.5437 16.5038C19.0243 16.1742 18.4138 15.9982 17.7892 15.9982H10.1894L9.66305 13.9985H18.8419ZM10.4209 18.9979C10.4209 19.1956 10.3592 19.3889 10.2435 19.5534C10.1279 19.7178 9.96348 19.846 9.77114 19.9216C9.57879 19.9973 9.36715 20.0171 9.16296 19.9785C8.95877 19.94 8.77121 19.8447 8.624 19.7049C8.47679 19.5651 8.37654 19.3869 8.33593 19.1929C8.29531 18.999 8.31615 18.7979 8.39583 18.6152C8.4755 18.4325 8.61041 18.2764 8.78351 18.1665C8.95662 18.0566 9.16013 17.998 9.36832 17.998C9.64749 17.998 9.91522 18.1033 10.1126 18.2909C10.31 18.4784 10.4209 18.7327 10.4209 18.9979ZM17.7892 19.9977C17.5811 19.9977 17.3775 19.9391 17.2044 19.8292C17.0313 19.7194 16.8964 19.5632 16.8168 19.3805C16.7371 19.1978 16.7162 18.9968 16.7569 18.8028C16.7975 18.6088 16.8977 18.4307 17.0449 18.2909C17.1921 18.151 17.3797 18.0558 17.5839 18.0172C17.7881 17.9786 17.9997 17.9984 18.1921 18.0741C18.3844 18.1498 18.5488 18.2779 18.6645 18.4424C18.7801 18.6068 18.8419 18.8001 18.8419 18.9979C18.8419 19.2631 18.731 19.5174 18.5336 19.7049C18.3362 19.8924 18.0684 19.9977 17.7892 19.9977Z" />
                        </svg>
                        <h1 class="text-2xl font-bold">{{ $keyword }}</h1>
                    </span>
                    @foreach ($produk as $jenis => $group)
                        <div class="flex flex-col gap-4">
                            <span>
                                <h2 class="text-md font-bold">{{ $keyword }}: {{ $jenis }}</h2>
                                <p class="text-gray-400">({{count($group)}} Produk)</p>
                            </span>
                            <div class="flex gap-4 pb-4 pl-1 overflow-x-auto snap-x">
                                @foreach ($group as $item)
                                    @component('components.admin.produk', [
                                        'kode' => "$item->kode_produk",
                                        'produk' => "$item->produk",
                                        'harga' => $item->harga_jual,
                                        'group' => $group,
                                        'keyword' => "$item->jenis",
                                        'kategori' => "$item->kategori",
                                    ])
                                    @endcomponent
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
</body>

</html>
