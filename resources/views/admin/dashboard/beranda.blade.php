<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda Dasbor Admin</title>
    <link rel="icon" href="{{ asset('/assets/logo/logomark.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">
    @include('components.admin.sidebar', ['active' => 'Beranda'])

    <div class="flex flex-col gap-4 p-4 h-screen sm:ml-64 bg-gray-100">
        <div class="flex flex-col gap-1 p-10 bg-gray-50 rounded-md">
            <h1 class="text-2xl font-bold">Selamat Datang</h1>
            <p class="text-sm">Halaman Dasbor Admin Koperasi Syariah IWM Graha Raya</p>
        </div>

        <div class="flex gap-4 flex-col xl:flex-row">
            <div class="p-10 w-full bg-gray-50 rounded-md flex flex-col gap-2">
                <svg class="flex-shrink-0 w-8 h-8 text-primary-900" width="24" height="24" viewBox="0 0 24 24"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.8419 13.9985C19.0708 13.9986 19.2935 13.9277 19.4762 13.7967C19.659 13.6657 19.7918 13.4817 19.8545 13.2726L21.9597 6.27346C22.0043 6.12466 22.012 5.96806 21.9821 5.81596C21.9522 5.66387 21.8856 5.52045 21.7874 5.39697C21.6893 5.2735 21.5623 5.17335 21.4165 5.1044C21.2707 5.03545 21.11 4.99958 20.9471 4.99962H7.02098L6.39467 2.74491C6.3354 2.53141 6.2034 2.34256 6.01927 2.20781C5.83514 2.07306 5.60923 1.99999 5.37679 2H3.05262C2.77345 2 2.50571 2.10534 2.3083 2.29286C2.1109 2.48037 2 2.73469 2 2.99987C2 3.26506 2.1109 3.51938 2.3083 3.70689C2.50571 3.89441 2.77345 3.99975 3.05262 3.99975H4.56628L5.19785 6.25447V6.26447V6.27346L7.30308 13.2726L8.08833 16.2582C7.56848 16.4772 7.12052 16.8254 6.79175 17.2661C6.46297 17.7069 6.26559 18.2237 6.22044 18.7622C6.17529 19.3007 6.28404 19.8407 6.53523 20.3253C6.78641 20.81 7.17069 21.2211 7.6475 21.5155C8.12431 21.8099 8.67595 21.9764 9.24417 21.9977C9.81239 22.0189 10.3761 21.894 10.8758 21.6362C11.3755 21.3783 11.7926 20.997 12.0831 20.5327C12.3736 20.0683 12.5266 19.538 12.5262 18.9979C12.5227 18.6565 12.4572 18.3182 12.3325 17.998H14.8251C14.7004 18.3182 14.6349 18.6565 14.6314 18.9979C14.6314 19.5911 14.8166 20.1711 15.1636 20.6644C15.5106 21.1577 16.0038 21.5421 16.5808 21.7692C17.1578 21.9962 17.7928 22.0556 18.4053 21.9399C19.0179 21.8241 19.5806 21.5384 20.0222 21.1189C20.4638 20.6994 20.7646 20.1649 20.8864 19.5831C21.0083 19.0012 20.9457 18.3981 20.7067 17.85C20.4677 17.3019 20.063 16.8334 19.5437 16.5038C19.0243 16.1742 18.4138 15.9982 17.7892 15.9982H10.1894L9.66305 13.9985H18.8419ZM10.4209 18.9979C10.4209 19.1956 10.3592 19.3889 10.2435 19.5534C10.1279 19.7178 9.96348 19.846 9.77114 19.9216C9.57879 19.9973 9.36715 20.0171 9.16296 19.9785C8.95877 19.94 8.77121 19.8447 8.624 19.7049C8.47679 19.5651 8.37654 19.3869 8.33593 19.1929C8.29531 18.999 8.31615 18.7979 8.39583 18.6152C8.4755 18.4325 8.61041 18.2764 8.78351 18.1665C8.95662 18.0566 9.16013 17.998 9.36832 17.998C9.64749 17.998 9.91522 18.1033 10.1126 18.2909C10.31 18.4784 10.4209 18.7327 10.4209 18.9979ZM17.7892 19.9977C17.5811 19.9977 17.3775 19.9391 17.2044 19.8292C17.0313 19.7194 16.8964 19.5632 16.8168 19.3805C16.7371 19.1978 16.7162 18.9968 16.7569 18.8028C16.7975 18.6088 16.8977 18.4307 17.0449 18.2909C17.1921 18.151 17.3797 18.0558 17.5839 18.0172C17.7881 17.9786 17.9997 17.9984 18.1921 18.0741C18.3844 18.1498 18.5488 18.2779 18.6645 18.4424C18.7801 18.6068 18.8419 18.8001 18.8419 18.9979C18.8419 19.2631 18.731 19.5174 18.5336 19.7049C18.3362 19.8924 18.0684 19.9977 17.7892 19.9977Z" />
                </svg>
                <h1 class="text-lg font-bold">Pengelolaan Produk</h1>
                <p class="text-sm text-gray-500">Lihat dan kelola list produk dari katalog website koperasi</p>
                <a class="flex items-center justify-between mt-2 gap-2 px-3 py-1 border border-gray-900 rounded-3xl hover:border-primary-900 hover:text-primary-900 focus:bg-primary-900 focus:text-gray-50 transition duration-200"
                    href="">
                    <p class="text-sm">Masuk Halaman Pengaturan</p>
                    <svg class="w-max" width="24" height="24" viewBox="0 0 24 15" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.2812 8.26557C14.3448 8.0986 14.3615 7.91488 14.329 7.73764C14.2965 7.5604 14.2164 7.39761 14.0987 7.26986L10.7342 3.61591C10.6566 3.52867 10.5638 3.45907 10.4612 3.4112C10.3585 3.36332 10.2482 3.33812 10.1365 3.33707C10.0248 3.33602 9.91405 3.35913 9.81068 3.40506C9.70731 3.45099 9.6134 3.51882 9.53442 3.60459C9.45545 3.69036 9.39299 3.79235 9.3507 3.90462C9.30841 4.01688 9.28713 4.13717 9.2881 4.25846C9.28907 4.37975 9.31227 4.49962 9.35635 4.61107C9.40043 4.72252 9.46451 4.82332 9.54485 4.90759L11.4744 7.00313H3.41143C3.18835 7.00313 2.97441 7.09937 2.81667 7.27068C2.65893 7.44199 2.57031 7.67434 2.57031 7.91661C2.57031 8.15889 2.65893 8.39123 2.81667 8.56255C2.97441 8.73386 3.18835 8.8301 3.41143 8.8301H11.4744L9.54569 10.9247C9.46535 11.009 9.40128 11.1098 9.35719 11.2212C9.31311 11.3327 9.28991 11.4526 9.28894 11.5739C9.28797 11.6951 9.30925 11.8154 9.35154 11.9277C9.39383 12.04 9.45629 12.142 9.53526 12.2277C9.61424 12.3135 9.70815 12.3813 9.81152 12.4273C9.91489 12.4732 10.0256 12.4963 10.1373 12.4952C10.249 12.4942 10.3594 12.469 10.462 12.4211C10.5646 12.3732 10.6574 12.3036 10.735 12.2164L14.0995 8.56245C14.1774 8.47741 14.2392 8.37652 14.2812 8.26557Z" />
                    </svg>
                </a>
            </div>
            <div class="p-10 w-full bg-gray-50 rounded-md flex flex-col gap-2">
                <svg class="flex-shrink-0 w-8 h-8 text-primary-900" width="24" height="24" viewBox="0 0 24 24"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.977 3.783C18.9276 3.56077 18.8039 3.36205 18.6262 3.21968C18.4486 3.07731 18.2277 2.99981 18 3H6C5.77234 2.99981 5.55144 3.07731 5.37379 3.21968C5.19615 3.36205 5.0724 3.56077 5.023 3.783L3.2 12H7.439C8.0217 12.0003 8.59162 12.1708 9.07874 12.4906C9.56586 12.8104 9.94897 13.2655 10.181 13.8C10.3329 14.1567 10.5863 14.4609 10.9097 14.6747C11.2331 14.8886 11.6123 15.0026 12 15.0026C12.3877 15.0026 12.7669 14.8886 13.0903 14.6747C13.4137 14.4609 13.6671 14.1567 13.819 13.8C14.051 13.2655 14.4341 12.8104 14.9213 12.4906C15.4084 12.1708 15.9783 12.0003 16.561 12H20.8L18.977 3.783ZM9 5H15C15.2652 5 15.5196 5.10536 15.7071 5.29289C15.8946 5.48043 16 5.73478 16 6C16 6.26522 15.8946 6.51957 15.7071 6.70711C15.5196 6.89464 15.2652 7 15 7H9C8.73478 7 8.48043 6.89464 8.29289 6.70711C8.10536 6.51957 8 6.26522 8 6C8 5.73478 8.10536 5.48043 8.29289 5.29289C8.48043 5.10536 8.73478 5 9 5ZM16 10H8C7.73478 10 7.48043 9.89464 7.29289 9.70711C7.10536 9.51957 7 9.26522 7 9C7 8.73478 7.10536 8.48043 7.29289 8.29289C7.48043 8.10536 7.73478 8 8 8H16C16.2652 8 16.5196 8.10536 16.7071 8.29289C16.8946 8.48043 17 8.73478 17 9C17 9.26522 16.8946 9.51957 16.7071 9.70711C16.5196 9.89464 16.2652 10 16 10Z" />
                    <path
                        d="M4 21H20C20.2652 21 20.5196 20.8946 20.7071 20.7071C20.8946 20.5196 21 20.2652 21 20V14H16.561C16.3676 14.0005 16.1786 14.0576 16.0173 14.1642C15.8559 14.2708 15.7293 14.4223 15.653 14.6C15.3454 15.3136 14.8355 15.9214 14.1863 16.3485C13.5371 16.7756 12.7771 17.0032 12 17.0032C11.2229 17.0032 10.4629 16.7756 9.8137 16.3485C9.16452 15.9214 8.65463 15.3136 8.347 14.6C8.2707 14.4223 8.14408 14.2708 7.98274 14.1642C7.82139 14.0576 7.63238 14.0005 7.439 14H3V20C3 20.2652 3.10536 20.5196 3.29289 20.7071C3.48043 20.8946 3.73478 21 4 21Z" />
                </svg>
                <h1 class="text-lg font-bold">Pengelolaan Testimoni</h1>
                <p class="text-sm text-gray-500">Lihat dan kelola masukan testimoni terbaru dari pelanggan</p>
                <a class="flex items-center justify-between mt-2 gap-2 px-3 py-1 border border-gray-900 rounded-3xl hover:border-primary-900 hover:text-primary-900 focus:bg-primary-900 focus:text-gray-50 transition duration-200"
                    href="">
                    <p class="text-sm">Masuk Halaman Pengaturan</p>
                    <svg class="w-max" width="24" height="24" viewBox="0 0 24 15" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.2812 8.26557C14.3448 8.0986 14.3615 7.91488 14.329 7.73764C14.2965 7.5604 14.2164 7.39761 14.0987 7.26986L10.7342 3.61591C10.6566 3.52867 10.5638 3.45907 10.4612 3.4112C10.3585 3.36332 10.2482 3.33812 10.1365 3.33707C10.0248 3.33602 9.91405 3.35913 9.81068 3.40506C9.70731 3.45099 9.6134 3.51882 9.53442 3.60459C9.45545 3.69036 9.39299 3.79235 9.3507 3.90462C9.30841 4.01688 9.28713 4.13717 9.2881 4.25846C9.28907 4.37975 9.31227 4.49962 9.35635 4.61107C9.40043 4.72252 9.46451 4.82332 9.54485 4.90759L11.4744 7.00313H3.41143C3.18835 7.00313 2.97441 7.09937 2.81667 7.27068C2.65893 7.44199 2.57031 7.67434 2.57031 7.91661C2.57031 8.15889 2.65893 8.39123 2.81667 8.56255C2.97441 8.73386 3.18835 8.8301 3.41143 8.8301H11.4744L9.54569 10.9247C9.46535 11.009 9.40128 11.1098 9.35719 11.2212C9.31311 11.3327 9.28991 11.4526 9.28894 11.5739C9.28797 11.6951 9.30925 11.8154 9.35154 11.9277C9.39383 12.04 9.45629 12.142 9.53526 12.2277C9.61424 12.3135 9.70815 12.3813 9.81152 12.4273C9.91489 12.4732 10.0256 12.4963 10.1373 12.4952C10.249 12.4942 10.3594 12.469 10.462 12.4211C10.5646 12.3732 10.6574 12.3036 10.735 12.2164L14.0995 8.56245C14.1774 8.47741 14.2392 8.37652 14.2812 8.26557Z" />
                    </svg>
                </a>
            </div>
            <div class="p-10 w-full bg-gray-50 rounded-md flex flex-col gap-2">
                <svg class="flex-shrink-0 w-8 h-8 text-primary-900" width="24" height="24" viewBox="0 0 24 24"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M3.57474 7.96623L11.5131 11.996C11.6645 12.0722 11.8326 12.112 12.0032 12.112C12.1738 12.112 12.3418 12.0722 12.4932 11.996L20.4316 7.96623C20.6028 7.87932 20.7462 7.7486 20.8463 7.58825C20.9464 7.4279 20.9993 7.24403 20.9993 7.05659C20.9993 6.86915 20.9464 6.68528 20.8463 6.52493C20.7462 6.36458 20.6028 6.23386 20.4316 6.14695L12.4932 2.11721C12.3417 2.04022 12.1732 2 12.0021 2C11.8311 2 11.6625 2.04022 11.511 2.11721L3.57262 6.14695C3.40141 6.23386 3.258 6.36458 3.15793 6.52493C3.05786 6.68528 3.00496 6.86915 3.00496 7.05659C3.00496 7.24403 3.05786 7.4279 3.15793 7.58825C3.258 7.7486 3.40141 7.87932 3.57262 7.96623H3.57474Z" />
                    <path
                        d="M19.9416 10.1664C19.6608 10.1664 19.3916 10.2746 19.1931 10.4671C18.9946 10.6597 18.8831 10.9208 18.8831 11.1931V11.3789L12.0032 14.8697L5.12325 11.3789V11.1931C5.12325 10.9208 5.01173 10.6597 4.81323 10.4671C4.61474 10.2746 4.34552 10.1664 4.0648 10.1664C3.78408 10.1664 3.51486 10.2746 3.31636 10.4671C3.11786 10.6597 3.00635 10.9208 3.00635 11.1931V12.0001C3.00632 12.1875 3.05917 12.3713 3.15917 12.5317C3.25918 12.692 3.40253 12.8228 3.57368 12.9097L11.5121 16.9395C11.6636 17.0164 11.8321 17.0567 12.0032 17.0567C12.1742 17.0567 12.3428 17.0164 12.4943 16.9395L20.4327 12.9097C20.6038 12.8228 20.7472 12.692 20.8472 12.5317C20.9472 12.3713 21 12.1875 21 12.0001V11.1931C21 10.9208 20.8885 10.6597 20.69 10.4671C20.4915 10.2746 20.2223 10.1664 19.9416 10.1664Z" />
                    <path
                        d="M19.9352 15.1099C19.6545 15.1099 19.3853 15.2181 19.1868 15.4106C18.9883 15.6032 18.8768 15.8643 18.8768 16.1366V16.3224L11.9968 19.8131L5.1169 16.3224V16.1366C5.1169 15.8643 5.00539 15.6032 4.80689 15.4106C4.60839 15.2181 4.33917 15.1099 4.05845 15.1099C3.77773 15.1099 3.50851 15.2181 3.31001 15.4106C3.11152 15.6032 3 15.8643 3 16.1366V16.9446C2.99997 17.132 3.05282 17.3158 3.15283 17.4762C3.25283 17.6365 3.39618 17.7673 3.56733 17.8542L11.5057 21.884C11.6575 21.9602 11.8259 22 11.9968 22C12.1677 22 12.3362 21.9602 12.4879 21.884L20.4263 17.8542C20.5975 17.7673 20.7408 17.6365 20.8408 17.4762C20.9408 17.3158 20.9937 17.132 20.9937 16.9446V16.1366C20.9937 15.8643 20.8821 15.6032 20.6836 15.4106C20.4851 15.2181 20.2159 15.1099 19.9352 15.1099Z" />
                </svg>
                <h1 class="text-lg font-bold">Pengelolaan Struktur</h1>
                <p class="text-sm text-gray-500">Lihat dan kelola list struktur manajemen IWM Graha Raya</p>
                <a class="flex items-center justify-between mt-2 gap-2 px-3 py-1 border border-gray-900 rounded-3xl hover:border-primary-900 hover:text-primary-900 focus:bg-primary-900 focus:text-gray-50 transition duration-200"
                    href="">
                    <p class="text-sm">Masuk Halaman Pengaturan</p>
                    <svg class="w-max" width="24" height="24" viewBox="0 0 24 15" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.2812 8.26557C14.3448 8.0986 14.3615 7.91488 14.329 7.73764C14.2965 7.5604 14.2164 7.39761 14.0987 7.26986L10.7342 3.61591C10.6566 3.52867 10.5638 3.45907 10.4612 3.4112C10.3585 3.36332 10.2482 3.33812 10.1365 3.33707C10.0248 3.33602 9.91405 3.35913 9.81068 3.40506C9.70731 3.45099 9.6134 3.51882 9.53442 3.60459C9.45545 3.69036 9.39299 3.79235 9.3507 3.90462C9.30841 4.01688 9.28713 4.13717 9.2881 4.25846C9.28907 4.37975 9.31227 4.49962 9.35635 4.61107C9.40043 4.72252 9.46451 4.82332 9.54485 4.90759L11.4744 7.00313H3.41143C3.18835 7.00313 2.97441 7.09937 2.81667 7.27068C2.65893 7.44199 2.57031 7.67434 2.57031 7.91661C2.57031 8.15889 2.65893 8.39123 2.81667 8.56255C2.97441 8.73386 3.18835 8.8301 3.41143 8.8301H11.4744L9.54569 10.9247C9.46535 11.009 9.40128 11.1098 9.35719 11.2212C9.31311 11.3327 9.28991 11.4526 9.28894 11.5739C9.28797 11.6951 9.30925 11.8154 9.35154 11.9277C9.39383 12.04 9.45629 12.142 9.53526 12.2277C9.61424 12.3135 9.70815 12.3813 9.81152 12.4273C9.91489 12.4732 10.0256 12.4963 10.1373 12.4952C10.249 12.4942 10.3594 12.469 10.462 12.4211C10.5646 12.3732 10.6574 12.3036 10.735 12.2164L14.0995 8.56245C14.1774 8.47741 14.2392 8.37652 14.2812 8.26557Z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

</body>

</html>
