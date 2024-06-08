<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Koperasi Syariah Ikatan Warga Muslim Graha Raya</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar/>
    <x-banner image="https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg">
        <x-slot name="title">
            Selamat Datang
        </x-slot>
        <x-slot name="body">
            Di Website Koperasi Syariah Ikatan Warga Muslim Graha Raya
        </x-slot>
    </x-banner>
    <x-marquee/>
    <hr class="h-px mx-8 bg-gray-300 border-0 my-10">
    <section class="my-10">
        <div class="container mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                <div class="max-w-lg">
                    <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Bersama <span
                            class="text-primary-800">Membangun</span> Ekonomi Umat</h2>
                    <p class="mt-4 text-gray-600 text-lg">Koperasi syariah yang didirikan pada tahun 2017 di Tangerang
                        Selatan dan berfokus pada meningkatkan ekonomi umat muslim di Graha Raya untuk anggota dan
                        masyarakat sekitar.</p>
                    <div class="mt-8">
                        <a href="tentang" class="text-primary-600 hover:text-primary-800 font-medium group">Selengkapnya
                            <span class="ml-1 group-hover:ml-2 transition duration-400">&8594;</span></a>
                    </div>
                </div>
                <div class="mt-12 md:mt-0">
                    <img src="{{asset('/assets/images/bersama-membangun-ekonomi.png')}}" alt="About Us Image">
                </div>
            </div>
        </div>
    </section>
    <section class="hidden"> <!-- TODO: @bebyazzura -->
        <hr class="h-px mx-8 bg-gray-300 border-0 my-20">
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <div class="pt-10 sm:pt-16">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="text-center">
                    <p
                        class="max-w-4xl mx-auto mb-4 text-3xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-4xl lg:text-4xl lg:leading-tight">
                        <span class="text-primary-800">Perkembangan</span> Kami
                    </p>
                    <h1 class="max-w-xl mx-auto px-6 text-md text-gray-600">
                        Lorem ipsum dolar sit amet con setur adivisa, queensland null appointed, kukudos on your own
                        design and design skills in both the new and management
                    </h1>
                </div>
            </div>
        </div>
        <x-line-chart />
        <x-pie-chart />
    </section>
    <hr class="h-px mx-8 bg-gray-300 border-0 my-10">
    <section class="my-10">
        <div class="pt-10 sm:pt-16 mb-5">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="text-center">
                    <p
                        class="max-w-4xl mx-auto mb-4 text-3xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-4xl lg:text-4xl lg:leading-tight">
                        <span class="text-primary-800">Pelayanan</span> Kami
                    </p>
                    <h1 class="max-w-xl mx-auto px-6 text-md text-gray-600">
                        Dalam kegiatan operasional nya Kopsyah IWM GR memiliki beberapa produk yang dapat memfasilitasi kebutuhan anggota nya seperti
                    </h1>
                </div>
            </div>
        </div>

        <div class="h-full flex w-full justify-center items-center dark:bg-gray-800 py-5 px-5">
            <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 p-4 md:p-2 xl:p-5">
                <a href="{{route('belanja')}}">
                    <div
                        class="relative bg-white border border-gray-300 rounded-lg shadow-md transform transition duration-200 h-full hover:scale-105">
                        <div class="p-4 flex flex-col gap-2">
                            <svg class="h-8 w-8 text-primary-900" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.8419 13.9985C19.0708 13.9986 19.2935 13.9277 19.4762 13.7967C19.659 13.6657 19.7918 13.4817 19.8545 13.2726L21.9597 6.27346C22.0043 6.12466 22.012 5.96806 21.9821 5.81596C21.9522 5.66387 21.8856 5.52045 21.7874 5.39697C21.6893 5.2735 21.5623 5.17335 21.4165 5.1044C21.2707 5.03545 21.11 4.99958 20.9471 4.99962H7.02098L6.39467 2.74491C6.3354 2.53141 6.2034 2.34256 6.01927 2.20781C5.83514 2.07306 5.60923 1.99999 5.37679 2H3.05262C2.77345 2 2.50571 2.10534 2.3083 2.29286C2.1109 2.48037 2 2.73469 2 2.99987C2 3.26506 2.1109 3.51938 2.3083 3.70689C2.50571 3.89441 2.77345 3.99975 3.05262 3.99975H4.56628L5.19785 6.25447V6.26447V6.27346L7.30308 13.2726L8.08833 16.2582C7.56848 16.4772 7.12052 16.8254 6.79175 17.2661C6.46297 17.7069 6.26559 18.2237 6.22044 18.7622C6.17529 19.3007 6.28404 19.8407 6.53523 20.3253C6.78641 20.81 7.17069 21.2211 7.6475 21.5155C8.12431 21.8099 8.67595 21.9764 9.24417 21.9977C9.81239 22.0189 10.3761 21.894 10.8758 21.6362C11.3755 21.3783 11.7926 20.997 12.0831 20.5327C12.3736 20.0683 12.5266 19.538 12.5262 18.9979C12.5227 18.6565 12.4572 18.3182 12.3325 17.998H14.8251C14.7004 18.3182 14.6349 18.6565 14.6314 18.9979C14.6314 19.5911 14.8166 20.1711 15.1636 20.6644C15.5106 21.1577 16.0038 21.5421 16.5808 21.7692C17.1578 21.9962 17.7928 22.0556 18.4053 21.9399C19.0179 21.8241 19.5806 21.5384 20.0222 21.1189C20.4638 20.6994 20.7646 20.1649 20.8864 19.5831C21.0083 19.0012 20.9457 18.3981 20.7067 17.85C20.4677 17.3019 20.063 16.8334 19.5437 16.5038C19.0243 16.1742 18.4138 15.9982 17.7892 15.9982H10.1894L9.66305 13.9985H18.8419ZM10.4209 18.9979C10.4209 19.1956 10.3592 19.3889 10.2435 19.5534C10.1279 19.7178 9.96348 19.846 9.77114 19.9216C9.57879 19.9973 9.36715 20.0171 9.16296 19.9785C8.95877 19.94 8.77121 19.8447 8.624 19.7049C8.47679 19.5651 8.37654 19.3869 8.33593 19.1929C8.29531 18.999 8.31615 18.7979 8.39583 18.6152C8.4755 18.4325 8.61041 18.2764 8.78351 18.1665C8.95662 18.0566 9.16013 17.998 9.36832 17.998C9.64749 17.998 9.91522 18.1033 10.1126 18.2909C10.31 18.4784 10.4209 18.7327 10.4209 18.9979ZM17.7892 19.9977C17.5811 19.9977 17.3775 19.9391 17.2044 19.8292C17.0313 19.7194 16.8964 19.5632 16.8168 19.3805C16.7371 19.1978 16.7162 18.9968 16.7569 18.8028C16.7975 18.6088 16.8977 18.4307 17.0449 18.2909C17.1921 18.151 17.3797 18.0558 17.5839 18.0172C17.7881 17.9786 17.9997 17.9984 18.1921 18.0741C18.3844 18.1498 18.5488 18.2779 18.6645 18.4424C18.7801 18.6068 18.8419 18.8001 18.8419 18.9979C18.8419 19.2631 18.731 19.5174 18.5336 19.7049C18.3362 19.8924 18.0684 19.9977 17.7892 19.9977Z"/>
                            </svg> 
                            <div>
                                <h5 class="text-xl font-semibold text-gray-900 dark:text-white mb-2 ">
                                    Sektor<span class="text-primary-600"> Perdagangan</span>
                                </h5>
    
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
                                        Alat Rumah Tangga
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        Produk Kebersihan
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        Aneka Minuman & Makanan
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route('pembiayaan')}}">
                    <div
                        class="relative bg-white border border-gray-300 rounded-lg shadow-md transform transition duration-200 h-full hover:scale-105">
                        <div class="p-4 flex flex-col gap-2">
                            <svg class="h-8 w-8 text-primary-900" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 22H3C2.448 22 2 21.552 2 21V17C2 16.448 2.448 16 3 16H5C5.552 16 6 16.448 6 17V21C6 21.552 5.552 22 5 22ZM19.66 16.02C19.43 16.02 19.2 16.08 18.98 16.21L16.71 17.5699C16.5 18.7999 15.42 19.75 14.12 19.75H11C10.59 19.75 10.25 19.41 10.25 19C10.25 18.59 10.59 18.25 11 18.25H14.12C14.74 18.25 15.25 17.75 15.25 17.12C15.25 16.5 14.74 16 14.12 16H9C7.9 16 7 16.9 7 18V20C7 21.1 7.9 22 9 22H14.6C15.51 22 16.39 21.69 17.1 21.12L20.5 18.4C20.82 18.15 21 17.76 21 17.36C21 16.58 20.36 16.02 19.66 16.02ZM18 7.5C18 10.809 15.309 13.5 12 13.5C8.691 13.5 6 10.809 6 7.5C6 4.191 8.691 1.5 12 1.5C15.309 1.5 18 4.191 18 7.5ZM14.25 8.91199C14.25 7.96999 13.626 7.14894 12.731 6.91394L11.646 6.63403C11.535 6.60503 11.438 6.53894 11.363 6.43994C11.29 6.34394 11.25 6.21901 11.25 6.08801C11.25 5.77901 11.48 5.52698 11.764 5.52698H12.237C12.497 5.52698 12.717 5.74102 12.748 6.02502C12.792 6.43702 13.157 6.73194 13.575 6.68994C13.987 6.64594 14.284 6.27504 14.24 5.86304C14.146 4.99204 13.531 4.307 12.737 4.099V3.99902C12.737 3.58502 12.401 3.24902 11.987 3.24902C11.573 3.24902 11.237 3.58502 11.237 3.99902V4.10803C10.384 4.34703 9.75201 5.13904 9.75201 6.08704C9.75201 6.54404 9.90101 6.99004 10.169 7.34204C10.442 7.70604 10.833 7.96898 11.272 8.08398L12.357 8.36401C12.59 8.42501 12.753 8.65003 12.753 8.91003C12.753 9.06303 12.696 9.20696 12.593 9.31396C12.536 9.37296 12.416 9.46997 12.239 9.46997H11.766C11.506 9.46997 11.286 9.25605 11.255 8.97205C11.211 8.56005 10.847 8.26401 10.428 8.30701C10.016 8.35101 9.719 8.72203 9.763 9.13403C9.856 9.99303 10.456 10.671 11.236 10.889V11C11.236 11.414 11.572 11.75 11.986 11.75C12.4 11.75 12.736 11.414 12.736 11V10.9C13.085 10.808 13.408 10.6281 13.67 10.3571C14.044 9.96906 14.25 9.45499 14.25 8.91199Z"/>
                            </svg>
    
                            <div>
                                <h5 class="text-xl font-semibold text-gray-900 dark:text-white mb-2 ">
                                    Sektor<span class="text-primary-600"> Pembiayaan</span>
                                </h5>
    
                                <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
                                    <li class="flex items-center">
                                        <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        Pembiayaan Konsumtif
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        Pembiayaan Modal Usaha
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route('simpanan')}}">
                    <div
                        class="relative bg-white border border-gray-300 rounded-lg shadow-md transform transition duration-200 h-full hover:scale-105 ">
                        <div class="p-4 flex flex-col gap-2">
                            <svg class="h-8 w-8 text-primary-900" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.32 6.55038L10.688 3.36376C10.604 3.2628 10.4998 3.17908 10.3816 3.11754C10.2635 3.05599 10.1337 3.01786 10 3.00541C9.73154 2.9821 9.46442 3.0621 9.25701 3.22793L5.17101 6.55038H13.32Z"/>
                                <path d="M11 15.2202V14.2568C11 13.2349 11.4214 12.2548 12.1716 11.5322C12.9217 10.8096 13.9391 10.4036 15 10.4036H20V9.4403C20 9.18482 19.8946 8.9398 19.7071 8.75914C19.5196 8.57849 19.2652 8.477 19 8.477H4C3.73478 8.477 3.48043 8.57849 3.29289 8.75914C3.10536 8.9398 3 9.18482 3 9.4403V20.0367C3 20.2922 3.10536 20.5372 3.29289 20.7179C3.48043 20.8985 3.73478 21 4 21H19C19.2652 21 19.5196 20.8985 19.7071 20.7179C19.8946 20.5372 20 20.2922 20 20.0367V19.0734H15C13.9391 19.0734 12.9217 18.6674 12.1716 17.9448C11.4214 17.2222 11 16.2421 11 15.2202Z"/>
                                <path d="M20 12.3302H15C14.4696 12.3302 13.9609 12.5332 13.5858 12.8945C13.2107 13.2558 13 13.7459 13 14.2568V15.2202C13 15.7311 13.2107 16.2212 13.5858 16.5825C13.9609 16.9438 14.4696 17.1468 15 17.1468H20C20.2652 17.1468 20.5196 17.0453 20.7071 16.8646C20.8946 16.684 21 16.4389 21 16.1835V13.2935C21 13.0381 20.8946 12.793 20.7071 12.6124C20.5196 12.4317 20.2652 12.3302 20 12.3302ZM16.5 15.7018C16.3022 15.7018 16.1089 15.6453 15.9444 15.5395C15.78 15.4336 15.6518 15.2832 15.5761 15.1071C15.5004 14.9311 15.4806 14.7374 15.5192 14.5506C15.5578 14.3637 15.653 14.1921 15.7929 14.0573C15.9327 13.9226 16.1109 13.8309 16.3049 13.7937C16.4989 13.7565 16.7 13.7756 16.8827 13.8485C17.0654 13.9214 17.2216 14.0449 17.3315 14.2033C17.4414 14.3617 17.5 14.548 17.5 14.7385C17.5 14.994 17.3946 15.239 17.2071 15.4197C17.0196 15.6003 16.7652 15.7018 16.5 15.7018Z"/>
                                <path d="M14.763 6.55038H17.32L14.688 3.36376C14.5228 3.16371 14.2818 3.03509 14.0181 3.00618C13.7545 2.97728 13.4897 3.05046 13.282 3.20963C13.0743 3.36879 12.9408 3.60091 12.9108 3.85491C12.8808 4.10891 12.9568 4.36399 13.122 4.56404L14.763 6.55038Z"/>
                            </svg>
                            <div>
                                <h5 class="text-xl font-semibold text-gray-900 dark:text-white mb-2 ">
                                    Sektor<span class="text-primary-600"> Simpanan</span>
                                </h5>
    
                                <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
                                    <li class="flex items-center">
                                        <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        Simpanan Berjangka
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        Simpanan Qurban
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        Simpanan Umrah
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route('jasa')}}">
                    <div
                        class="relative bg-white border border-gray-300 rounded-lg shadow-md transform transition duration-200 h-full hover:scale-105">
                        <div class="p-4 flex flex-col gap-2">
                            <svg class="h-8 w-8 text-primary-900" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.75 18.35C18.75 20.382 17.619 21.5 15.567 21.5H8.43298C6.38098 21.5 5.25 20.381 5.25 18.35C5.25 16.062 6.54997 13.39 10.215 13.39H13.7841C17.4501 13.389 18.75 16.062 18.75 18.35ZM12.0081 11.512C13.9501 11.512 15.5291 9.93898 15.5291 8.00598C15.5291 6.07198 13.9491 4.5 12.0081 4.5C10.0671 4.5 8.48804 6.07298 8.48804 8.00598C8.48804 9.93898 10.0661 11.512 12.0081 11.512ZM18.79 8.93005H17.1801C17.0401 8.93005 16.92 9.03003 16.89 9.16003C16.67 10.11 16.17 10.96 15.48 11.61C15.31 11.77 15.41 12.05 15.64 12.11C17.41 12.53 18.64 13.57 19.37 14.89C19.42 15 19.52 15.0699 19.65 15.0699H20.0699C21.6399 15.0699 22.5 14.21 22.5 12.65C22.5 10.94 21.53 8.93005 18.79 8.93005ZM17.51 2.5C16.512 2.5 15.641 3.04696 15.184 3.85596C15.147 3.92196 15.149 3.99498 15.163 4.05798C15.178 4.12398 15.207 4.15906 15.269 4.21106C16.248 5.03606 16.9011 6.23103 17.0081 7.58203C17.0141 7.65803 17.0401 7.70503 17.0861 7.75403C17.1321 7.80303 17.201 7.83294 17.292 7.84094C17.363 7.84694 17.436 7.85095 17.51 7.85095C18.98 7.85095 20.1801 6.65102 20.1801 5.17102C20.1801 3.70002 18.98 2.5 17.51 2.5ZM1.5 12.65C1.5 14.21 2.36005 15.0699 3.93005 15.0699H4.34998C4.47998 15.0699 4.58 15 4.63 14.89C5.36 13.57 6.58999 12.53 8.35999 12.11C8.58999 12.05 8.69002 11.77 8.52002 11.61C7.83002 10.96 7.32999 10.11 7.10999 9.16003C7.07999 9.03003 6.95995 8.93005 6.81995 8.93005H5.20996C2.46996 8.93005 1.5 10.94 1.5 12.65ZM3.81995 5.17004C3.81995 6.65004 5.01999 7.84998 6.48999 7.84998C6.56399 7.84998 6.63701 7.84597 6.70801 7.83997C6.80001 7.83197 6.86794 7.80205 6.91394 7.75305C6.95994 7.70405 6.98594 7.65705 6.99194 7.58105C7.09894 6.23005 7.75196 5.03496 8.73096 4.20996C8.79196 4.15796 8.82204 4.12301 8.83704 4.05701C8.85104 3.99401 8.85304 3.92198 8.81604 3.85498C8.35804 3.04598 7.48799 2.49902 6.48999 2.49902C5.01999 2.50002 3.81995 3.70004 3.81995 5.17004Z"/>
                            </svg>
                            <div>
                                <h5 class="text-xl font-semibold text-gray-900 dark:text-white mb-2 ">
                                    Sektor<span class="text-primary-600"> Jasa</span>
                                </h5>
    
                                <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
                                    <li class="flex items-center">
                                        <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        Jasa Laundry
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        Jasa Service AC
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-3.5 h-3.5 me-2 text-primary-800 flex-shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        Sewa Pick Up
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <hr class="h-px mx-8 bg-gray-300 border-0 my-10">
    <section class="my-10">
        <div class="pt-10 sm:pt-16 mb-5">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="text-center">
                    <p
                        class="max-w-4xl mx-auto mb-4 text-3xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-4xl lg:text-4xl lg:leading-tight">
                        <span class="text-primary-800">Kegiatan</span> Kami
                    </p>
                </div>
            </div>
        </div>

        <div class="dark:bg-gray-800 h-full py-6 sm:py-5 lg:py-5 px-5">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
                    <!-- image - start -->
                    <div
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80 border-2 border-gray-300">
                        <img src="{{asset('/assets/images/kegiatan-sembako.jpg')}}"
                            loading="lazy" alt="Kegiatan Pembagian Sembako"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Pembungkusan Sembako</span>
                    </div>
                    <!-- image - end -->

                    <!-- image - start -->
                    <div
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80 border-2 border-gray-300">
                        <img src="{{asset('/assets/images/kegiatan-rapat-tahunan.jpg')}}"
                            loading="lazy" alt="Kegiatan Rapat Tahunan"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Rapat Anggota Tahunan</span>
                    </div>
                    <!-- image - end -->

                    <!-- image - start -->
                    <div
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80 border-2 border-gray-300">
                        <img src="{{asset('/assets/images/kegiatan-rapat-kerja.jpg')}}"
                            loading="lazy" alt="Kegiataan Rapat Kerja"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Rapat Kerja</span>
                    </div>
                    <!-- image - end -->

                    <!-- image - start -->
                    <div
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80 border-2 border-gray-300">
                        <img src="{{asset('/assets/images/kegiatan-bagi-sembako.jpg')}}"
                            loading="lazy" alt="Kegiatan Bagi Sembako"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Pembagian Sembako</span>
                    </div>
                    <!-- image - end -->
                </div>
            </div>
        </div>
    </section>
    <section class="my-10 hidden"> <!-- TODO: @kiazunnurain -->
        <hr class="h-px mx-8 bg-gray-300 border-0 my-10">
        <div class="pt-10 sm:pt-16 mb-5">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="text-center">
                    <p
                        class="max-w-4xl mx-auto mb-4 text-3xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-4xl lg:text-4xl lg:leading-tight">
                        Video<span class="text-primary-800"> Profile</span>
                    </p>
                    <h1 class="max-w-xl mx-auto px-6 text-md text-gray-600">
                        Lorem ipsum dolar sit amet con setur adivisa, queensland null appointed, kukudos on your own
                        design and design skills in both the new and management
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
    <hr class="h-px mx-8 bg-gray-300 border-0 my-10">
    <section class="mt-24 mb-10 sm:mb-10 md:mb-10 hidden"> <!--TODO: @syiffanoriza @bebyazzura-->
        <div class="flex flex-col sm:flex-col md:flex-col lg:flex-row my-8 gap-x-12 gap-y-10">
            <div
                class="bg-gradient-to-br from-primary-500 to-primary-900 w-full sm:w-1/2 h-96 text-white p-4 rounded-br-[70px] sm:rounded-br-[50px]">
                <div class="px-12 py-24">
                    <div class="inline-flex gap-6">
                        <img src="Assets/icons/quote.svg">
                        <h3 class="font-base text-3xl tracking-widest">Testimonial</h3>
                    </div>
                    <h2 class="font-bold text-5xl leading-tight">Apa <span class="text-yellow-200">Kata</span> Mereka?
                    </h2>
                </div>
            </div>

            <!-- testimonial section -->
            <div class="max-w-screen-xl w-full px-4 mx-auto lg:px-6n">
                <div id="default-carousel" class="relative overflow-hidden gap-y-3" data-carousel="static">
                    <hr class="border-t border-primary-800 w-1/4 mx-auto mb-4">
                    <div class="flex relative h-60 md:h-52 sm:h-52 justify-center" data-carousel-inner>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div
                                class="max-w-screen-xl px-4 py-4 mx-auto text-center object-cover lg:px-6 bg-white h-60 md:h-52 sm:h-52">
                                <figure class="max-w-screen-md mx-auto">
                                    <div class="text-center text-md tracking-tight mb-4">
                                        <p class="text-primary-800 font-bold">Yang Jungwon</p>
                                        <p class="text-gray-500 font-medium dark:text-white">Anggota Kopsyah IWM</p>
                                    </div>
                                    <blockquote>
                                        <p class="text-lg font-medium text-gray-900 dark:text-white">"Flowbite is just
                                            awesome. It contains tons of predesigned components and pages starting from
                                            login screen to complex dashboard. Perfect choice for your next SaaS
                                            application."</p>
                                    </blockquote>
                                </figure>
                            </div>
                        </div>

                        <div class="hidden duration-700 ease-in-out overflow-hidden" data-carousel-item>
                            <div
                                class="max-w-screen-xl px-4 py-4 mx-auto text-center object-cover lg:px-6 bg-white h-60 md:h-52 sm:h-52">
                                <figure class="max-w-screen-md mx-auto">
                                    <div class="text-center text-md tracking-tight mb-4">
                                        <p class="text-primary-800 font-bold">Park Sunghoon</p>
                                        <p class="text-gray-500 font-medium dark:text-white">Anggota Kopsyah IWM</p>
                                    </div>
                                    <blockquote>
                                        <p class="text-lg font-medium text-gray-900 dark:text-white">"Flowbite is just
                                            awesome. It contains tons of predesigned components and pages starting from
                                            login screen to complex dashboard. Perfect choice for your next SaaS
                                            application."</p>
                                    </blockquote>
                                </figure>
                            </div>
                        </div>

                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div
                                class="max-w-screen-xl px-4 py-4 mx-auto text-center object-cover lg:px-6 bg-white h-60 md:h-52 sm:h-52">
                                <figure class="max-w-screen-md mx-auto">
                                    <div class="text-center text-md tracking-tight mb-4">
                                        <p class="text-primary-800 font-bold">Kim Seungmin</p>
                                        <p class="text-gray-500 font-medium dark:text-white">Anggota Kopsyah IWM</p>
                                    </div>
                                    <blockquote>
                                        <p class="text-lg font-medium text-gray-900 dark:text-white">"Flowbite is just
                                            awesome. It contains tons of predesigned components and pages starting from
                                            login screen to complex dashboard. Perfect choice for your next SaaS
                                            application."</p>
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
                    <p class="font-semibold text-right text-sm p-1 text-gray-400">Mau memberikan testimonial versi
                        anda? </p>
                    <x-modal />
                </div>
            </div>

            {{-- testimonial blank page 
                <div class="max-w-screen-xl w-full px-4 mx-auto lg:px-6">
                <div class="flex relative h-60 md:h-52 sm:h-52 justify-center my-20">
                    <div class="justify-center items-center self-center">
                        <h2 class="text-center font-semibold text-2xl text-gray-400">Belum ada testimoni!</h2>
                        <div class="flex space-x-1 items-center my-2">
                            <p class="text-gray-400 font-semibold">Mau memberikan testimonial versi anda?</p>
                            <x-modal />
                        </div>
                    </div>
                </div>
            </div> --}} 
        </div>
    </section>
    <hr class="h-px mx-8 bg-gray-300 border-0 my-10">
    <section class="my-20">
        <div class="px-8 py-4">
            <div class="bg-gradient-to-br from-primary-500 to-primary-900 p-10 lg:p-20 rounded-[45px]">
                <div class="max-w-6xl px-4 mx-auto md:max-w-4xl sm:max-w-2xl sm:px-6">
                    <div class="text-center">
                        <h1
                            class="max-w-md mx-auto text-3xl font-bold tracking-normal text-gray-100 sm:text-3xl md:text-4xl lg:text-5xl md:leading-tight sm:max-w-xl md:max-w-2xl lg:max-w-4xl lg:px-10 sm:px-5 md:px-5">
                            <span class="block">Tertarik Untuk <span class="text-yellow-200">Bergabung</span> Kopsyah
                                IWM?</span>
                        </h1>
                        <div class="max-w-md mx-auto mt-5 sm:flex sm:justify-center md:mt-8">
                            <div class="rounded-full shadow">
                                <a href="/daftar">
                                    <button type="button"
                                        class="flex items-center justify-center w-full px-8 py-3 text-base font-semibold text-primary-600 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-200 md:py-4 md:text-lg md:px-10">Ayo
                                        Bergabung</button>
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
