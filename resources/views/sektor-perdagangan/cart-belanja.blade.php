<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keranjang Belanja</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://hammerjs.github.io/dist/hammer.min.js"></script>

<body>
    <x-navbar />
    <section id="cart-body">
        <div class="container my-10">
            <div class="w-full">
                <div class="flex justify-start items-center">
                    <a href="belanja"
                        class="px-3 tracking-wide hover:shadow-lg py-2 text-xs font-medium text-center inline-flex items-center text-white bg-primary-700 rounded-full hover:bg-primary-800 ">
                        <svg class="w-3 h-3 text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 5H1m0 0 4 4M1 5l4-4" />
                        </svg>
                        Kembali Belanja
                    </a>
                </div>
                <hr class="bg-gray-900 h-px mb-5 mt-5">
                <div class="flex flex-col md:flex-row w-full h-full">
                    <!-- My Cart -->
                    <div class="w-full flex flex-col h-fit gap-3 p-4 ">
                        <div class="flex w-full justify-between">
                            <p class="text-primary-900 text-xl font-extrabold">My cart</p>
                            <p id="jumlah-item"
                                class="py-1 px-2 text-center text-sm rounded-lg border-primary-900 border">3</p>
                        </div>
                        <div class="overflow-y-auto py-5 border rounded-sm p-2 space-y-5 h-80">
                            <!-- Product -->
                            <div
                                class="flex flex-col p-4 text-lg font-semibold shadow-md border border-primary-300 rounded-lg">
                                <div class="flex flex-col mb-2 md:flex-row gap-3 justify-between">
                                    <!-- Product Information -->
                                    <div class="flex flex-row gap-6 w-full">
                                        <div class="w-48 h-full">
                                            <img class="w-full h-full rounded-md"
                                                src="https://static.netshoes.com.br/produtos/tenis-adidas-coreracer-masculino/09/NQQ-4635-309/NQQ-4635-309_zoom1.jpg?ts=1675445414&ims=544x">
                                        </div>
                                        <div class="flex justify-between flex-col gap-1 w-full">
                                            <div class="flex flex-row justify-between border">
                                                <div class="flex-col flex border">
                                                    <p class="text-lg text-gray-800 font-semibold">Sabun Lervia</p>
                                                    <p class="text-xs text-gray-600 font-semibold">Color: <span
                                                            class="font-normal">Black + Zinc</span></p>
                                                    <p class="text-xs text-gray-600 font-semibold">Size: <span
                                                            class="font-normal">42</span></p>
                                                </div>
                                                 <!-- Remove Product Icon -->
                                                 <div class="mx-2">
                                                    <button class="text-red-600">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 448 512"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="flex justify-between w-full">
                                                <!-- Price Information -->
                                                <div class="self-center text-center">
                                                    {{-- <p class="text-gray-600 font-normal text-sm line-through">Rp.50.000
                                                           <span class="text-emerald-500 ml-2">(-50% OFF)</span>
                                                       </p> --}}
                                                    <div class="flex justify-center">
                                                        <p class="text-gray-600 font-bold mr-1 text-sm">Rp</p>
                                                        <p class="text-primary-900 text-xl font-semibold">50.000
                                                        </p>
                                                    </div>

                                                </div>
                                                <!-- Product Quantity -->
                                                <div
                                                    class="flex sm:flex-col flex-row rounded-full bg-white px-1 py-1 sm:py-1 shadow-md self-center gap-1">
                                                    <button
                                                        class="w-5 h-5 self-center border border-primary-300 rounded-full text-white focus:outline-none bg-primary-800 hover:bg-primary-900">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="" stroke="currentColor" stroke-width="1"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M12 5v14M5 12h14" />
                                                        </svg>
                                                    </button>
                                                    <input type="text" readonly="readonly" value="1"
                                                        class="w-8 h-8 text-center text-gray-900 text-sm outline-none border border-white rounded-sm">

                                                    <button
                                                        class="w-5 h-5 self-center rounded-full border text-white hover:bg-primary-900 bg-primary-800 border-primary-300">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="1"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M5 12h14" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Purchase Resume -->
                    <div class="flex xs:fixed xs:bottom-0 flex-col w-full md:w-2/4 h-fit gap-4 p-4">
                        <p class="text-primary-900 text-xl font-extrabold">Purchase Resume</p>
                        <div class="flex flex-col p-4 gap-4 text-lg font-semibold shadow-md border rounded-sm">
                            <div class="flex flex-row justify-between">
                                <p class="md:text-lg text-gray-600">Subtotal (2 Items)</p>
                                <p class="text-end font-bold">Rp.50.000</p>
                            </div>
                            <hr class="bg-gray-200 h-0.5">
                            <div class="flex flex-row justify-between">
                                <p class="text-gray-600">Freight</p>
                                <div>
                                    <p class="text-end font-bold">$3.90</p>
                                    <p class="text-gray-600 text-sm font-normal">Arrives on Jul 16</p>
                                </div>
                            </div>
                            <hr class="bg-gray-200 h-0.5">
                            <div class="flex flex-row justify-between">
                                <p class="text-gray-600">Discount Coupon</p>
                                <a class="text-gray-500 text-base underline" href="#">Add</a>
                            </div>
                            <hr class="bg-gray-200 h-0.5">
                            <div class="flex flex-row justify-between">
                                <p class="text-gray-600">Total</p>
                                <div>
                                    <p class="text-end font-bold">Rp.50.000</p>
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <button
                                    class="transition-colors text-sm bg-primary-800 hover:bg-primary-900 p-2 rounded-sm w-full text-white text-hover shadow-md">
                                    Checkout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
