<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Koperasi Syariah Ikatan Warga Muslim Graha Raya</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    <x-navbar />
    <x-banner image="https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg">
        <x-slot name="title">
            Selamat Datang
        </x-slot>
        <x-slot name="body">
            Di Website Koperasi Syariah Ikatan Warga Muslim Graha Raya
        </x-slot>
    </x-banner>
    <x-marquee />
    <div class="px-10">
        <hr class="bg-gray-600 border-t border-gray-300">
    </div>
    <section class="my-10">
        <div class="container mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                <div class="max-w-lg">
                    <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Bersama <span class="text-primary-800">Membangun</span> Ekonomi Umat</h2>
                    <p class="mt-4 text-gray-600 text-lg">Koperasi syariah yang didirikan pada tahun 2017 di Tangerang Selatan dan berfokus pada meningkatkan ekonomi umat muslim di Graha Raya untuk anggota dan masyarakat sekitar.</p>
                    <div class="mt-8">
                        <a href="tentang" class="text-primary-600 hover:text-primary-800 font-medium">Selengkapnya
                            <span class="ml-2">&#8594;</span></a>
                    </div>
                </div>
                <div class="mt-12 md:mt-0">
                    <img src="https://images.unsplash.com/photo-1531973576160-7125cd663d86" alt="About Us Image" class="object-cover rounded-lg shadow-md">
                </div>
            </div>
        </div>
    </section>
    <div class="px-10">
        <hr class="bg-gray-600 border-t border-gray-300">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <section>
        <div class="pt-10 sm:pt-16">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="text-center">
                    <p class="max-w-4xl mx-auto mb-4 text-3xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-4xl lg:text-4xl lg:leading-tight">
                        <span class="text-primary-800">Perkembangan</span> Kami
                    </p>
                    <h1 class="max-w-xl mx-auto px-6 text-md text-gray-600">
                        Lorem ipsum dolar sit amet con setur adivisa, queensland null appointed, kukudos on your own design and design skills in both the new and management
                    </h1>
                </div>
            </div>
        </div>
        <x-line-chart />
        <x-pie-chart />
    </section>
    <div class="px-10">
        <hr class="bg-gray-600 border-t border-gray-300">
    </div>
    <section class="my-10">
        <div class="pt-10 sm:pt-16 mb-5">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="text-center">
                    <p class="max-w-4xl mx-auto mb-4 text-3xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-4xl lg:text-4xl lg:leading-tight">
                        <span class="text-primary-800">Pelayanan</span> Kami
                    </p>
                    <h1 class="max-w-xl mx-auto px-6 text-md text-gray-600">
                        Lorem ipsum dolar sit amet con setur adivisa, queensland null appointed, kukudos on your own design and design skills in both the new and management
                    </h1>
                </div>
            </div>
        </div>

        <div class="h-full flex w-full justify-center items-center dark:bg-gray-800 py-5 px-5">
            <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 p-4 md:p-2 xl:p-5">
                <div class="relative bg-white border border-gray-300 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 transform transition duration-500 hover:scale-105">

                    <div class="p-2 flex justify-center">
                        <img class="rounded-md" src="https://tailwindflex.com/public/images/thumbnails/radio-buttons/thumb_u.min.webp" loading="lazy">
                    </div>

                    <div class="px-4 pb-3">
                        <div>
                            <h5 class="text-xl font-semibold text-gray-900 dark:text-white mb-2 ">
                                Sektor<span class="text-primary-600"> Perdagangan</span>
                            </h5>

                            <p class="antialiased text-gray-600 dark:text-gray-400 text-sm break-all">
                                Lorem ipsum dolar sit amet con setur adivisa, queensland null appointed, kukudos on your own design.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="relative bg-white border border-gray-300 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 transform transition duration-500 hover:scale-105">

                    <div class="p-2 flex justify-center">
                        <img class="rounded-md" src="https://tailwindflex.com/public/images/thumbnails/radio-buttons/thumb_u.min.webp" loading="lazy">
                    </div>

                    <div class="px-4 pb-3">
                        <div>
                            <h5 class="text-xl font-semibold text-gray-900 dark:text-white mb-2 ">
                                Sektor<span class="text-primary-600"> Pembiayaan</span>
                            </h5>

                            <p class="antialiased text-gray-600 dark:text-gray-400 text-sm break-all">
                                Lorem ipsum dolar sit amet con setur adivisa, queensland null appointed, kukudos on your own design.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="relative bg-white border border-gray-300 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 transform transition duration-500 hover:scale-105 ">

                    <div class="p-2 flex justify-center">
                        <img class="rounded-md" src="https://tailwindflex.com/public/images/thumbnails/radio-buttons/thumb_u.min.webp" loading="lazy">
                    </div>

                    <div class="px-4 pb-3">
                        <div>
                            <h5 class="text-xl font-semibold text-gray-900 dark:text-white mb-2 ">
                                Sektor<span class="text-primary-600"> Simpanan</span>
                            </h5>

                            <p class="antialiased text-gray-600 dark:text-gray-400 text-sm break-all">
                                Lorem ipsum dolar sit amet con setur adivisa, queensland null appointed, kukudos on your own design.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="relative bg-white border border-gray-300 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 transform transition duration-500 hover:scale-105">

                    <div class="p-2 flex justify-center">
                        <img class="rounded-md" src="https://tailwindflex.com/public/images/thumbnails/radio-buttons/thumb_u.min.webp" loading="lazy">
                    </div>

                    <div class="px-4 pb-3">
                        <div>
                            <h5 class="text-xl font-semibold text-gray-900 dark:text-white mb-2 ">
                                Sektor<span class="text-primary-600"> Jasa</span>
                            </h5>

                            <p class="antialiased text-gray-600 dark:text-gray-400 text-sm break-all">
                                Lorem ipsum dolar sit amet con setur adivisa, queensland null appointed, kukudos on your own design.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="px-10">
        <hr class="bg-gray-600 border-t border-gray-300">
    </div>
    <section class="my-10">
        <div class="pt-10 sm:pt-16 mb-5">
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

        <div class="dark:bg-gray-800 h-full py-6 sm:py-5 lg:py-5 px-5">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
                    <!-- image - start -->
                    <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80 border-2 border-gray-300">
                        <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Nama Kegiatan</span>
                    </a>
                    <!-- image - end -->

                    <!-- image - start -->
                    <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80 border-2 border-gray-300">
                        <img src="https://images.unsplash.com/photo-1542759564-7ccbb6ac450a?auto=format&q=75&fit=crop&w=1000" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Nama Kegiatan</span>
                    </a>
                    <!-- image - end -->

                    <!-- image - start -->
                    <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80 border-2 border-gray-300">
                        <img src="https://images.unsplash.com/photo-1610465299996-30f240ac2b1c?auto=format&q=75&fit=crop&w=1000" loading="lazy" alt="Photo by Martin Sanchez" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Nama Kegiatan</span>
                    </a>
                    <!-- image - end -->

                    <!-- image - start -->
                    <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80 border-2 border-gray-300">
                        <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Lorenzo Herrera" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Nama Kegiatan</span>
                    </a>
                    <!-- image - end -->
                </div>
            </div>
        </div>
    </section>
    <div class="px-10">
        <hr class="bg-gray-600 border-t border-gray-300">
    </div>
    <section class="my-10">
        <div class="pt-10 sm:pt-16 mb-5">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="text-center">
                    <p class="max-w-4xl mx-auto mb-4 text-3xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-4xl lg:text-4xl lg:leading-tight">
                        Video<span class="text-primary-800"> Profile</span>
                    </p>
                    <h1 class="max-w-xl mx-auto px-6 text-md text-gray-600">
                        Lorem ipsum dolar sit amet con setur adivisa, queensland null appointed, kukudos on your own design and design skills in both the new and management
                    </h1>
                </div>
            </div>
        </div>
        <div class="mt-10 px-8">
            <video class="w-full h-auto max-w-full rounded-lg border-2 border-gray-300" controls>
                <source src="https://docs.material-tailwind.com/demo.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

    </section>
    <div class="px-10">
        <hr class="bg-gray-600 border-t border-gray-300">
    </div>
    <section class="mt-24 mb-10 sm:mb-10 md:mb-10">
        <div class="flex flex-col sm:flex-col md:flex-col lg:flex-row my-8 gap-x-12 gap-y-10">
            <div class="bg-gradient-to-br from-primary-500 to-primary-900 w-full sm:w-1/2 h-96 text-white p-4 rounded-br-[70px] sm:rounded-br-[50px]">
                <div class="px-12 py-24">
                    <div class="inline-flex gap-6">
                        <img src="Assets/icons/quote.svg">
                        <h3 class="font-base text-3xl tracking-widest">Testimonial</h3>
                    </div>
                    <h2 class="font-bold text-5xl leading-tight">Apa <span class="text-yellow-200">Kata</span> Mereka?</h2>
                </div>
            </div>

            <div class="max-w-screen-xl w-full px-4 mx-auto lg:px-6">
                <div id="default-carousel" class="relative overflow-hidden gap-y-3" data-carousel="static">
                    <hr class="border-t border-primary-800 w-1/4 mx-auto mb-4">
                    <div class="flex relative h-60 md:h-52 sm:h-52 justify-center" data-carousel-inner>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="max-w-screen-xl px-4 py-4 mx-auto text-center object-cover lg:px-6 bg-white h-60 md:h-52 sm:h-52">
                                <figure class="max-w-screen-md mx-auto">
                                    <div class="text-center text-md tracking-tight mb-4">
                                        <p class="text-primary-800 font-bold">Yang Jungwon</p>
                                        <p class="text-gray-500 font-medium dark:text-white">Anggota Kopsyah IWM</p>
                                    </div>
                                    <blockquote>
                                        <p class="text-lg font-medium text-gray-900 dark:text-white">"Flowbite is just awesome. It contains tons of predesigned components and pages starting from login screen to complex dashboard. Perfect choice for your next SaaS application."</p>
                                    </blockquote>
                                </figure>
                            </div>
                        </div>

                        <div class="hidden duration-700 ease-in-out overflow-hidden" data-carousel-item>
                            <div class="max-w-screen-xl px-4 py-4 mx-auto text-center object-cover lg:px-6 bg-white h-60 md:h-52 sm:h-52">
                                <figure class="max-w-screen-md mx-auto">
                                    <div class="text-center text-md tracking-tight mb-4">
                                        <p class="text-primary-800 font-bold">Park Sunghoon</p>
                                        <p class="text-gray-500 font-medium dark:text-white">Anggota Kopsyah IWM</p>
                                    </div>
                                    <blockquote>
                                        <p class="text-lg font-medium text-gray-900 dark:text-white">"Flowbite is just awesome. It contains tons of predesigned components and pages starting from login screen to complex dashboard. Perfect choice for your next SaaS application."</p>
                                    </blockquote>
                                </figure>
                            </div>
                        </div>

                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="max-w-screen-xl px-4 py-4 mx-auto text-center object-cover lg:px-6 bg-white h-60 md:h-52 sm:h-52">
                                <figure class="max-w-screen-md mx-auto">
                                    <div class="text-center text-md tracking-tight mb-4">
                                        <p class="text-primary-800 font-bold">Kim Seungmin</p>
                                        <p class="text-gray-500 font-medium dark:text-white">Anggota Kopsyah IWM</p>
                                    </div>
                                    <blockquote>
                                        <p class="text-lg font-medium text-gray-900 dark:text-white">"Flowbite is just awesome. It contains tons of predesigned components and pages starting from login screen to complex dashboard. Perfect choice for your next SaaS application."</p>
                                    </blockquote>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <hr class="border-t border-primary-800 w-1/4 mx-auto mb-5">
                    <div class="flex justify-center mb-4 gap-4">
                        <button class="hover:bg-primary-100 rounded-full" data-carousel-prev>
                            <img src="Assets/icons/caret_left.svg">
                        </button>
                        <button class="hover:bg-primary-100 rounded-3xl" data-carousel-next>
                            <img src="Assets/icons/caret_right.svg">
                        </button>
                    </div>
                </div>
                <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
                <div class="my-12 justify-end flex">
                    <p class="font-semibold text-right text-sm p-1 text-gray-400">Mau memberikan testimonial versi anda? </p>
                    <x-modal />
                </div>
            </div>
        </div>
    </section>
    <div class="px-10">
        <hr class="bg-gray-600 border-t border-gray-300">
    </div>
    <section class="my-20">
        <div class="px-8 py-4">
            <div class="bg-gradient-to-br from-primary-500 to-primary-900 p-10 lg:p-20 rounded-[45px]">
                <div class="max-w-6xl px-4 mx-auto md:max-w-4xl sm:max-w-2xl sm:px-6">
                    <div class="text-center">
                        <h1 class="max-w-md mx-auto text-3xl font-bold tracking-normal text-gray-100 sm:text-3xl md:text-4xl lg:text-5xl md:leading-tight sm:max-w-xl md:max-w-2xl lg:max-w-4xl lg:px-10 sm:px-5 md:px-5">
                            <span class="block">Tertarik Untuk <span class="text-yellow-200">Bergabung</span> Kopsyah IWM?</span>
                        </h1>
                        <h2 class="max-w-md lg:px-10 sm:px-5 md:px-5 mx-auto mt-3 font-normal text-gray-100 text-md sm:mt-5 sm:text-md md:mt-5 md:text-xl sm:max-w-xl md:max-w-xl">
                            Lorem ipsum dolar sit amet con setur adivisa, queensland null amet con setur adivisa
                        </h2>
                        <div class="max-w-md mx-auto mt-5 sm:flex sm:justify-center md:mt-8">
                            <div class="rounded-full shadow">
                                <a href="/daftar">
                                    <button type="button" class="flex items-center justify-center w-full px-8 py-3 text-base font-semibold text-primary-600 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-200 md:py-4 md:text-lg md:px-10">Ayo Bergabung</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footer />
</body>

</html>