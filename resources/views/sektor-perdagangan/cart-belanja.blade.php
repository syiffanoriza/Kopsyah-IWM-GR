<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keranjang Belanja</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @media (max-width: 768px) {
            .sticky-sidebar {
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                z-index: 10;
                background: white;
            }
        }
        @media (min-width: 769px) {
            .sticky-sidebar {
                position: sticky;
                top: 20px;
            }
        }
    </style>
</head>
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
                <div class="h-screen py-8">
                    <h1 class="text-2xl font-semibold mb-4 text-primary-900">Shopping Cart</h1>
                    <div class="flex flex-col md:flex-row gap-4">
                        <x-cart-items/>     
                        {{-- Purchase Resume --}}
                        <div class="md:w-2/5 w-full sticky-sidebar">
                            <div class="bg-white rounded-lg shadow-md p-4 border border-primary-900">
                                <div class="flex justify-between mb-2">
                                    <span class="font-semibold">Subtotal</span>
                                    <span class="font-medium text-primary-900">Rp50.000</span>
                                </div>
                                {{-- Go to Checkout Page --}}
                                <button type="submit" 
                                    class="bg-primary-800 hover:bg-primary-900 text-white py-2 px-4 rounded-lg mt-4 w-full">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>

</html>
