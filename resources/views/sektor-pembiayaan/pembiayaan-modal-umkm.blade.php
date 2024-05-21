<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembiayaan Konsumtif</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <x-navbar />
    <section class="my-10">
        <div class="flex flex-wrap my-10">
            <div class="w-full p-10 space-y-2 lg:space-y-5 items-center">
                <h4 class="text-center lg:text-lg text-sm text-gray-500 font-medium tracking-widest">Sektor Pembiayaan</h4>
                <h2 class="text-center text-4xl md:2/5 lg:w-2/4 xl:w-2/4 font-bold tracking-wide mx-auto md:text-5xl lg:text-5xl">
                    Pembiayaan <span class="text-primary-800">Modal Usaha</span> Mikro
                </h2>
                <hr class="h-0.5 w-36 lg:w-48 mx-auto bg-gray-700 mt-7">
            </div>
        </div>
        <div class="container">
            <div class="w-full px-4">
                <div id="accordion-flush" class="space-y-5" data-accordion="collapse" data-active-classes="bg-white text-primary-900 border-primary-900" data-inactive-classes="text-gray-500 dark:text-gray-400">
                    <h2 id="accordion-flush-heading-1">
                        <button type="button" class="flex flex-wrap items-center w-full font-medium lg:text-lg rtl:text-right text-gray-600 p-5 rounded-lg border shadow-lg hover:shadow-primary-800/20 border-gray-700 hover:text-primary-800 hover:border-primary-800 gap-3" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                            <div class="flex items-center justify-between w-full">
                                <span>Tujuan</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </div>
                            <div id="accordion-flush-body-1" class="hidden pt-2" aria-labelledby="accordion-flush-heading-1">
                                <div class="text-start text-gray-600">
                                    <p class="text-gray-700 flex items-center">Dalam rangka meningkatkan pelayanan kepada anggota, maka Kopsyah IWM GR perlu mempertimbangkan produk pembiayaan produktif sebagai upaya meningkatkan perekonomian sektor UMKM dengan cara memberikan fasilitas pembiayaan modal usaha.</p>
                                </div>
                            </div>
                        </button>
                    </h2>
                    <h2 id="accordion-flush-heading-2">
                        <button type="button" class="flex flex-wrap items-center w-full font-medium lg:text-lg rtl:text-right text-gray-600 p-5 rounded-lg border shadow-lg hover:shadow-primary-800/20 border-gray-700 hover:text-primary-800 hover:border-primary-800 gap-3" data-accordion-target="#accordion-flush-body-2" aria-expanded="true" aria-controls="accordion-flush-body-2">
                            <div class="flex items-center justify-between w-full text-start">
                                <span>Ketentuan Pembiayaan Produktif </span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </div>
                            <div id="accordion-flush-body-2" class="hidden pt-2" aria-labelledby="accordion-flush-heading-2">
                                <div class="text-start px-5 text-gray-600">
                                    <p class="text-gray-700 flex items-start">
                                    <ul class="list-decimal space-y-2">
                                        <li>Plafon pembiayaan <span class="text-primary-800">minimal</span> Rp. 1.000.000 s/d <span class="text-primary-800">maksimal</span> Rp. 5.000.000</li>
                                        <li>Jangka waktu pengembalian untuk pembiayaan Rp. 1 juta s/d Rp. 3 juta maksimal 6 bulan</li>
                                        <li>Jangka waktu pengembalian untuk pembiayaan > Rp. 3 juta s/d Rp. 5 juta maksimal 12 bulan</li>
                                        <li>Menggunakan akad murabahah</li>
                                        <li>Biaya administrasi 1% dari total pembiayaan</li>
                                        <li>Pembayaran pengembalian pembiayaan dibayarkan setiap bulan atau mingguan sesuai dengan kesepakatan.</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </button>
                    </h2>
                    <h2 id="accordion-flush-heading-3">
                        <button type="button" class="flex flex-wrap items-center w-full font-medium lg:text-lg rtl:text-right text-gray-600 p-5 rounded-lg border shadow-lg hover:shadow-primary-800/20 border-gray-700 hover:text-primary-800 hover:border-primary-800 gap-3" data-accordion-target="#accordion-flush-body-3" aria-expanded="true" aria-controls="accordion-flush-body-3">
                            <div class="flex items-center justify-between w-full text-start">
                                <span>Syarat Mendapatkan Fasilitas Pembiayaan</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </div>
                            <div id="accordion-flush-body-3" class="hidden pt-2" aria-labelledby="accordion-flush-heading-3">
                                <div class="text-start px-5 text-gray-600">
                                    <p class="text-gray-700 flex items-center">
                                    <ul class="list-decimal space-y-2">
                                        <li>Sudah menjadi anggota Kopsyah IWM GR</li>
                                        <li>Memiliki simpanan pokok dan wajib</li>
                                        <li>Memiliki usaha produktif minimal sudah operasional selama 6 bulan</li>
                                        <li>Melengkapi administrasi kelengkapan dokumen seperti (Foto copy KK, KTP, Buku nikah, Formulir ahli waris, Ijin usaha (SKU), Laporan penghasilan dan keterangan domisili tempat tinggal)</li>
                                        <li>Taat dan mengikuti peraturan Kopsyah IWM GR</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </button>
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <div class="items-center justify-center flex mb-10">
        <!-- Modal toggle -->
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button" class="flex text-white bg-gradient-to-r justify-center items-center from-[#7AD800] to-[#00A500] hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-primary-300 shadow shadow-primary-900/30 font-normal md:font-medium rounded-lg text-md px-10 lg:px-32 py-2.5 text-center mt-5 me-2 mb-2 tracking-wide"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 mr-2 text-white" fill="currentColor" viewBox="0 0 18 18">
                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
            </svg></span>
            Pesan Sekarang
        </button>
        <!-- Main modal -->
        <!-- <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
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
        </div> -->
    </div>
    <footer>
        <x-footer />
    </footer>
</body>

</html>