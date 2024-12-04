<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tentang Kami</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar />
    <section id="jumbotron" class="pt-2 pb-12">
        <x-banner image="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png">
            @slot('title')
                Tentang Kami
            @endslot
            @slot('body')
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi facilis odit dolor corrupti similique ad
                cupiditate fugit aliquam deleniti fuga.
            @endslot
        </x-banner>
    </section>

    <hr class="h-px mx-12 bg-gray-700 border-0">

    <section id="tentang" class="pt-20 pb-32">
        <div class="flex flex-wrap mb-32">
            <div class="w-full px-4 space-y-5 items-center">
                <h4 class="text-center md:text-lg text-gray-700 font-medium tracking-widest">Tentang Kami</h4>
                <h2
                    class="text-center text-4xl md:2/5 lg:w-3/4 xl:w-2/4 font-bold tracking-wide mx-auto md:text-5xl lg:text-6xl">
                    Bersama <span class="text-primary-800">Membangun </span>
                    <span class="text-primary-700">Ekonomi</span> Umat
                </h2>
                <hr class="h-1 w-48 mx-auto bg-gray-700 mt-7">
            </div>
        </div>
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <img class="h-auto transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0 max-w-md mx-auto"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png"
                        alt="image description">
                </div>
                <div class="w-full self-center px-4 lg:w-1/2">
                    <div class="mt-10 space-y-5 relative lg:mt-9 lg:right-0">
                        <h2 class="font-bold text-4xl md:text-4xl lg:text-5xl">Apa Itu <span
                                class="text-primary-800">Koperasi?</span>
                        </h2>
                        <p class="max-w-lg text-lg text-gray-500 mb-10">Koperasi adalah sebuah organisasi ekonomi yang
                            dimiliki dan di operasikan oleh orang-seorang demi kepentingan bersama serta berlandaskan
                            kegiatan
                            berdasarkan prinsip gerakan ekonomi rakyat yang berdasarkan asas kekeluargaan.
                        </p>

                    </div>
                </div>
            </div>
        </div>

        <div class="container my-20">
            <div class="flex flex-wrap md:space-x-reverse md:flex-row-reverse">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <img class="h-auto transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0 max-w-md mx-auto"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png"
                        alt="image description">
                </div>
                <div class="w-full self-center px-4 lg:w-1/2">
                    <div class="mt-10 space-y-5 relative lg:mt-9">
                        <h2 class="font-bold text-4xl md:text-4xl lg:text-5xl">Tentang <span
                                class="text-primary-800">Koperasi</span>
                        </h2>
                        <p class="max-w-lg text-lg text-gray-500 mb-10">Koperasi syariah yang lahir pada tahun 2017 dan
                            berkedudukan Tangerang Selatan merupakan sebagai persatuan ikatan warga muslim yang berada
                            di Graha Raya sebagai upaya dalam meningkatkan perekonomian ummat khusus nya untuk Anggota
                            dan masyarakat sekitar pada umumnya.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <img class="h-auto transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0 max-w-md mx-auto"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png"
                        alt="image description">
                </div>
                <div class="w-full self-center px-4 lg:w-1/2">
                    <div class="mt-10 space-y-5 relative lg:mt-9 lg:right-0">
                        <h2 class="font-bold text-4xl md:text-4xl lg:text-5xl">Kegiatan Usaha <span
                                class="text-primary-800 lg:block">Koperasi</span>
                        </h2>
                        <p class="max-w-lg text-lg text-gray-500 mb-10">Koperasi Syariah IWM GR, melalui kegiatan
                            usahanya yang mencakup sektor riil, pembiayaan, dan jasa, menjalankan operasional sesuai
                            prinsip koperasi dan prinsip syariah untuk mencapai keberlanjutan usaha.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="h-px mx-12 bg-gray-700 border-0">

    <section id="visi-misi" class="pb-20">
        <div class="flex flex-wrap my-20">
            <div class="w-full px-4 space-y-5 items-center">
                <h4 class="text-center md:text-lg text-gray-700 font-medium tracking-widest">Visi Misi</h4>
                <h2 class="text-center text-4xl font-bold tracking-wide md:text-5xl lg:text-6xl">Kopsyah IWM
                </h2>
                <p class="text-lg lg:w-2/3 mx-auto text-center font-normal text-gray-600 lg:text-xl sm:px-16 xl:px-48">
                    Landasan koperasi yaitu berlandaskan Syariah Islam, Pancasila
                    dan UUD 45 serta berdasarkan azas kekeluargaan.
                </p>
                <hr class="h-1 w-48 mx-auto bg-gray-700 mt-7">
            </div>
        </div>
        <div class="container">
            <div class="flex flex-wrap space-y-8 lg:space-y-0 mx-auto place-content-center">
                <div class="w-full self-center px-4 lg:w-1/3">
                    <div
                        class="block text-center p-6 shadow-lg bg-white border border-gray-700 rounded-lg ">
                        <h5 class="mb-2 p-3 text-2xl font-medium tracking-widest text-primary-800">Visi <span
                                class="text-gray-800">Kami</span></h5>
                        <hr class="h-0.5 w-20 mx-auto bg-gray-700">
                        <p class="font-normal pt-6 pb-12 px-6 text-gray-700">Visi Kopsyah IWM GR menjadi koperasi
                            syariah yang kuat, besar dan menjadi pemain ekonomi islam melalui himpunan kekuatan anggota
                            dan strategi bisnis yang tepat. </p>
                    </div>
                </div>
                <div class="w-full self-center px-4 lg:w-1/3">
                    <div
                        class="block p-6 bg-white border border-gray-700 rounded-lg shadow-lg">
                        <h5 class="mb-2 p-3  text-2xl text-center font-medium tracking-widest text-primary-800">Misi
                            <span class="text-gray-800">Kami</span>
                        </h5>
                        <hr class="h-0.5 w-20 mx-auto bg-gray-700">
                        <ul class="list-disc p-6 text-justify font-normal">
                            <li>Mengangkat dan membesarkan pelaku bisnis yang ada di Graha Raya (khususnya produk-produk
                                muslim anggota)</li>
                            <li>Memasyarakatkan ekonomi islam</li>
                            <li>Melaksanakan kegiatan sosial</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="h-px mx-12 bg-gray-700 border-0 my-5">

    <section id="fasilitas" class="pb-20">
        <div class="flex flex-wrap my-20">
            <div class="w-full space-y-5 items-center">
                <h4 class="text-center md:text-lg text-gray-700 font-medium tracking-widest">Akomodasi</h4>
                <h2 class="text-center text-primary-800 text-4xl font-bold tracking-wide md:text-5xl lg:text-6xl">
                    Fasilistas <span class="text-gray-800">Anggota</span>
                </h2>
                <p class="text-lg lg:w-2/3 mx-auto text-center font-normal text-gray-600 lg:text-xl sm:px-16 xl:px-48">
                    Dalam operasionalnya, Kopsyah IWM GR memiliki beberapa produk yang dapat memenuhi kebutuhan
                    anggotanya.
                </p>
                <hr class="h-1 w-48 mx-auto bg-gray-700 mt-7">
            </div>
        </div>
        <div class="container">
            <div class="flex-wrap flex px-4 lg:space-x-5 justify-center">
                <div
                    class="lg:w-1/5 w-full p-5 my-3 rounded-md items-center justify-center bg-white shadow-lg border border-gray-700">
                    <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Kopsyah Mart</h2>
                    <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Sembako
                        </li>
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Frozen Food
                        </li>
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Deterjen Cair dan Bubuk
                        </li>
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Cairan Pembersih Lantai
                        </li>
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Perlengkapan Mandi
                        </li>
                    </ul>
                </div>
                <div
                    class="lg:w-1/5 w-full my-3 p-5 rounded-md items-center justify-center bg-white shadow-lg border border-gray-700">
                    <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Layanan</h2>
                    <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Laundry
                        </li>
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg> Service AC
                        </li>
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Service Elektronik
                        </li>
                    </ul>
                </div>
                <div
                    class="lg:w-1/5 w-full p-5 my-3 rounded-md items-center justify-center bg-white shadow-lg border border-gray-700">
                    <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Pembiayaan Syariah</h2>
                    <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Modal Usaha
                        </li>
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg> Elektronik
                        </li>
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Perabotan
                        </li>
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Kendaraan Bermotor
                        </li>
                    </ul>
                </div>
                <div
                    class="lg:w-1/5 w-full my-3 p-5 rounded-md items-center justify-center bg-white shadow-lg border border-gray-700">
                    <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Kopsyah Qurban</h2>
                    <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Sapi
                        </li>
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg> Kambing Jawa
                        </li>
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Domba
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <hr class="h-px mx-12 bg-gray-700 border-0 my-5">

    <footer>
        <x-footer/>
    </footer>
</body>

</html>
