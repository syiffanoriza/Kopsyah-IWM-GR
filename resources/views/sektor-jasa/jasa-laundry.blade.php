<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jasa Laundry - Sektor Jasa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar />
    <section id="laundry" class="py-20">
        <div class="flex flex-wrap mb-32">
            <div class="w-full p-10 space-y-2 lg:space-y-5 items-center">
                <h4 class="text-center lg:text-lg text-sm text-gray-500 font-medium tracking-widest">Sektor Jasa</h4>
                <h2 class="text-center text-4xl md:2/5 lg:w-3/4 xl:w-2/4 font-bold tracking-wide mx-auto md:text-5xl lg:text-6xl">
                    Jasa <span class="text-primary-900">Laundry</span>
                </h2>
                <hr class="h-0.5 w-36 lg:w-48 mx-auto bg-gray-700 mt-7">
            </div>
        </div>

        <div class="container">
            <div class="flex flex-wrap px-4 items-center justify-center gap-10">
                <div class="w-full lg:w-2/5 flex flex-col items-center p-10 bg-white border border-gray-700 rounded-lg shadow">
                    <svg class="w-20 h-16 text-gray-500 p-3 border border-gray-700 rounded-md mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 50 50">
                        <path d="M22.1343 33.5451C21.4298 33.5451 20.7327 33.2441 20.2491 32.6638L11.9456 22.7218C11.0768 21.6825 11.2153 20.1355 12.2575 19.2673C13.2973 18.3992 14.8454 18.5377 15.7136 19.5792L22.5263 27.7357L46.0685 10.1477C47.1541 9.33619 48.6931 9.55881 49.5052 10.6439C50.3173 11.729 50.0946 13.2668 49.0084 14.0783L23.6034 33.0558C23.1633 33.386 22.647 33.5451 22.1343 33.5451Z" fill="#00A500" />
                        <path d="M27.2977 7.32482L24.7812 9.33646C29.0518 9.98545 32.8112 12.2146 35.4409 15.4046L39.4705 12.3931C38.9703 11.7733 38.4375 11.1804 37.8755 10.6167C36.8717 9.61346 35.7677 8.7035 34.5939 7.91029C33.4076 7.10964 32.1393 6.42173 30.8253 5.86545C28.9602 5.07739 27.0149 4.55431 25.0182 4.30078L27.3377 6.85954C27.4585 6.99804 27.4402 7.20979 27.2977 7.32482Z" fill="#00A500" />
                        <mask id="mask0_1787_13269" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="1" width="45" height="48">
                            <path d="M0 1H44.4015V48.4661H0V1Z" fill="white" />
                        </mask>
                        <g mask="url(#mask0_1787_13269)">
                            <path d="M39.2078 24.087C39.3011 24.811 39.3503 25.5481 39.3503 26.2961C39.3503 35.7562 31.6489 43.4514 22.1847 43.4514C12.72 43.4514 5.01909 35.7545 5.01909 26.2961C5.01909 18.194 10.6671 11.387 18.2335 9.59803V11.8432C18.2335 12.1225 18.5672 12.2661 18.7721 12.075L24.316 6.86415C24.4493 6.73824 24.4493 6.52477 24.316 6.39886L18.7721 1.18806C18.5672 0.996337 18.2335 1.14056 18.2335 1.41927V4.4725C16.6294 4.76094 15.0636 5.22622 13.5487 5.86605C12.2329 6.42233 10.9647 7.11024 9.78006 7.91089C8.60684 8.7041 7.50288 9.61463 6.49906 10.6173C5.49524 11.6205 4.58471 12.7239 3.79093 13.8972C2.9897 15.0824 2.30122 16.35 1.74495 17.6635C0.587754 20.3991 0 23.3029 0 26.2938C0 29.2852 0.587754 32.1908 1.74495 34.9247C2.30122 36.2398 2.9897 37.5075 3.79093 38.691C4.58471 39.8636 5.49524 40.967 6.49906 41.9703C7.50288 42.9735 8.60684 43.8835 9.78006 44.6773C10.9664 45.4779 12.2347 46.1652 13.5487 46.7215C16.286 47.8781 19.1916 48.4653 22.1847 48.4653C25.179 48.4653 28.0846 47.8781 30.8202 46.7215C32.1359 46.1652 33.4041 45.4779 34.5888 44.6773C35.762 43.8835 36.8665 42.9735 37.8698 41.9703C38.8736 40.967 39.7847 39.8636 40.5785 38.691C41.3797 37.5058 42.0676 36.2381 42.6239 34.9247C43.7811 32.1891 44.3688 29.2852 44.3688 26.2938C44.3688 24.4046 44.1353 22.5498 43.6701 20.751L39.2078 24.087Z" fill="#00A500" />
                        </g>
                        <path d="M22.1343 33.5451C21.4298 33.5451 20.7327 33.2441 20.2491 32.6638L11.9456 22.7218C11.0768 21.6825 11.2153 20.1355 12.2575 19.2673C13.2973 18.3992 14.8454 18.5377 15.7136 19.5792L22.5263 27.7357L46.0685 10.1477C47.1541 9.33619 48.6931 9.55881 49.5052 10.6439C50.3173 11.729 50.0946 13.2668 49.0084 14.0783L23.6034 33.0558C23.1633 33.386 22.647 33.5451 22.1343 33.5451Z" fill="#00A500" />

                    </svg>
                    <h5 class="mb-2 text-2xl font-medium tracking-tight text-primary-900">Cepat <span class="text-gray-900">dan</span> Mudah
                    </h5>
                    <hr class="h-0.5 w-32 mx-auto bg-gray-700">
                    <p class="my-3 font-normal text-center text-gray-500">Kami memberikan hasil
                        terbaik untuk pakaian Anda dengan cepat dann mudah Dengan menggunakan teknologi modern dan
                        produk perawatan terbaik, kami menyediakan solusi lengkap untuk kebutuhan pencucian Anda.
                        Kualitas terjamin, Anda dapat mengandalkan kami untuk menjaga pakaian Anda tetap bersih dan
                        segar setiap saat.
                </div>
                <div class="w-full lg:w-2/5 flex flex-col items-center px-10 pt-10 pb-16 bg-white border border-gray-700 rounded-lg shadow">
                    <svg class="w-20 h-16 text-gray-500 p-1 border border-gray-700 rounded-md mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 60 60">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.6536 18.1938C15.0246 18.5378 14.863 18.9138 14.863 20.0324C14.863 21.077 15.1202 21.6802 15.5657 21.6802C15.9696 21.6802 16.2684 21.0773 16.2684 20.2623V19.3964H32.0654C40.7537 19.3964 47.9844 19.4431 48.1334 19.5004C48.2825 19.5577 49.455 21.4227 50.7391 23.6452L53.0737 27.6861L55.6575 28.9846C57.0784 29.6989 58.3236 30.4373 58.4244 30.6258C58.5328 30.8283 58.6077 32.3009 58.6077 34.2299V37.4916H56.9387C55.5531 37.4916 55.2697 37.4457 55.2697 37.221C55.2697 36.2546 53.7051 34.5479 52.4838 34.1819C50.269 33.5182 47.7815 34.7559 47.1555 36.8328L46.957 37.4916H37.8544H28.7517L28.3708 36.6065C27.6781 34.9962 26.108 33.9757 24.3294 33.9797C22.7163 33.9832 20.9101 35.3123 20.4519 36.8328L20.2534 37.4916H18.261H16.2684V36.8013C16.2684 36.4082 16.1497 35.9925 15.9924 35.8351C15.6657 35.5085 15.6423 35.5057 15.2028 35.7409C14.7019 36.009 14.718 37.7869 15.2272 38.4341C15.5878 38.8926 15.6133 38.897 17.9223 38.897H20.2534L20.4672 39.6107C20.7318 40.4936 21.723 41.6155 22.6618 42.0944C24.7853 43.1777 27.6842 41.9665 28.4753 39.6653L28.7091 38.9849L37.8609 38.9394C46.0264 38.8988 47.0127 38.9232 47.0127 39.166C47.0127 39.6238 47.6525 40.711 48.2709 41.3037C50.4569 43.3991 54.1715 42.5182 55.1545 39.6716L55.3917 38.9849L57.3456 38.897C58.9065 38.8269 59.3624 38.7461 59.6124 38.4958C59.8886 38.2193 59.9314 37.7553 59.9784 34.5429C60.0502 29.6137 60.1435 29.7971 56.6596 28.0206L54.1064 26.7188L51.7566 22.683C49.5877 18.9575 49.3521 18.6223 48.6929 18.323C48.0155 18.0152 47.161 17.9987 31.9919 18.0001C20.7527 18.0011 15.9006 18.0587 15.6536 18.1938ZM41.3155 21.7806C40.9347 22.1616 40.9039 27.4979 41.2809 27.8108C41.4506 27.9516 42.7883 27.9972 45.7857 27.964C49.5042 27.9229 50.0722 27.8802 50.2298 27.6302C50.3716 27.4054 50.0922 26.7815 48.9334 24.7338C48.1209 23.2983 47.317 21.9845 47.1466 21.8141C46.8787 21.5462 46.485 21.5046 44.2143 21.5046C42.0643 21.5046 41.542 21.5543 41.3155 21.7806ZM11.7411 26.5554L11.7886 30.2008L12.4474 30.2553L13.1062 30.3099V28.8059V27.3021H14.5116H15.9171V26.5993V25.8966H14.5116H13.1062V25.0182V24.1398H14.7751H16.4441V23.5249V22.91H14.0689H11.6935L11.7411 26.5554ZM17.1873 26.5554L17.2347 30.2008L17.8935 30.2553L18.5523 30.3099V28.8059V27.3021H19.128C19.6753 27.3021 19.7404 27.3758 20.4444 28.7953L21.1849 30.2886H21.889C22.2762 30.2886 22.593 30.2078 22.593 30.1091C22.593 30.0104 22.2731 29.2932 21.8822 28.5157L21.1714 27.102L21.6058 26.7601C22.6244 25.9588 22.5824 24.2543 21.5222 23.3622C21.0166 22.9367 20.8715 22.91 19.0623 22.91H17.1396L17.1873 26.5554ZM23.6471 26.5993V30.2886H26.0188H28.3905V29.5922V28.8958L26.6776 28.8456L24.9647 28.7953L24.9107 28.0487L24.8566 27.3021H26.3601H27.8634V26.6064V25.9108L26.414 25.8597L24.9647 25.8088V25.0182V24.2276L26.6776 24.1774L28.3905 24.1271V23.5186V22.91H26.0188H23.6471V26.5993ZM29.4446 26.5993V30.2985L31.8602 30.2496L34.2758 30.2008V29.5859V28.971L32.5629 28.9208L30.85 28.8705V28.0933V27.3163L32.2994 27.2652L33.7487 27.2142V26.5993V25.9844L32.2994 25.9335L30.85 25.8824V25.0175V24.1524L32.5629 24.1022L34.2758 24.0519V23.5249V22.9979L31.8602 22.949L29.4446 22.9002V26.5993ZM42.445 24.7489V26.5993H45.4389H48.4329L47.9979 25.8527C47.7588 25.4421 47.2977 24.6317 46.9734 24.0519L46.3836 22.9979L44.4142 22.9481L42.445 22.8984V24.7489ZM18.5523 25.0182V25.8966H19.6108C20.5925 25.8966 20.6819 25.863 20.8451 25.4337C20.979 25.0818 20.9558 24.8712 20.749 24.5553C20.5175 24.2022 20.3323 24.1398 19.5145 24.1398H18.5523V25.0182ZM4.93504 29.5891C4.8711 29.6924 4.91607 29.8942 5.03501 30.0374C5.21139 30.25 5.72175 30.2888 7.8171 30.2493C10.2498 30.2033 10.3831 30.1825 10.3831 29.8494C10.3831 29.5156 10.2498 29.4956 7.71714 29.4496C5.96348 29.4178 5.01147 29.4656 4.93504 29.5891ZM2.59672 31.9121L2.65312 32.309H11.4372C20.1041 32.309 20.2213 32.3042 20.2213 31.9576C20.2213 31.6115 20.089 31.6056 11.3808 31.5608L2.54033 31.5151L2.59672 31.9121ZM0.0535567 33.8606C-0.190289 34.496 0.0126226 34.5092 9.34043 34.4627C18.3322 34.4179 18.4645 34.4121 18.4645 34.0658C18.4645 33.7195 18.3322 33.7137 9.30442 33.6689C1.74695 33.6315 0.128573 33.6649 0.0535567 33.8606ZM23.1929 35.6331C22.1128 36.1034 21.385 37.5822 21.6192 38.8305C21.8077 39.8355 22.9786 40.9362 24.0265 41.0932C25.0609 41.2484 26.2292 40.7658 26.8167 39.9408C27.4363 39.0706 27.4998 37.5984 26.9525 36.7931C26.0678 35.4913 24.5761 35.031 23.1929 35.6331ZM49.6903 35.7339C49.0239 36.1401 48.4659 36.9807 48.3082 37.8159C47.9046 39.9515 50.2927 41.767 52.3234 40.8687C53.3854 40.3989 53.9168 39.6119 54.0027 38.3814C54.0816 37.2539 53.6756 36.4753 52.6482 35.7829C51.874 35.2611 50.5028 35.2383 49.6903 35.7339ZM23.893 37.2746C23.1527 37.769 23.2855 38.9439 24.1174 39.2602C25.1335 39.6465 26.0096 38.273 25.2389 37.5023C24.8754 37.1388 24.2537 37.0338 23.893 37.2746ZM50.3635 37.6031C49.9192 38.1678 49.9086 38.402 50.3067 38.8623C50.7832 39.4134 51.286 39.4803 51.8164 39.0631C52.3766 38.6224 52.4235 37.9833 51.9318 37.4916C51.4415 37.0013 50.8009 37.0468 50.3635 37.6031Z" fill="#00A500" />
                    </svg>
                    <h5 class="mb-2 text-2xl font-medium tracking-tight text-gray-900">Gratis <span class="text-primary-900">Ongkir</span>
                    </h5>
                    <hr class="h-0.5 w-32 mx-auto bg-gray-700">
                    <p class="my-3 font-normal text-center text-gray-500 dark:text-gray-400">Nikmati kemudahan layanan
                        laundry kami dengan tambahan fasilitas gratis ongkir khusus untuk wilayah <span class="text-primary-900">sekitar Graha Raya, Tangerang Selatan.</span>
                        Dengan layanan ini, Anda dapat menikmati pencucian pakaian yang nyaman dan
                        terjangkau tanpa biaya tambahan pengiriman.
                </div>
                <div class="w-full lg:w-10/12 h-[15rem] lg:h-[30rem] lg:p-8 p-4 shadow-lg border border-gray-900 rounded-lg ">
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" class="object-cover h-full w-full rounded-lg border border-gray-900" alt="">
                </div>
                <div class="items-center justify-center flex">
                    <!-- Modal toggle -->
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button" class="flex text-white bg-gradient-to-r justify-center items-center from-[#7AD800] to-[#00A500] hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-primary-300 shadow shadow-primary-900/30 font-normal md:font-medium rounded-lg text-base px-10 lg:px-32 py-2.5 text-center mt-5 me-2 mb-2 tracking-wide"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 mr-2 text-white" fill="currentColor" viewBox="0 0 18 18">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                        </svg></span>
                        Pesan Sekarang
                    </button>
                    <!-- Main modal -->
                    <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
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
                                <!-- Modal body -->
                                <form class="pb-4" onsubmit="sendMessage()">
                                    <div class="h-80 overflow-y-auto border rounded-lg m-5 md:p-5 border-primary-900 p-4 grid gap-4 mb-4 grid-cols-2">
                                        <div class="col-span-2">
                                            <label for="nama" class="block mb-2 text-sm font-medium text-primary-900">Nama
                                                Lengkap</label>
                                            <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-900 focus:border-primary-900 block w-full p-2.5" placeholder="Tulis nama lengkap anda..." required>
                                        </div>
                                        <div class="col-span-2">
                                            <label for="nomor-telepon" class="block mb-2 text-sm font-medium text-primary-900">Nomor
                                                Telepon</label>
                                            <input type="number" name="telepon" id="telepon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-900 focus:border-primary-900 block w-full p-2.5" placeholder="Nomor telepon yang dapat dihubungi" required>
                                        </div>
                                        <div class="col-span-2">
                                            <label for="address" class="block mb-2 text-sm font-medium text-primary-900">Alamat
                                            </label>
                                            <textarea id="alamat" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-900 focus:border-primary-900 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-900 dark:focus:border-primary-900" placeholder="Tulis alamat anda..." id="alamat" required></textarea>
                                        </div>
                                        <div class="col-span-2">
                                            <label for="date" class="block mb-2 text-sm font-medium text-primary-900">Tanggal
                                            </label>
                                            <input type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-900 focus:border-primary-900 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-900 dark:focus:border-primary-900" placeholder="Select date" id="tanggal" required>
                                        </div>
                                    </div>
                                    <button type="submit" onsubmit="sendMessage()" id="submit-button" class="text-white bg-gradient-to-r from-[#7AD800] to-[#00A500] hover:bg-gradient-to-br mx-auto flex items-center px-28 rounded-lg py-2 justify-center shadow shadow-primary-900/30 font-medium">
                                        <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 17 17" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                        </svg>
                                        Pesan Sekarang
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <script>
                        function sendMessage() {
                            const nama = document.getElementById('nama').value;
                            const telepon = document.getElementById('telepon').value;
                            const alamat = document.getElementById('alamat').value;
                            const tanggal = document.getElementById('tanggal').value;

                            const url = `https://api.whatsapp.com/send?phone=6282311996767&text=*PEMESANAN%20JASA%20LAUNDRY%20KOPSYAH*%0A%0ANama%3A%20*${nama}*%0ATelepon%3A%20*${telepon}*%0AAlamat%3A%20*${alamat}*%0ATanggal%20%3D%20*${tanggal}*%0A%0ATerima%20kasih%20atas%20perhatian%20dan%20kerjasamanya.%20Kami%20akan%20segera%20menghubungi%20Anda%20untuk%20konfirmasi%20lebih%20lanjut.`;
                            window.open(url, '_blank');

                            return false;
                        }
                    </script>
                </div>
            </div>
        </div>
    </section>
    <hr class="h-px mx-12 bg-gray-700 border-0 my-20">
    <footer>
        <x-footer />
    </footer>


</body>

</html>