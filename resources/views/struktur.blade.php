<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manajemen IWM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar />
    <section id="jumbotron" class="pt-2 pb-12">
        <x-banner image="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png">
            @slot('title')
                Struktur Manajemen
            @endslot
            @slot('body')
                Koperasi Syariah Ikatan Warga Muslim Graha Raya
            @endslot
        </x-banner>
    </section>

    <hr class="h-px mx-12 bg-gray-700 border-0">

    <section id="struktur" class="py-20">
        <div class="flex flex-wrap mb-20 md:mb-32">
            <div class="w-full px-4 space-y-5 items-center">
                <h4 class="text-center md:text-lg text-gray-700 font-medium tracking-widest">Struktur</h4>
                <h2 class="text-center text-4xl md:2/5 lg:w-3/4 xl:w-2/4 font-bold tracking-wide mx-auto md:text-5xl lg:text-6xl">
                    Manajemen <span class="text-primary-800">Koperasi Syariah</span> IWM GR
                </h2>
                <hr class="h-1 w-48 mx-auto bg-gray-700 mt-7">
            </div>
        </div>

        <div class="container">
            <div class="w-full">
                <div class="grid md:p-10 grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="w-full h-auto max-w-full bg-white border border-gray-700 rounded-lg shadow-md">
                        <div class="flex flex-col items-center px-2 py-3 md:px-4 md:pt-7 md:pb-6">
                            <img class="w-80 h-80 max-h-80 object-cover mb-3 border border-gray-700 rounded-lg shadow-sm"
                                src="{{asset('assets/images/pengurus-didi.jpg')}}" alt="" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">H. Didi Kurniadinata, MA.</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Ketua Ikatan Warga Muslim</span>
                        </div>
                    </div>
                    <div class="w-full h-auto max-w-full bg-white border border-gray-700 rounded-lg shadow-md">
                        <div class="flex flex-col items-center px-2 py-3 md:px-4 md:pt-7 md:pb-6">
                            <img class="w-80 max-h-80 object-cover mb-3 border border-gray-700 rounded-lg shadow-sm"
                                src="{{asset('assets/images/pengurus-alam.jpg')}}" alt="" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900">H. Asep Alamsyah, M.H.I</h5>
                            <span class="text-sm text-center text-gray-500">Ketua Koperasi IWM</span>
                        </div>
                    </div>
                    <div class="w-full h-auto max-w-full bg-white border border-gray-700 rounded-lg shadow-md">
                        <div class="flex flex-col items-center px-2 py-3 md:px-4 md:pt-7 md:pb-6">
                            <img class="w-80 h-80 max-h-80 object-cover mb-3 border border-gray-700 rounded-lg shadow-sm"
                                src="{{asset('assets/images/pengurus-mus.jpg')}}" alt="" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Ir. Mustika Panca N.</h5>
                            <span class="text-sm text-center text-gray-500 dark:text-gray-400">Wakil Ketua Koperasi IWM</span>
                        </div>
                    </div>
                    <div class="w-full h-auto max-w-full bg-white border border-gray-700 rounded-lg shadow-md">
                        <div class="flex flex-col items-center px-2 py-3 md:px-4 md:pt-7 md:pb-6">
                            <img class="w-80 h-80 max-h-80 object-cover mb-3 border border-gray-700 rounded-lg shadow-sm"
                                src="{{asset('assets/images/pengurus-jajat.jpg')}}" alt="" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Ir. Jajat Sudrajat</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Sekretaris Koperasi IWM</span>
                        </div>
                    </div>
                    <div class="w-full h-auto max-w-full bg-white border border-gray-700 rounded-lg shadow-md">
                        <div class="flex flex-col items-center px-2 py-3 md:px-4 md:pt-7 md:pb-6">
                            <img class="w-80 h-80 max-h-80 object-cover mb-3 border border-gray-700 rounded-lg shadow-sm"
                                src="{{asset('assets/images/pengurus-dani.jpg')}}" alt="" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Dani Iskandar AK., CA</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Pengawas Koperasi IWM</span>
                        </div>
                    </div>
                    <div class="w-full h-auto max-w-full bg-white border border-gray-700 rounded-lg shadow-md">
                        <div class="flex flex-col items-center px-2 py-3 md:px-4 md:pt-7 md:pb-6">
                            <img class="w-80 h-80 max-h-80 object-cover mb-3 border border-gray-700 rounded-lg shadow-sm"
                                src="{{asset('assets/images/pengurus-kastomo.jpg')}}" alt="" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Muhammad Kastomo</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Pengawas Ikatan Warga Muslim</span>
                        </div>
                    </div>
                    <div class="w-full h-auto max-w-full bg-white border border-gray-700 rounded-lg shadow-md">
                        <div class="flex flex-col items-center px-2 py-3 md:px-4 md:pt-7 md:pb-6">
                            <img class="w-80 h-80 max-h-80 object-cover mb-3 border border-gray-700 rounded-lg shadow-sm"
                                src="{{asset('assets/images/pengurus-anie.jpg')}}" alt="" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Hj. Anie Sufiani</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Pembina Ikatan Warga Muslim</span>
                        </div>
                    </div>
                    <div class="w-full h-auto max-w-full bg-white border border-gray-700 rounded-lg shadow-md">
                        <div class="flex flex-col items-center px-2 py-3 md:px-4 md:pt-7 md:pb-6">
                            <img class="w-80 h-80 max-h-80 object-cover mb-3 border border-gray-700 rounded-lg shadow-sm"
                                src="{{asset('assets/images/pengurus-farida.jpg')}}" alt="" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Farida, S.Pd</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Hubungan Masyarakat IWM</span>
                        </div>
                    </div>
                    <div class="w-full h-auto max-w-full bg-white border border-gray-700 rounded-lg shadow-md">
                        <div class="flex flex-col items-center px-2 py-3 md:px-4 md:pt-7 md:pb-6">
                            <img class="w-80 h-80 max-h-80 object-cover mb-3 border border-gray-700 rounded-lg shadow-sm"
                                src="{{asset('assets/images/pengurus-ikhsan.jpg')}}" alt="" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Yanti Ikhsan</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Ketua Dep. Muslimah & Pengembangan Sosial</span>
                        </div>
                    </div>
                    <div class="w-full h-auto max-w-full bg-white border border-gray-700 rounded-lg shadow-md">
                        <div class="flex flex-col items-center px-2 py-3 md:px-4 md:pt-7 md:pb-6">
                            <img class="w-80 h-80 max-h-80 object-cover mb-3 border border-gray-700 rounded-lg shadow-sm"
                                src="{{asset('assets/images/pengurus-busman.jpg')}}" alt="" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Ir. Muhammad Busman</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Divisi Perdagangan</span>
                        </div>
                    </div>
                    <div class="w-full h-auto max-w-full bg-white border border-gray-700 rounded-lg shadow-md">
                        <div class="flex flex-col items-center px-2 py-3 md:px-4 md:pt-7 md:pb-6">
                            <img class="w-80 h-80 max-h-80 object-cover mb-3 border border-gray-700 rounded-lg shadow-sm"
                                src="{{asset('assets/images/pengurus-jejen.jpg')}}" alt="" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Jejen</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Kepala Toko Ikatan Warga Muslim</span>
                        </div>
                    </div>
                    <div class="w-full h-auto max-w-full bg-white border border-gray-700 rounded-lg shadow-md">
                        <div class="flex flex-col items-center px-2 py-3 md:px-4 md:pt-7 md:pb-6">
                            <img class="w-80 h-80 max-h-80 object-cover mb-3 border border-gray-700 rounded-lg shadow-sm"
                                src="{{asset('assets/images/pengurus-siti.jpg')}}" alt="" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Siti Kusmiati</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Pembiayaan Ikatan Warga Muslim</span>
                        </div>
                    </div>
                    <div class="w-full h-auto max-w-full bg-white border border-gray-700 rounded-lg shadow-md">
                        <div class="flex flex-col items-center px-2 py-3 md:px-4 md:pt-7 md:pb-6">
                            <img class="w-80 h-80 max-h-80 object-cover mb-3 border border-gray-700 rounded-lg shadow-sm"
                                src="{{asset('assets/images/pengurus-yanti.jpg')}}" alt="" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Yanti</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Kasir Ikatan Warga Muslim</span>
                        </div>
                    </div>
                    <div class="w-full h-auto max-w-full bg-white border border-gray-700 rounded-lg shadow-md">
                        <div class="flex flex-col items-center px-2 py-3 md:px-4 md:pt-7 md:pb-6">
                            <img class="w-80 h-80 max-h-80 object-cover mb-3 border border-gray-700 rounded-lg shadow-sm"
                                src="{{asset('assets/images/pengurus-deri.jpg')}}" alt="" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Deri</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Driver Ikatan Warga Muslim</span>
                        </div>
                    </div>
                    <div class="w-full h-auto max-w-full bg-white border border-gray-700 rounded-lg shadow-md">
                        <div class="flex flex-col items-center px-2 py-3 md:px-4 md:pt-7 md:pb-6">
                            <img class="w-80 h-80 max-h-80 object-cover mb-3 border border-gray-700 rounded-lg shadow-sm"
                                src="{{asset('assets/images/pengurus-hikmah.jpg')}}" alt="" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Hikmah</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Driver Ikatan Warga Muslim</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="h-px mx-12 bg-gray-700 border-0">

    <footer>
        <x-footer/>
    </footer>


</body>

</html>
