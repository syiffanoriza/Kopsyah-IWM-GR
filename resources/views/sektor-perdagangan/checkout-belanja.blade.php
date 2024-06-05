<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Checkout Page</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <x-navbar />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
        <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
            <form action="#" class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                <div class="mx-auto max-w-3xl">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Detail Pesanan</h2>

                    <div class="mt-6 space-y-4 border-b border-t border-gray-200 py-8 dark:border-gray-700 sm:mt-8">
                        <h4 class="text-lg font-semibold inline-flex text-gray-900 dark:text-white"><span><svg
                                    class="w-7 h-7 me-2 -ms-1" width="30" height="30" viewBox="0 0 50 50"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24.9993 5.20801C15.2348 5.20801 7.29102 13.1518 7.29102 22.9163C7.29102 33.2976 16.9348 39.6684 23.316 43.8829L24.4202 44.6164C24.5952 44.733 24.7973 44.7913 24.9972 44.7913C25.1973 44.7913 25.3994 44.733 25.5744 44.6164L26.6785 43.8829C33.0598 39.6684 42.7035 33.2976 42.7035 22.9163C42.7077 13.1518 34.7639 5.20801 24.9993 5.20801ZM24.9993 28.1247C22.1223 28.1247 19.791 25.7934 19.791 22.9163C19.791 20.0393 22.1223 17.708 24.9993 17.708C27.8764 17.708 30.2077 20.0393 30.2077 22.9163C30.2077 25.7934 27.8764 28.1247 24.9993 28.1247Z"
                                        fill="#00A500" />
                                </svg></span>Alamat Pengiriman</h4>

                        <dl>
                            <dt class="text-base font-medium text-gray-900 dark:text-white">Bonnie Green</dt>
                            <dt class="text-base font-medium text-gray-900 dark:text-white">(+62) 85891222333</dt>
                            <dd class="mt-1 text-base font-normal text-gray-500 dark:text-gray-400">San Francisco,
                                California, United States, 3454, Scott Street</dd>
                        </dl>

                        <button type="button" data-modal-target="billingInformationModal"
                            data-modal-toggle="billingInformationModal"
                            class="text-base font-medium text-primary-700 hover:underline dark:text-primary-500">Edit</button>
                    </div>

                    <div class="mt-6 sm:mt-8">
                        <div class="relative overflow-x-auto border-b border-gray-200 dark:border-gray-800">
                            <h4 class="text-lg font-semibold inline-flex text-gray-900 dark:text-white"><span><svg
                                        class="w-7 h-7 me-2 -ms-1" width="50" height="50" viewBox="0 0 50 50"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.8333 23.2295C22.3541 23.4586 22.8958 23.6045 23.4375 23.7295V43.5628C23.1042 43.4795 22.7709 43.3545 22.4584 43.2086L9.95839 37.6462C7.70839 36.6462 6.25 34.4169 6.25 31.9378V18.0628C6.25 17.5003 6.3333 16.9378 6.47914 16.417L21.8333 23.2295ZM30.8749 18.5837L13.8959 10.6045L9.95839 12.3545C9.22923 12.667 8.60416 13.1253 8.06249 13.667L23.0832 20.3544C24.2916 20.8961 25.6876 20.8961 26.9168 20.3544L30.8749 18.5837ZM41.9375 13.667C41.3958 13.1253 40.7708 12.667 40.0416 12.3545L27.5416 6.79199C25.9166 6.06283 24.0834 6.06283 22.4584 6.79199L17.6875 8.91697L34.6667 16.8961L41.9375 13.667ZM43.5209 16.417L36.2083 19.667V24.7712C36.2083 25.6253 35.5 26.3337 34.6458 26.3337C33.7917 26.3337 33.0833 25.6253 33.0833 24.7712V21.042L28.1667 23.2295C27.6459 23.4378 27.1042 23.6045 26.5625 23.7295V43.5628C26.8958 43.4795 27.2291 43.3545 27.5416 43.2086L40.0416 37.6462C42.2916 36.6462 43.75 34.4169 43.75 31.9378V18.0628C43.75 17.5003 43.6667 16.9378 43.5209 16.417Z"
                                            fill="#00A500" />
                                    </svg></span>Produk Dipesan</h4>
                            <table class="w-full mt-4 text-left font-medium text-gray-900 md:table-fixed">
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-800">
                                    <tr>
                                        <td class="whitespace-nowrap py-4 md:w-[384px]">
                                            <div class="flex items-center gap-4">
                                                <a href="#"
                                                    class="flex items-center aspect-square w-10 h-10 shrink-0">
                                                    <img class="h-auto w-full max-h-full dark:hidden"
                                                        src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/iphone-light.svg"
                                                        alt="imac image" />
                                                    <img class="hidden h-auto w-full max-h-full dark:block"
                                                        src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/iphone-dark.svg"
                                                        alt="imac image" />
                                                </a>
                                                <a href="#" class="hover:underline">Apple iPhone 14</a>
                                            </div>
                                        </td>

                                        <td class="p-4 text-base font-normal text-gray-900 dark:text-white">x2</td>

                                        <td class="p-4 text-right text-base font-bold text-gray-900 dark:text-white">
                                            Rp20.000</td>
                                    </tr>

                                    <tr>
                                        <td class="whitespace-nowrap py-4 md:w-[384px]">
                                            <div class="flex items-center gap-4">
                                                <a href="#"
                                                    class="flex items-center aspect-square w-10 h-10 shrink-0">
                                                    <img class="h-auto w-full max-h-full dark:hidden"
                                                        src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/ipad-light.svg"
                                                        alt="ipad image" />
                                                    <img class="hidden h-auto w-full max-h-full dark:block"
                                                        src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/ipad-dark.svg"
                                                        alt="ipad image" />
                                                    <a href="#" class="hover:underline">Apple iPad Air</a>
                                            </div>
                                        </td>

                                        <td class="p-4 text-base font-normal text-gray-900 dark:text-white">x1</td>

                                        <td class="p-4 text-right text-base font-bold text-gray-900 dark:text-white">
                                            Rp20.000</td>
                                    </tr>


                                </tbody>
                            </table>
                            <div class="border-tb-primary-900 py-3">
                                <div class="flex flex-col w-full">
                                    <div class="justify-between w-full flex">
                                        <p class="font-medium text-base md:text-lg">Pesan: </p>
                                        <input type="text" name="pesan" id="pesan"
                                            class="w-full text-base md:text-lg text-right text-gray-700 py-1 border-none focus:outline-none focus:ring-0 focus:border-transparent focus:border-b-gray-300"
                                            placeholder="Tinggalkan pesan anda...">
                                    </div>
                                    <div class="justify-between mt-2 w-full flex">
                                        <p class="font-medium text-base md:text-lg">Total Pesanan (<span>2</span>
                                            Produk): </p>
                                        <p class="font-semibold text-base md:text-lg">Rp<span
                                                class="text-lg md:text-xl">40.000</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 space-y-6">
                            <h4 class="text-xl inline-flex font-semibold text-gray-900 dark:text-white"><span><svg
                                        class="w-7 h-7 me-2 -ms-1" width="50" height="50" viewBox="0 0 50 50"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M36.8144 7.29199H35.821V4.16699C35.821 3.30449 35.121 2.60449 34.2585 2.60449C33.396 2.60449 32.696 3.30449 32.696 4.16699V7.29199H26.5625V4.16699C26.5625 3.30449 25.8625 2.60449 25 2.60449C24.1375 2.60449 23.4375 3.30449 23.4375 4.16699V7.29199H17.304V4.16699C17.304 3.30449 16.604 2.60449 15.7415 2.60449C14.879 2.60449 14.179 3.30449 14.179 4.16699V7.29199H13.1856C8.56271 7.29199 6.25 9.60239 6.25 14.2211V38.9045C6.25 43.5233 8.56063 45.8337 13.1856 45.8337H36.8169C41.4398 45.8337 43.752 43.5233 43.752 38.9045V14.2211C43.75 9.60239 41.4394 7.29199 36.8144 7.29199ZM27.0833 32.8128H16.6667C15.8042 32.8128 15.1042 32.1128 15.1042 31.2503C15.1042 30.3878 15.8042 29.6878 16.6667 29.6878H27.0833C27.9458 29.6878 28.6458 30.3878 28.6458 31.2503C28.6458 32.1128 27.9458 32.8128 27.0833 32.8128ZM33.3333 24.4795H16.6667C15.8042 24.4795 15.1042 23.7795 15.1042 22.917C15.1042 22.0545 15.8042 21.3545 16.6667 21.3545H33.3333C34.1958 21.3545 34.8958 22.0545 34.8958 22.917C34.8958 23.7795 34.1958 24.4795 33.3333 24.4795Z"
                                            fill="#00A500" />
                                    </svg></span>Rincian Pembayaran</h4>
                            <div class="space-y-4">
                                <div class="space-y-2">
                                    <dl class="flex items-center justify-between gap-4">
                                        <dt class="text-gray-500 dark:text-gray-400">Subtotal Produk</dt>
                                        <dd class="text-base font-medium text-gray-900 dark:text-white">Rp40.000</dd>
                                    </dl>
                                    <dl class="flex items-center justify-between gap-4">
                                        <dt class="text-gray-500 dark:text-gray-400">Subtotal Pengiriman</dt>
                                        <dd class="text-base font-medium text-green-500">Rp10.000</dd>
                                    </dl>

                                    <dl class="flex items-center justify-between gap-4">
                                        <dt class="text-gray-500 dark:text-gray-400">Total Diskon Pengiriman</dt>
                                        <dd class="text-base font-medium text-gray-900 dark:text-white">-Rp0</dd>
                                    </dl>
                                </div>

                                <dl
                                    class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                                    <dt class="text-lg font-bold text-gray-900 dark:text-white">Total Pembayaran</dt>
                                    <dd class="text-lg font-bold text-gray-900 dark:text-white">Rp50.000</dd>
                                </dl>
                            </div>

                            <div class="gap-4 sm:flex sm:items-center">
                                <a href="cart-belanja"
                                    class="w-full rounded-lg text-center border border-gray-200 bg-white px-5  py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Kembali
                                    Belanja</a>

                                <button type="button" data-modal-target="large-modal"
                                    data-modal-toggle="large-modal"
                                    class="mt-4 flex w-full items-center justify-center rounded-lg bg-primary-700  px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300  dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 sm:mt-0">Buat
                                    Pesanan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div id="large-modal" tabindex="-1"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900">
                                Bayar Sekarang
                            </h3>
                            <button type="button"
                                class="text-primary-500 bg-transparent hover:bg-primary-200 hover:text-primary-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="large-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <div class="mb-4">
                                <ul class="flex flex-wrap -mb-px text-sm font-medium justify-center text-center"
                                    id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content"
                                    data-tabs-active-classes="text-white bg-primary-900"
                                    data-tabs-inactive-classes="text-gray-500 hover:text-gray-600 border-gray-100 hover:border-gray-300"
                                    role="tablist">
                                    <li role="presentation">
                                        <button
                                            class="shadow-lg inline-block px-4 py-2.5 bg-primary-100 text-white rounded-s-full"
                                            id="qris-styled-tab" data-tabs-target="#styled-qris" type="button"
                                            role="tab" aria-controls="qris" aria-selected="false">QRIS</button>
                                    </li>
                                    <li role="presentation">
                                        <button
                                            class="shadow-lg inline-block px-4 py-2.5 bg-primary-100 text-white rounded-e-full"
                                            id="card-styled-tab" data-tabs-target="#styled-card" type="button"
                                            role="tab" aria-controls="card" aria-selected="false">Transfer</button>
                                    </li>
                                </ul>
                            </div>
                            <div id="default-styled-tab-content">
                                <div class="hidden flex flex-col justify-center items-center rounded-lg bg-gray-50"
                                    id="styled-qris" role="tabpanel" aria-labelledby="qris-tab">
                                    <div class="m-5 w-72 border border-primary-900 p-2 rounded-lg justify-center flex">
                                        <img src="https://media.karousell.com/media/photos/products/2022/1/5/ez_collections_supported_payme_1641345701_60ab42a1_progressive.jpg"
                                            alt="" class="w-full justify-center">
                                    </div>
                                </div>
                                <div class="hidden p-4 rounded-lg bg-gray-50" id="styled-card"
                                    role="tabpanel" aria-labelledby="card-tab">
                                    <div class="border p-5 justify-between flex border-primary-900 rounded-lg">
                                        <p class="text-gray-700 font-medium inline-flex"><svg class="w-10 mr-2"
                                                viewBox="0 0 234 143" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M39.8673 123.512C42.9588 123.512 45.4736 123.116 47.4116 122.323C49.3957 121.53 50.9415 120.503 52.0489 119.244C53.1564 117.984 53.9177 116.562 54.333 114.975C54.7483 113.389 54.9559 111.78 54.9559 110.147C54.9559 108.281 54.7021 106.602 54.1946 105.109C53.7331 103.617 52.9026 102.357 51.7029 101.331C50.5493 100.304 49.0035 99.5114 47.0655 98.9517C45.1275 98.3919 42.682 98.112 39.7288 98.112H23.3943V123.512H39.8673ZM23.3943 57.1079V82.2981H35.576C38.16 82.2981 40.4902 82.1115 42.5666 81.7383C44.643 81.3651 46.3964 80.712 47.8269 79.7791C49.3034 78.8462 50.4109 77.5633 51.1491 75.9305C51.9336 74.2979 52.3258 72.2453 52.3258 69.773C52.3258 67.3473 52.0259 65.3413 51.426 63.7553C50.8262 62.1226 49.9033 60.8165 48.6574 59.8368C47.4116 58.8572 45.8197 58.1575 43.8817 57.7377C41.9898 57.3178 39.7288 57.1079 37.0987 57.1079H23.3943ZM37.0987 39.4048C44.0662 39.4048 49.9956 40.0578 54.8867 41.364C59.7778 42.6701 63.7692 44.5128 66.8607 46.8919C69.9523 49.271 72.1902 52.1631 73.5745 55.5685C75.0049 58.9738 75.7201 62.7757 75.7201 66.9741C75.7201 69.2598 75.3971 71.4756 74.7511 73.6215C74.1051 75.7206 73.09 77.7032 71.7057 79.5692C70.3214 81.3885 68.5449 83.0678 66.3762 84.6072C64.2075 86.1466 61.6005 87.4761 58.5551 88.5957C65.1996 90.2284 70.1138 92.864 73.2976 96.5026C76.4815 100.141 78.0734 104.853 78.0734 110.637C78.0734 114.975 77.2428 119.011 75.5817 122.742C73.9206 126.474 71.475 129.74 68.245 132.539C65.0612 135.291 61.116 137.46 56.4094 139.046C51.7029 140.586 46.3272 141.355 40.2825 141.355H0V39.4048H37.0987Z"
                                                    fill="#00A39D" />
                                                <path
                                                    d="M149.937 60.1988C149.245 61.317 148.506 62.1557 147.722 62.7149C146.984 63.274 146.015 63.5536 144.815 63.5536C143.754 63.5536 142.6 63.2274 141.354 62.575C140.155 61.8761 138.77 61.1073 137.202 60.2686C135.679 59.4299 133.925 58.6844 131.941 58.0321C129.957 57.3331 127.696 56.9837 125.158 56.9837C120.775 56.9837 117.499 57.9388 115.33 59.8492C113.207 61.713 112.146 64.2525 112.146 67.4676C112.146 69.5178 112.792 71.2185 114.084 72.5697C115.376 73.921 117.06 75.0859 119.137 76.0644C121.259 77.0429 123.659 77.9515 126.335 78.7903C129.057 79.5824 131.826 80.491 134.641 81.5161C137.455 82.4946 140.201 83.6595 142.877 85.0107C145.599 86.362 147.999 88.0861 150.075 90.1828C152.198 92.2796 153.905 94.8423 155.197 97.871C156.489 100.853 157.135 104.464 157.135 108.704C157.135 113.411 156.328 117.814 154.713 121.914C153.098 126.015 150.744 129.602 147.653 132.678C144.607 135.706 140.824 138.106 136.302 139.877C131.826 141.601 126.727 142.463 121.005 142.463C117.868 142.463 114.661 142.137 111.385 141.484C108.155 140.832 105.017 139.923 101.972 138.758C98.9262 137.547 96.0653 136.126 93.3891 134.495C90.7128 132.864 88.3826 131.047 86.3984 129.043L93.3198 118C93.8736 117.208 94.5888 116.556 95.4655 116.043C96.3883 115.484 97.3804 115.204 98.4417 115.204C99.826 115.204 101.21 115.647 102.595 116.533C104.025 117.418 105.617 118.396 107.37 119.468C109.17 120.54 111.223 121.518 113.53 122.403C115.837 123.289 118.56 123.731 121.698 123.731C125.943 123.731 129.242 122.8 131.595 120.936C133.948 119.025 135.125 116.02 135.125 111.92C135.125 109.543 134.479 107.609 133.187 106.118C131.895 104.627 130.188 103.393 128.065 102.414C125.989 101.436 123.613 100.574 120.936 99.828C118.26 99.0825 115.514 98.267 112.7 97.3817C109.885 96.4498 107.14 95.3316 104.463 94.0269C101.787 92.6757 99.3876 90.9283 97.265 88.785C95.1886 86.595 93.5044 83.8924 92.2124 80.6773C90.9204 77.4157 90.2744 73.4085 90.2744 68.6558C90.2744 64.835 91.0358 61.1073 92.5585 57.4728C94.0812 53.8384 96.3191 50.6001 99.2722 47.7578C102.225 44.9154 105.848 42.6555 110.139 40.9781C114.43 39.2541 119.344 38.3921 124.881 38.3921C127.973 38.3921 130.972 38.6484 133.879 39.1609C136.832 39.6268 139.624 40.3491 142.254 41.3277C144.884 42.2595 147.33 43.4011 149.591 44.7524C151.898 46.057 153.951 47.5481 155.751 49.2255L149.937 60.1988Z"
                                                    fill="#00A39D" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M233.55 35.188C215.587 33.4383 209.271 43.329 205.748 48.2211C201.254 28.6632 193.654 30.2053 185.523 25.2785C197.275 18.4578 200.561 7.85371 200.238 0C211.748 8.43912 219.774 7.53357 229.713 4.79707C224.768 19.5557 227.89 23.7214 233.55 35.188Z"
                                                    fill="#F8AD3C" />
                                                <path
                                                    d="M195.984 141.398H171.656V37.1396C186.88 39.2022 196.008 51.7933 195.984 65.12V141.398Z"
                                                    fill="#00A39D" />
                                            </svg>
                                            </span> 177 2017 099
                                        </p>
                                        <p class="text-gray-700 font-medium ">An. Koperasi Syariah IWM GR</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Modal footer -->
                        {{-- Konfirmasi Pembayaran to Whatsapp --}}
                        <div
                            class="flex items-center px-5 py-3 md:px-8 md:py-3 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button type="button"
                                class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg w-full text-sm px-5 py-2.5 text-center">Konfirmasi Pembayaran</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Modal Ubah Alamat --}}
        <div id="billingInformationModal" tabindex="-1" aria-hidden="true"
            class="antialiased fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-auto w-full max-h-full items-center justify-center overflow-y-auto overflow-x-hidden antialiased md:inset-0">
            <div class="relative max-h-auto w-full max-h-full max-w-lg p-4">
                <!-- Modal content -->
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-800">
                    <!-- Modal header -->
                    <div
                        class="flex items-center justify-between rounded-t border-b border-gray-200 p-4 dark:border-gray-700 md:p-5">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Ubah Alamat</h3>
                        <button type="button"
                            class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="billingInformationModal">
                            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form class="p-4 md:p-5">
                        <div class="grid grid-cols-1 gap-4 mb-5">
                            <div class="sm:col-span-2">
                                <div>
                                    <label for="first_name_billing_modal"
                                        class="mb-2 block text-sm font-medium text-gray-900"> Nama Lengkap
                                    </label>
                                    <input type="text" id="first_name_billing_modal"
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                        placeholder="Enter your first name" required />
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="phone-input_billing_modal"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Phone Number*
                                </label>

                                <div class="relative w-full">
                                    <input type="number" id="phone-input"
                                        class="z-20 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:border-s-gray-700  dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500"
                                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" required />
                                </div>

                            </div>
                            <div class="sm:col-span-2">
                                <label for="address_billing_modal"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Alamat
                                    Pengiriman* </label>
                                <textarea id="address_billing_modal" rows="4"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                    placeholder="Enter here your address"></textarea>
                            </div>
                        </div>
                        <div class="border-t border-gray-200 pt-4 dark:border-gray-700 md:pt-5">
                            <button type="submit"
                                class="me-2 inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Save
                                information</button>
                            <button type="button" data-modal-toggle="billingInformationModal"
                                class="me-2 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>

</body>

</html>
