<button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-primary-800 font-semibold text-sm text-center hover:text-primary-900" type="button">
    Klik Disini
</button>

<!-- Main modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">

        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-primary-800">
                    Testimonial Form
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <form class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-primary-800">Nama Lengkap</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tulis nama lengkap anda" required="">
                    </div>

                    <div class="col-span-2 sm:col-span-2">
                        <label for="category" class="block mb-2 text-sm font-medium text-primary-800">Peran</label>
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                            <option disabled selected hidden>Pilih Peran</option>
                            <option value="pelanggan">Pelanggan Kopsyah IWM</option>
                            <option value="anggota">Anggota Kopsyah IWM</option>
                            <option value="wakil">Wakil Ketua Kopsyah IWM</option>
                            <option value="ketua">Ketua Kopsyah IWM</option>
                        </select>
                    </div>

                    <div class="col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-primary-800" required="">Testimonial</label>
                        <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white focus:ring-primary-500 focus:border-primary-500" placeholder="Tulis testimoni anda..." required></textarea>
                        <p id="charLimitMessage" class="text-sm text-red-500 hidden">Jumlah karakter melebihi maksimum.</p>
                    </div>
                </div>
                <button type="submit" id="submit-button" class="my-5 justify-center mx-auto text-white bg-gradient-to-r from-[#7AD800] to-[#00A500] hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-primary-300 shadow shadow-primary-900/30 font-medium rounded-lg flex items-center bg-primary-900 hover:bg-primary-800 text-sm px-28 py-2.5 text-center w-full">
                    Kirim Testimoni
                </button>
            </form>
        </div>
    </div>
</div>