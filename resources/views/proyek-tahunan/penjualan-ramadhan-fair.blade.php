<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sektor Simpanan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar />
    <section class="my-10">
        <div class="container mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10">
                <div class="mt-12 md:mt-0">
                    <img src="https://images.unsplash.com/photo-1531973576160-7125cd663d86" alt="About Us Image" class="object-cover rounded-lg shadow-md">
                </div>
                <div class="max-w-lg">
                    <h3 class="text-gray-400 tracking-widest font-medium my-2 text-lg">Projek Tahunan</h3>
                    <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Penjualan Ramadhan Fair</h2>
                    <hr class="h-0.5 w-32 bg-gray-700 my-4">
                    <p class="mt-4 text-gray-500 text-md font-medium">Projek Ramadhan Fair merupakan kegiatan tahunan yang diadakan oleh LAZNAS IWM & DMPS IWM Graha Raya. Kopsyah IWM GR berperan sebagai salah satu penyedia untuk mendukung kegiatan ini dengan menyediakan paket sedekah senilai <span class="text-primary-800">Rp. 100.000</span></p>
                </div>
            </div>
        </div>
    </section>
    <hr class="h-px mx-8 bg-gray-300 border-0 my-10">
    <section>
        <div class="flex flex-wrap my-10">
            <div class="w-full px-10 space-y-5 items-center">
                <h3 class="text-gray-400 text-center tracking-widest font-medium my-2 text-lg">Bahan Pokok</h3>
                <h2 class="text-center text-4xl md:2/5 lg:w-3/4 xl:w-2/4 font-bold tracking-wide mx-auto md:text-4xl lg:text-4xl sm:text-4xl">
                    Paket <span class="text-primary-800">Sedekah </span>
                </h2>
                <hr class="h-1 w-48 mx-auto bg-gray-500 mt-7">
            </div>
            <div class="flex mx-auto lg:mx-auto">
                <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 p-4 md:p-2 xl:p-5 justify-center items-center">
                    <div class="relative p-10 space-y-2 text-center">
                        <h3 class="text-primary-800 text-medium font-bold">2 Liter</h3>
                        <h2 class="text-gray-500 text-lg font-semibold">Minyak Goreng</h2>
                        <img src="Assets/icons/oil.svg" class="p-2">
                        <h3 class="text-primary-800 text-medium font-bold">Rp34.000</h3>
                    </div>
                    <div class="relative p-10 space-y-2 text-center">
                        <h3 class="text-primary-800 text-medium font-bold">5 Liter</h3>
                        <h2 class="text-gray-500 text-lg font-semibold">Beras</h2>
                        <img src="Assets/icons/rice.svg" class="p-2">
                        <h3 class="text-primary-800 text-medium font-bold">Rp54.000</h3>
                    </div>
                    <div class="relative p-10 space-y-2 text-center">
                        <h3 class="text-primary-800 text-medium font-bold">1 Kg</h3>
                        <h2 class="text-gray-500 text-lg font-semibold">Gula Pasir</h2>
                        <img src="Assets/icons/sugar.svg" class="p-2">
                        <h3 class="text-primary-800 text-medium font-bold">Rp34.000</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="h-px mx-8 bg-gray-300 border-0 my-10">
    <section class="my-10">
        <div class="mb-5">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="text-center">
                    <p class="max-w-4xl mx-auto mb-4 text-3xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-4xl lg:text-4xl lg:leading-tight">
                        <span class="text-primary-800">Kegiatan</span> Kami
                    </p>
                    <h1 class="max-w-xl mx-auto px-6 text-md text-gray-600">
                        Lorem ipsum dolar sit amet con setur adivisa, queensland null appointed, kukudos on your own design and design skills in both the new and management
                    </h1>
                </div>
            </div>
        </div>
        <div class="my-10 dark:bg-gray-800 h-full py-6 sm:py-5 lg:py-5 px-5">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
                    <!-- image - start -->
                    <div class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80 border-2 border-gray-300">
                        <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Nama Kegiatan</span>
                    </div>
                    <!-- image - end -->

                    <!-- image - start -->
                    <div class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80 border-2 border-gray-300">
                        <img src="https://images.unsplash.com/photo-1542759564-7ccbb6ac450a?auto=format&q=75&fit=crop&w=1000" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Nama Kegiatan</span>
                    </div>
                    <!-- image - end -->

                    <!-- image - start -->
                    <div class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80 border-2 border-gray-300">
                        <img src="https://images.unsplash.com/photo-1610465299996-30f240ac2b1c?auto=format&q=75&fit=crop&w=1000" loading="lazy" alt="Photo by Martin Sanchez" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Nama Kegiatan</span>
                    </div>
                    <!-- image - end -->

                    <!-- image - start -->
                    <div class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80 border-2 border-gray-300">
                        <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Lorenzo Herrera" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Nama Kegiatan</span>
                    </div>
                    <!-- image - end -->
                </div>
            </div>
        </div>
    </section>
    <div class="items-center justify-center flex">
        <!-- Modal toggle -->
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button" class="flex text-white bg-gradient-to-r justify-center items-center from-[#7AD800] to-[#00A500] hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-primary-300 shadow shadow-primary-900/30 font-normal md:font-medium rounded-lg text-md px-10 lg:px-32 py-2.5 text-center mt-5 me-2 mb-2 tracking-wide"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 mr-2 text-white" fill="currentColor" viewBox="0 0 18 18">
                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
            </svg></span>
            <a href="http://wa.me/6282311976767" target="_blank">
                Pesan Sekarang
            </a>
        </button>
        <!-- Main modal -->
        {{--<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="flex items-center p-4 md:p-5 border-b border-primary-900 rounded-t">
                        <h3 class="text-2xl font-semibold text-gray-700">
                            Pesan Jasa <span class="text-primary-900">Laundry</span>
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-primary-200 hover:text-primary-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <form class="pb-4">
                        <div class="h-80 overflow-y-auto border rounded-lg m-5 md:p-5 border-primary-900 p-4 grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="nama" class="block mb-2 text-sm font-medium text-primary-900">Nama
                                    Lengkap</label>
                                <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-900 focus:border-primary-900 block w-full p-2.5" placeholder="Tulis nama lengkap anda..." required="">
                            </div>
                            <div class="col-span-2">
                                <label for="nomor-telepon" class="block mb-2 text-sm font-medium text-primary-900">Nomor
                                    Telepon</label>
                                <input type="text" name="nomor-telepon" id="nomor-telepon" min="00000000" max="00000000" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-900 focus:border-primary-900 block w-full p-2.5" placeholder="Nomor telepon yang dapat dihubungi" required="">
                            </div>
                            <div class="col-span-2">
                                <label for="address" class="block mb-2 text-sm font-medium text-primary-900">Alamat
                                </label>
                                <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-900 focus:border-primary-900 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-900 dark:focus:border-primary-900" placeholder="Tulis alamat anda..."></textarea>
                            </div>

                            <div class="col-span-2">
                                <label for="date" class="block mb-2 text-sm font-medium text-primary-900">Tanggal
                                </label>
                                <input datepicker datepicker-autohide type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-900 focus:border-primary-900 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-900 dark:focus:border-primary-900" placeholder="Select date">
                            </div>
                        </div>
                        <button type="submit" id="submit-button" class="text-white bg-gradient-to-r from-[#7AD800] to-[#00A500] hover:bg-gradient-to-br mx-auto flex items-center px-28 rounded-lg py-2 justify-center shadow shadow-primary-900/30 font-medium">
                            <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 17 17" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg>
                            Mulai Menyimpan
                        </button>
                    </form>
                </div>
            </div>
        </div>--}}
    </div>
    <hr class="h-px mx-8 bg-gray-300 border-0 my-10">
    <footer>
        <x-footer />
    </footer>
</body>

</html>