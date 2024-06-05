<div role="button" data-modal-target="add-{{ $id }}-to-cart" data-modal-toggle="add-{{ $id }}-to-cart"
    class="w-full max-w-sm bg-white border border-gray-900 rounded-lg transition duration-500 ease-in-out hover:shadow-lg hover:border-primary-900 hover:shadow-primary-100 pt-3 px-2.5">
    <div class="relative pb-2">
        <a href="#">
            <div class="md:h-60 w-full bg-gray-200 rounded-lg overflow-hidden">
                <img class="w-full h-full object-cover" src="https://scotturb.com/wp-content/uploads/2016/11/product-placeholder.jpg" alt="product image" />
            </div>
        </a>
    </div>

    <div class="px-1 pb-3 md:pb-4">
        <a href="#">
            <h5 class="md:text-xl text-lg font-normal tracking-tight mb-1 md:mb-2 text-gray-900">
                {{ $produk }}
            </h5>
        </a>
        <div class="flex items-end justify-between">
            <div class="flex items-center space-x-0.5">
                <span class="font-normal text-gray-600 text-sm md:text-base rounded">Rp</span>
                <p class="text-primary-900 text-base md:text-xl font-medium">{{ $harga }}</p>
            </div>
        </div>
    </div>
</div>

<!-- Main modal -->
<div id="add-{{ $id }}-to-cart" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-xs max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-end px-4 md:px-5 pt-4 md:pt-5 rounded-t dark:border-gray-600">
                {{-- <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Tambah {{ $produk }} ke Keranjang
                </h3> --}}
                <button type="button"
                    class="text-primary-700 bg-transparent hover:bg-primary-200 hover:text-primary-900 rounded-md text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="add-{{ $id }}-to-cart">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="pb-4 pt-2 px-4 md:pb-5 md:px-5">
                <div class="items-center flex mb-5 justify-center">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.7867 38.9375C14.581 38.9375 13.5905 37.9575 13.5905 36.75C13.5905 35.5425 14.5617 34.5625 15.7692 34.5625H15.7867C16.9942 34.5625 17.9742 35.5425 17.9742 36.75C17.9742 37.9575 16.9942 38.9375 15.7867 38.9375ZM31.9742 36.75C31.9742 35.5425 30.9942 34.5625 29.7867 34.5625H29.7692C28.5617 34.5625 27.5905 35.5425 27.5905 36.75C27.5905 37.9575 28.5792 38.9375 29.7867 38.9375C30.9942 38.9375 31.9742 37.9575 31.9742 36.75ZM36.6799 14.63L34.9124 25.445C34.4574 27.93 33.425 29.75 29.75 29.75H15.2775C13.5275 29.75 12.0575 28.4725 11.8125 26.74L9.18579 8.456C9.02829 7.3535 8.11827 6.5625 7.01752 6.5625H6.5625C5.838 6.5625 5.25 5.9745 5.25 5.25C5.25 4.5255 5.838 3.9375 6.5625 3.9375H7.01752C9.43777 3.9375 11.4416 5.677 11.7828 8.0745L12.1485 10.5H33.25C35.42 10.5 37.0824 12.4775 36.6799 14.63ZM28.4375 20.125C28.4375 19.4005 27.8495 18.8125 27.125 18.8125H24.9375V16.625C24.9375 15.9005 24.3495 15.3125 23.625 15.3125C22.9005 15.3125 22.3125 15.9005 22.3125 16.625V18.8125H20.125C19.4005 18.8125 18.8125 19.4005 18.8125 20.125C18.8125 20.8495 19.4005 21.4375 20.125 21.4375H22.3125V23.625C22.3125 24.3495 22.9005 24.9375 23.625 24.9375C24.3495 24.9375 24.9375 24.3495 24.9375 23.625V21.4375H27.125C27.8495 21.4375 28.4375 20.8495 28.4375 20.125Z" fill="#00A500"/>
                        </svg>
                        
                </div>
                <form class="flex flex-col items-center text-center">
                    <div class="flex items-center justify-center w-full">
                        <button type="button" id="decrement-button"
                            data-input-counter-decrement="quantity-{{ $id }}"
                            class="bg-white hover:bg-primary-200 border border-e-0 border-primary-900 rounded-s-md p-3 h-11 focus:outline-none">
                            <svg class="w-3 h-3 text-primary-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h16" />
                            </svg>
                        </button>
                        <input type="text" id="quantity-{{ $id }}" data-input-counter
                            aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border-x-0 border-primary-900 h-11 text-center text-gray-900 text-sm focus:bg-primary-100 focus:ring-primary-500 focus:border-primary-500 block w-1/3"
                            placeholder="Jumlah" required />
                        <button type="button" id="increment-button"
                            data-input-counter-increment="quantity-{{ $id }}"
                            class="bg-white hover:bg-primary-200 border border-s-0 border-primary-900 rounded-e-md p-3 h-11 focus:outline-none">
                            <svg class="w-3 h-3 text-primary-900" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center pb-4 pt-2 px-4 md:pb-5 md:px-5 rounded-b">
                <button data-modal-hide="add-{{ $id }}-to-cart" type="button"
                    class="text-white bg-gradient-to-r from-[#7AD800] hover:shadow-md to-[#00A500] hover:bg-gradient-to-br w-full focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tambah ke Keranjang</button>
            </div>
        </div>
    </div>
</div>

