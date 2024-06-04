<div role="button" data-modal-target="add-{{ $id }}-to-cart" data-modal-toggle="add-{{ $id }}-to-cart"
    class="w-full max-w-sm bg-white border border-gray-900 rounded-lg transition duration-500 ease-in-out hover:shadow-lg hover:border-primary-900 hover:shadow-primary-100 pt-3 px-2.5">
    <div class="relative pb-2">
        <a href="#">
            <img class="rounded-lg border border-gray-900"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOw-pyuBrtGBubeZssKxn-4cwYi-cavhu7og&s" alt="product image" />
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
    <div class="relative p-4 w-full max-w-lg max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Tambah {{ $produk }} ke Keranjang
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
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
            <div class="p-4 md:p-5">
                <form class="flex flex-col items-center text-center">
                    <div class="flex items-center justify-center w-full">
                        <button type="button" id="decrement-button"
                            data-input-counter-decrement="quantity-{{ $id }}"
                            class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h16" />
                            </svg>
                        </button>
                        <input type="text" id="quantity-{{ $id }}" data-input-counter
                            aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-primary-500 focus:border-primary-500 block w-full"
                            placeholder="Jumlah Barang" required />
                        <button type="button" id="increment-button"
                            data-input-counter-increment="quantity-{{ $id }}"
                            class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="add-{{ $id }}-to-cart" type="button"
                    class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tambah</button>
                <button data-modal-hide="add-{{ $id }}-to-cart" type="button"
                    class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Batal</button>
            </div>
        </div>
    </div>
</div>
