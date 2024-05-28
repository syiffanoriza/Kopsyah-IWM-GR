<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sektor Pembiayaan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar />
    <section id="pembiayaan" class="py-20">
        <div class="flex flex-wrap mb-32">
            <div class="w-full p-10 space-y-2 lg:space-y-5 items-center">
                <h4 class="text-center lg:text-lg text-sm text-gray-500 font-medium tracking-widest">Layanan Kami</h4>
                <h2
                    class="text-center text-4xl md:2/5 lg:w-3/4 xl:w-2/4 font-bold tracking-wide mx-auto md:text-5xl lg:text-6xl">
                    Sektor <span class="text-primary-800">Pembiayaan</span>
                </h2>
                <p
                    class="text-base lg:w-4/5 mx-auto text-center font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48">
                    Dalam rangka meningkatkan pelayanan kepada anggota, maka Koperasi Syariah IWM GR menyediakan
                    <span class="text-primary-900">pembiayaan konsumtif dan modal usaha mikro sesuai prinsip syariah.</span>
                </p>
                <hr class="h-0.5 w-36 lg:w-48 mx-auto bg-gray-700 mt-7">
            </div>
        </div>

        <div class="container">
            <div class="flex flex-wrap px-4 items-center justify-center gap-10">
                <div
                    class="w-full lg:w-2/5 flex flex-col items-center p-7 bg-white border border-gray-700 rounded-lg shadow">
                    <svg class="w-16 h-16 text-gray-500 p-2.5 border border-gray-700 rounded-md mb-3" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 50 50">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M31.8793 9.17387C31.4175 9.17387 30.9558 9.17387 30.4939 9.17387C30.5269 7.60014 30.4938 6.02778 30.395 4.4568C30.3349 4.46895 30.302 4.5017 30.296 4.55508C26.4897 8.38425 22.6634 12.2006 18.8173 16.0038C18.7513 16.0693 18.6854 16.0693 18.6194 16.0038C17.1845 14.5788 15.7497 13.1539 14.3148 11.7289C11.5936 14.4314 8.87229 17.1339 6.15103 19.8364C6.08503 19.9019 6.01912 19.9019 5.95312 19.8364C5.67278 19.558 5.39234 19.2795 5.112 19.0011C5.046 18.9355 5.046 18.8701 5.112 18.8045C8.17961 15.7581 11.2472 12.7117 14.3148 9.66523C15.7676 11.1243 17.2354 12.5656 18.7183 13.9892C22.2498 10.5476 25.7462 7.07536 29.2075 3.57235C29.2613 3.56646 29.2942 3.5337 29.3065 3.47408C27.7246 3.37587 26.1413 3.34311 24.5566 3.37581C24.5566 2.9172 24.5566 2.45861 24.5566 2C26.9976 2 29.4384 2 31.8793 2C31.8793 4.39129 31.8793 6.78261 31.8793 9.17387Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M24.5625 3.37358C26.1472 3.34088 27.7304 3.37364 29.3123 3.47185C29.3001 3.53148 29.2671 3.56423 29.2134 3.57013C27.6631 3.50461 26.1128 3.4391 24.5625 3.37358Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M30.3047 4.55628C30.3106 4.50291 30.3436 4.47015 30.4036 4.45801C30.5025 6.02899 30.5355 7.60134 30.5026 9.17507C30.9644 9.17507 31.4261 9.17507 31.888 9.17507C31.4125 9.27207 30.9177 9.30489 30.4036 9.27334C30.4363 7.68379 30.4032 6.11144 30.3047 4.55628Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M26.7387 10.7432C28.1901 10.7432 29.6414 10.7432 31.0928 10.7432C31.0599 14.6253 31.0929 18.4906 31.1917 22.3393C32.5445 22.3229 33.8968 22.3393 35.2489 22.3884C36.7661 24.7797 38.2835 27.171 39.8008 29.5623C38.3829 29.6114 36.9644 29.6278 35.5457 29.6114C35.513 30.3677 35.546 31.1211 35.6447 31.8717C38.6377 30.5957 41.4743 30.8741 44.1548 32.707C47.2403 35.4155 48.0154 38.6749 46.4802 42.4851C44.609 45.8795 41.7229 47.3699 37.8217 46.9564C35.9386 46.5457 34.3553 45.6285 33.0719 44.2048C24.133 44.1557 15.1941 44.1393 6.25506 44.1557C6.25506 39.3076 6.25506 34.4595 6.25506 29.6114C4.83635 29.6278 3.41793 29.6114 2 29.5623C3.51322 27.1957 5.01397 24.8207 6.50245 22.4375C7.36821 22.3408 8.24228 22.3081 9.12476 22.3393C9.22332 20.9153 9.25627 19.474 9.22371 18.0153C10.6751 18.0153 12.1264 18.0153 13.5777 18.0153C13.5777 19.4238 13.5777 20.8325 13.5777 22.241C14.0532 22.338 14.548 22.3708 15.0621 22.3393C15.0621 20.4066 15.0621 18.4739 15.0621 16.5412C16.5134 16.5412 17.9647 16.5412 19.4161 16.5412C19.4161 18.4739 19.4161 20.4066 19.4161 22.3393C19.9301 22.3708 20.4249 22.338 20.9004 22.241C20.9004 19.8497 20.9004 17.4584 20.9004 15.0671C22.3518 15.0671 23.803 15.0671 25.2544 15.0671C25.2544 17.4912 25.2544 19.9152 25.2544 22.3393C25.7492 22.3393 26.244 22.3393 26.7387 22.3393C26.7387 18.4739 26.7387 14.6085 26.7387 10.7432Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M26.7344 10.7431C28.2013 10.6453 29.6856 10.6125 31.1873 10.6449C31.1873 14.543 31.1873 18.4411 31.1873 22.3392C31.0885 18.4906 31.0555 14.6253 31.0884 10.7431C29.637 10.7431 28.1857 10.7431 26.7344 10.7431Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M35.8321 10.6468C39.0319 10.6304 42.2314 10.6468 45.4308 10.6959C46.2562 10.926 46.8334 11.4336 47.1625 12.2191C47.2285 14.5449 47.2285 16.8706 47.1625 19.1965C47.0015 19.9463 46.5562 20.4539 45.8266 20.7197C45.4662 20.8095 45.1034 20.8915 44.7381 20.9654C44.384 21.7015 44.0046 22.4221 43.6001 23.1273C43.0738 23.6843 42.4306 23.8645 41.6705 23.6678C41.1821 23.4351 40.8688 23.0585 40.7304 22.5377C40.681 21.9818 40.6645 21.4249 40.6809 20.8671C39.0314 20.8835 37.3821 20.8671 35.7332 20.8179C35 20.5813 34.4887 20.1063 34.1994 19.393C34.0375 17.0735 34.0044 14.7477 34.1004 12.4157C34.3659 11.5133 34.9432 10.9237 35.8321 10.6468Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M28.2188 12.2217C28.6806 12.2217 29.1423 12.2217 29.6041 12.2217C29.6041 15.5629 29.6041 18.9042 29.6041 22.2454C29.1423 22.2454 28.6806 22.2454 28.2188 22.2454C28.2188 18.9042 28.2188 15.5629 28.2188 12.2217Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M28.2188 12.2173C28.6942 12.1203 29.189 12.0875 29.7031 12.119C29.7031 15.5258 29.7031 18.9325 29.7031 22.3393C29.189 22.3709 28.6942 22.338 28.2188 22.2411C28.6806 22.2411 29.1423 22.2411 29.6041 22.2411C29.6041 18.8998 29.6041 15.5585 29.6041 12.2173C29.1423 12.2173 28.6806 12.2173 28.2188 12.2173Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M36.0307 12.1175C39.0985 12.1011 42.1661 12.1175 45.2335 12.1666C45.4748 12.2427 45.6563 12.3901 45.7777 12.6088C45.8437 14.7053 45.8437 16.8018 45.7777 18.8983C45.6953 19.1112 45.5469 19.2586 45.3324 19.3405C44.8344 19.3573 44.3396 19.4064 43.8481 19.4879C43.4028 20.3723 42.9575 21.2568 42.5122 22.1412C42.4122 22.2235 42.2967 22.2562 42.1659 22.2395C42.1659 21.2895 42.1659 20.3396 42.1659 19.3896C40.0875 19.406 38.0095 19.3896 35.9317 19.3405C35.8493 19.2586 35.7668 19.1767 35.6843 19.0948C35.5216 16.9416 35.4886 14.7796 35.5854 12.6088C35.6868 12.3939 35.8352 12.2301 36.0307 12.1175Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M44.2471 13.5967C44.2471 14.0553 44.2471 14.5139 44.2471 14.9725C41.8393 14.9725 39.4313 14.9725 37.0234 14.9725C37.0234 14.5139 37.0234 14.0553 37.0234 13.5967C39.4313 13.5967 41.8393 13.5967 44.2471 13.5967Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M44.2471 13.5967C44.3448 14.0689 44.3779 14.5602 44.3461 15.0708C41.8882 15.1033 39.4472 15.0706 37.0234 14.9725C39.4313 14.9725 41.8393 14.9725 44.2471 14.9725C44.2471 14.5139 44.2471 14.0553 44.2471 13.5967Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15.0624 16.5439C15.0624 18.4767 15.0624 20.4093 15.0624 22.342C14.5484 22.3735 14.0536 22.3407 13.5781 22.2437C14.0399 22.2437 14.5017 22.2437 14.9635 22.2437C14.9308 20.3267 14.9638 18.4267 15.0624 16.5439Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M19.4141 16.5439C19.5127 18.4267 19.5457 20.3267 19.513 22.2437C19.9748 22.2437 20.4366 22.2437 20.8984 22.2437C20.4229 22.3407 19.9281 22.3735 19.4141 22.342C19.4141 20.4093 19.4141 18.4767 19.4141 16.5439Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M22.375 16.5439C22.8368 16.5439 23.2985 16.5439 23.7604 16.5439C23.7604 18.4767 23.7604 20.4093 23.7604 22.342C23.2985 22.342 22.8368 22.342 22.375 22.342C22.375 20.4093 22.375 18.4767 22.375 16.5439Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M22.375 16.5425C22.8505 16.4455 23.3453 16.4127 23.8593 16.4442C23.892 18.4268 23.859 20.3922 23.7604 22.3405C23.7604 20.4078 23.7604 18.4752 23.7604 16.5425C23.2985 16.5425 22.8368 16.5425 22.375 16.5425Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M37.0234 16.5439C37.4853 16.5439 37.947 16.5439 38.4088 16.5439C38.4088 17.0026 38.4088 17.4611 38.4088 17.9198C37.947 17.9198 37.4853 17.9198 37.0234 17.9198C37.0234 17.4611 37.0234 17.0026 37.0234 16.5439Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M41.3776 16.5439C41.3776 17.0026 41.3776 17.4611 41.3776 17.9198C40.9157 17.9198 40.454 17.9198 39.9922 17.9198C39.9922 17.4611 39.9922 17.0026 39.9922 16.5439C40.454 16.5439 40.9157 16.5439 41.3776 16.5439Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M42.875 16.5439C43.3698 16.5439 43.8645 16.5439 44.3593 16.5439C44.3593 17.0026 44.3593 17.4611 44.3593 17.9198C43.8645 17.9198 43.3698 17.9198 42.875 17.9198C42.875 17.4611 42.875 17.0026 42.875 16.5439Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M37.0234 16.5425C37.4989 16.4455 37.9937 16.4127 38.5078 16.4442C38.5078 16.9683 38.5078 17.4925 38.5078 18.0166C37.9937 18.0481 37.4989 18.0153 37.0234 17.9183C37.4853 17.9183 37.947 17.9183 38.4088 17.9183C38.4088 17.4597 38.4088 17.0011 38.4088 16.5425C37.947 16.5425 37.4853 16.5425 37.0234 16.5425Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M41.3828 16.5425C40.9209 16.5425 40.4592 16.5425 39.9974 16.5425C39.9974 17.0011 39.9974 17.4597 39.9974 17.9183C40.4592 17.9183 40.9209 17.9183 41.3828 17.9183C40.9073 18.0153 40.4125 18.0481 39.8984 18.0166C39.8984 17.4925 39.8984 16.9683 39.8984 16.4442C40.4125 16.4127 40.9073 16.4455 41.3828 16.5425Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M13.578 18.0166C12.1266 18.0166 10.6753 18.0166 9.22395 18.0166C9.25651 19.4752 9.22356 20.9166 9.125 22.3405C9.125 20.8665 9.125 19.3924 9.125 17.9183C10.6267 17.886 12.1111 17.9187 13.578 18.0166Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17.9261 22.3402C17.9261 20.8989 17.9261 19.4576 17.9261 18.0162C17.4643 18.0162 17.0026 18.0162 16.5408 18.0162C16.5408 19.4576 16.5408 20.8989 16.5408 22.3402C16.4422 20.8834 16.4093 19.4093 16.4418 17.918C16.9695 17.918 17.4974 17.918 18.0251 17.918C18.0577 19.4093 18.0247 20.8834 17.9261 22.3402Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17.9322 22.3435C17.4704 22.3435 17.0087 22.3435 16.5469 22.3435C16.5469 20.9021 16.5469 19.4609 16.5469 18.0195C17.0087 18.0195 17.4704 18.0195 17.9322 18.0195C17.9322 19.4609 17.9322 20.9021 17.9322 22.3435Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M10.6094 19.3916C11.1041 19.3916 11.5989 19.3916 12.0937 19.3916C12.0937 20.3743 12.0937 21.357 12.0937 22.3398C11.5989 22.3398 11.1041 22.3398 10.6094 22.3398C10.6094 21.357 10.6094 20.3743 10.6094 19.3916Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7.35156 23.8159C11.4584 23.6851 15.5815 23.6851 19.7209 23.8159C19.7087 23.8755 19.6757 23.9082 19.622 23.9141C15.5487 23.816 11.4585 23.7832 7.35156 23.8159Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M34.4631 23.8159C30.3562 23.7832 26.266 23.816 22.1927 23.9141C22.139 23.9082 22.106 23.8755 22.0938 23.8159C26.2331 23.6851 30.3563 23.6851 34.4631 23.8159Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7.34366 23.8159C11.4506 23.7833 15.5408 23.816 19.6141 23.9142C18.9621 25.3239 18.2694 26.7161 17.536 28.0908C13.248 28.1563 8.95989 28.1563 4.67188 28.0908C5.57593 26.6713 6.46652 25.2464 7.34366 23.8159Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M34.4657 23.8159C35.3429 25.2464 36.2335 26.6713 37.1375 28.0908C32.8495 28.1563 28.5614 28.1563 24.2734 28.0908C23.54 26.7161 22.8473 25.3239 22.1953 23.9142C26.2686 23.816 30.3588 23.7833 34.4657 23.8159Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M20.1146 42.6826C20.1474 37.2282 20.1145 31.7905 20.0156 26.3694C20.0436 26.2919 20.0931 26.2263 20.1641 26.1729C20.2464 31.6926 20.2299 37.1958 20.1146 42.6826Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M21.7858 26.3694C21.6869 31.7905 21.654 37.2282 21.6868 42.6826C21.5716 37.1958 21.555 31.6926 21.6374 26.1729C21.7083 26.2263 21.7578 26.2919 21.7858 26.3694Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M20.0126 26.3701C20.1115 31.7912 20.1444 37.2289 20.1116 42.6833C15.9884 42.6833 11.8653 42.6833 7.74219 42.6833C7.74219 38.3266 7.74219 33.9698 7.74219 29.6131C11.3048 29.6295 14.8671 29.6131 18.4293 29.564C18.9977 28.5169 19.5255 27.4522 20.0126 26.3701Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M21.7831 26.3701C22.2702 27.4522 22.798 28.5169 23.3664 29.564C26.9286 29.6131 30.491 29.6295 34.0535 29.6131C34.0701 30.7273 34.0535 31.8411 34.0041 32.9544C31.5177 35.1873 30.6601 37.9389 31.4312 41.2092C31.6029 41.6717 31.7844 42.1303 31.9755 42.585C28.5457 42.6833 25.1152 42.716 21.6842 42.6833C21.6513 37.2289 21.6843 31.7912 21.7831 26.3701Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M38.4216 32.4606C42.2748 32.3974 44.6992 34.199 45.6948 37.8656C46.0267 42.1207 44.0971 44.6922 39.906 45.5799C37.1514 45.7272 35.0239 44.6626 33.5234 42.3861C31.9684 39.3515 32.3807 36.6163 34.7603 34.1804C35.836 33.2857 37.0565 32.7124 38.4216 32.4606Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M38.5103 33.9385C38.9722 33.9385 39.4339 33.9385 39.8957 33.9385C39.8957 34.4298 39.8957 34.9212 39.8957 35.4126C40.6544 35.4126 41.413 35.4126 42.1717 35.4126C42.1717 36.1332 42.1717 36.8539 42.1717 37.5745C41.6769 37.5745 41.1821 37.5745 40.6873 37.5745C40.6873 37.3453 40.6873 37.1159 40.6873 36.8866C39.8291 36.8703 38.9715 36.8866 38.1145 36.9358C37.5628 37.4384 37.5958 37.897 38.2135 38.3116C39.0785 38.3203 39.9362 38.3859 40.7863 38.5081C42.1337 39.2964 42.4471 40.3937 41.7264 41.8002C41.2384 42.3456 40.6282 42.6404 39.8957 42.6847C39.8957 43.1761 39.8957 43.6674 39.8957 44.1588C39.4339 44.1588 38.9722 44.1588 38.5103 44.1588C38.5103 43.6674 38.5103 43.1761 38.5103 42.6847C37.7517 42.6847 36.9931 42.6847 36.2344 42.6847C36.2344 41.9641 36.2344 41.2433 36.2344 40.5227C36.7291 40.5227 37.2239 40.5227 37.7187 40.5227C37.7187 40.752 37.7187 40.9813 37.7187 41.2106C38.544 41.2269 39.3686 41.2106 40.1926 41.1615C40.876 40.6558 40.843 40.1971 40.0936 39.7857C39.3349 39.7529 38.5763 39.7201 37.8177 39.6874C36.332 38.9301 35.9527 37.8 36.6797 36.297C37.1423 35.6987 37.7525 35.4039 38.5103 35.4126C38.5103 34.9212 38.5103 34.4298 38.5103 33.9385Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9.22782 36.8857C9.22782 37.3444 9.22782 37.8029 9.22782 38.2616C11.6357 38.2616 14.0437 38.2616 16.4515 38.2616C16.4515 37.8029 16.4515 37.3444 16.4515 36.8857C16.5492 37.3579 16.5823 37.8493 16.5505 38.3598C14.0766 38.3598 11.6027 38.3598 9.12887 38.3598C9.0971 37.8493 9.13015 37.3579 9.22782 36.8857Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9.22656 36.8857C11.6344 36.8857 14.0424 36.8857 16.4503 36.8857C16.4503 37.3444 16.4503 37.8029 16.4503 38.2616C14.0424 38.2616 11.6344 38.2616 9.22656 38.2616C9.22656 37.8029 9.22656 37.3444 9.22656 36.8857Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M13.5819 39.8335C13.1201 39.8335 12.6584 39.8335 12.1966 39.8335C12.1966 40.2921 12.1966 40.7507 12.1966 41.2093C12.0989 40.7371 12.0659 40.2458 12.0976 39.7352C12.6117 39.7037 13.1065 39.7365 13.5819 39.8335Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15.0625 39.8335C15.538 39.7365 16.0328 39.7037 16.5468 39.7352C16.5786 40.2458 16.5455 40.7371 16.4479 41.2093C16.4479 40.7507 16.4479 40.2921 16.4479 39.8335C15.986 39.8335 15.5243 39.8335 15.0625 39.8335Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M10.6132 41.2104C10.6132 40.7518 10.6132 40.2932 10.6132 39.8346C10.1514 39.8346 9.68964 39.8346 9.22782 39.8346C9.22782 40.2932 9.22782 40.7518 9.22782 41.2104C9.13015 40.7382 9.0971 40.2469 9.12887 39.7363C9.65659 39.7363 10.1844 39.7363 10.7121 39.7363C10.7439 40.2469 10.7109 40.7382 10.6132 41.2104Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M10.6119 41.2088C10.1501 41.2088 9.68839 41.2088 9.22656 41.2088C9.22656 40.7502 9.22656 40.2916 9.22656 39.833C9.68839 39.833 10.1501 39.833 10.6119 39.833C10.6119 40.2916 10.6119 40.7502 10.6119 41.2088Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M13.5807 39.833C13.5807 40.2916 13.5807 40.7502 13.5807 41.2088C13.1189 41.2088 12.6571 41.2088 12.1953 41.2088C12.1953 40.7502 12.1953 40.2916 12.1953 39.833C12.6571 39.833 13.1189 39.833 13.5807 39.833Z"
                            fill="#00A500" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15.0625 39.833C15.5243 39.833 15.986 39.833 16.4479 39.833C16.4479 40.2916 16.4479 40.7502 16.4479 41.2088C15.986 41.2088 15.5243 41.2088 15.0625 41.2088C15.0625 40.7502 15.0625 40.2916 15.0625 39.833Z"
                            fill="#00A500" />

                    </svg>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-medium tracking-tight text-gray-900">Pembiayaan <span
                                class="text-primary-900">Konsumtif</span>
                        </h5>
                        <hr class="h-0.5 w-32 mx-auto bg-gray-700">
                    </a>
                    <p class="my-3 font-normal text-center text-gray-500 dark:text-gray-400">Dalam rangka meningkatkan
                        pelayanan kepada anggota, maka kopsyah IWM GR perlu mempertimbangkan produk pembiayaan sebagai
                        upaya memenuhi kebutuhan anggota. Pembiayaan Konsumtif menggunakan <span class="text-primary-900"> akad Murabahah/Ijarah</span></p>
                    <a
                        class="text-white bg-gradient-to-r from-[#7AD800] to-[#00A500] hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-primary-300 shadow-md shadow-primary-900/30 font-medium rounded-lg text-base px-5 py-2 text-center mt-4 me-2 mb-2 tracking-wide">Lihat
                        Selengkapnya
                    </a>
                </div>
                <div
                    class="w-full lg:w-2/5 flex flex-col items-center p-7 bg-white border border-gray-700 rounded-lg shadow">
                    <svg class="w-16 h-16 text-gray-500 p-2.5 border border-gray-700 rounded-md mb-3"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 50 50">
                        <path
                            d="M41.1547 46.146V46.9355H41.9442V46.146H41.1547ZM41.9442 34.6122C41.9442 34.1761 41.5907 33.8227 41.1547 33.8227C40.7186 33.8227 40.3652 34.1761 40.3652 34.6122H41.9442ZM4.34331 13.874V42.8564H5.92231V13.874H4.34331ZM8.4224 46.9355H41.1547V45.3565H8.4224V46.9355ZM41.9442 46.146V34.6122H40.3652V46.146H41.9442ZM4.34331 42.8564C4.34331 45.1092 6.16958 46.9355 8.4224 46.9355V45.3565C7.04164 45.3565 5.92231 44.2371 5.92231 42.8564H4.34331Z"
                            fill="#00A500" />
                        <path
                            d="M8.39062 28.5735V9.30176H40.3331V31.2052H11.0223C9.56886 31.2052 8.39062 30.027 8.39062 28.5735Z"
                            fill="white" stroke="#00A500" stroke-width="1.579" />
                        <path
                            d="M35.4102 9.36542H42.8818C43.0295 9.36542 43.1491 9.48509 43.1491 9.63272V11.4159C43.1491 12.79 42.4204 14.0611 41.2344 14.7553C40.0271 15.462 38.5323 15.462 37.3249 14.7553L37.2269 14.6979C36.1017 14.0393 35.4102 12.8332 35.4102 11.5293V9.36542ZM14.7289 9.36542H22.4679V11.4159C22.4679 12.79 21.7391 14.0611 20.5532 14.7553C19.3458 15.462 17.851 15.462 16.6436 14.7553L16.5457 14.6979C15.4204 14.0393 14.7289 12.8332 14.7289 11.5293V9.36542ZM24.9644 9.36542H28.8338H32.7033V11.4159C32.7033 12.79 31.9745 14.0611 30.7886 14.7553C29.5813 15.462 28.0864 15.462 26.8791 14.7553L26.7811 14.6979C25.6559 14.0393 24.9644 12.8332 24.9644 11.5293V9.36542ZM4.6155 11.5298V9.36593H12.3545V11.4164C12.3545 12.7905 11.6257 14.0616 10.4398 14.7558C9.23239 15.4625 7.73756 15.4625 6.5302 14.7558L6.43227 14.6985C5.30701 14.0398 4.6155 12.8337 4.6155 11.5298ZM4.64283 6.76436L9.19826 2.7895H38.2115L42.8035 6.76365C42.9907 6.92565 42.8761 7.23308 42.6285 7.23308H4.81857C4.57157 7.23308 4.45671 6.92676 4.64283 6.76436Z"
                            fill="white" stroke="#00A500" stroke-width="1.579" />
                        <circle cx="39.499" cy="36.6026" r="9.60797" fill="white" stroke="#00A500"
                            stroke-width="1.579" />
                        <path
                            d="M39.9697 41.8457C39.2812 41.8457 38.6508 41.7197 38.0786 41.4675C37.5064 41.2057 37.0215 40.8517 36.6239 40.4056C36.2263 39.9595 35.9402 39.46 35.7656 38.9072L37.0021 38.3981C37.264 39.0963 37.6519 39.6346 38.1659 40.0128C38.6896 40.3813 39.3006 40.5656 39.9988 40.5656C40.4255 40.5656 40.7989 40.4977 41.1189 40.3619C41.439 40.2262 41.6863 40.037 41.8608 39.7946C42.0451 39.5424 42.1372 39.2515 42.1372 38.9218C42.1372 38.466 42.0063 38.1071 41.7445 37.8453C41.4923 37.5737 41.1189 37.3701 40.6243 37.2343L38.6314 36.6233C37.8459 36.3809 37.2446 35.9978 36.8276 35.4741C36.4105 34.9504 36.202 34.3491 36.202 33.6703C36.202 33.0787 36.3427 32.5599 36.6239 32.1138C36.9148 31.6579 37.3125 31.304 37.8168 31.0518C38.3308 30.79 38.9126 30.659 39.5624 30.659C40.2122 30.659 40.7989 30.7754 41.3226 31.0082C41.856 31.2409 42.3069 31.5561 42.6755 31.9537C43.044 32.3417 43.3155 32.7878 43.4901 33.2921L42.2682 33.8012C42.0354 33.1902 41.6863 32.7296 41.2208 32.4192C40.7553 32.0992 40.2073 31.9392 39.577 31.9392C39.189 31.9392 38.8448 32.0071 38.5441 32.1428C38.2532 32.2689 38.0253 32.458 37.8604 32.7102C37.7052 32.9526 37.6276 33.2436 37.6276 33.583C37.6276 33.9806 37.7537 34.3346 38.0059 34.6449C38.258 34.9553 38.6411 35.1929 39.1551 35.3577L40.9735 35.896C41.8269 36.1578 42.4718 36.5312 42.9082 37.0161C43.3446 37.501 43.5628 38.1023 43.5628 38.8199C43.5628 39.4115 43.4077 39.9352 43.0973 40.391C42.7967 40.8468 42.3748 41.2057 41.8317 41.4675C41.2984 41.7197 40.6777 41.8457 39.9697 41.8457ZM39.3151 43.1259V29.3789H40.4061V43.1259H39.3151Z"
                            fill="#00A500" />

                    </svg>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-medium text-center tracking-tight text-gray-900 dark:text-white">
                            Pembiayaan
                            <span class="text-primary-900">Modal Usaha </span>Mikro
                        </h5>
                        <hr class="h-0.5 w-32 mx-auto bg-gray-700">
                    </a>

                    <p class="my-3 font-normal text-center text-gray-500 dark:text-gray-400">Dalam rangka meningkatkan
                        pelayanan kepada anggota, maka Kopsyah IWM GR perlu mempertimbangkan produk pembiayaan produktif
                        sebagai upaya meningkatkan perekonomian sektor UMKM dengan cara memberikan fasilitas pembiayaan
                        modal usaha.</p>
                    <a
                        class="text-white bg-gradient-to-r from-[#7AD800] to-[#00A500] hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-primary-300 shadow-md shadow-primary-900/30 font-medium rounded-lg text-base px-5 py-2 text-center my-4 me-2 mb-2 tracking-wide">Lihat
                        Selengkapnya</a>
                </div>
            </div>
    </section>
    <hr class="h-px mx-12 bg-gray-700 border-0 my-20">
    <footer>
        <x-footer />
    </footer>
</body>

</html>
