<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simpanan Umroh - Sektor Simpanan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<script>
    function validateInput() {
        const input = document.getElementById('nomor-anggota');
        const value = input.value;
        const errorMessage = document.getElementById('error-message');
        const submitButton = document.getElementById('submit-button');

        if (/^\d{8}$/.test(value)) {
            errorMessage.textContent = '';
            submitButton.disabled = false;
        } else {
            errorMessage.textContent = '*Nomor anggota harus terdiri dari 8 digit.';
            submitButton.disabled = true;
        }
    }
</script>


<body>
    <x-navbar />
    <section id="simpanan-umroh" class="py-20">
        <div class="flex flex-wrap mb-16">
            <div class="w-full p-10 space-y-2 lg:space-y-5 items-center">
                <h4 class="text-center lg:text-lg text-sm text-gray-500 font-medium tracking-widest">Sektor Simpanan
                </h4>
                <h2
                    class="text-center text-4xl md:2/5 lg:w-3/4 xl:w-2/4 font-bold tracking-wide mx-auto md:text-5xl lg:text-6xl">
                    Simpanan <span class="text-primary-800">Umroh</span>
                </h2>
                <p
                    class="text-base lg:w-4/5 mx-auto text-center font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48">
                    Simpanan Umroh adalah salah satu produk tabungan simpanan yang diperuntukan bagi Anggota dengan
                    tujuan menunaikan ibadah Umroh pada waktu yang telah di tentukan.
                </p>
                <p
                    class="text-base lg:w-4/5 mx-auto text-center font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48">
                    Menggunakan<span class="text-primary-800"> Akad Wadi'ah Yad Dhamanah</span> di mana penerima amanah,
                    dengan atau
                    tanpa izin pemiliknya, dapat memanfaatkan barang yang disimpan dan harus <span
                        class="text-primary-800"> bertanggung jawab atas kehilangan atau kerusakan</span> barang
                    tersebut.
                </p>
                <hr class="h-0.5 w-36 lg:w-48 mx-auto bg-gray-700 mt-7">
            </div>
        </div>
        <div class="container">
            <div class="flex flex-wrap px-4 justify-center">
                <div class="p-7 max-w-2/3 bg-white border border-gray-700 rounded-lg shadow-lg shadow-primary-300/40">
                    <div class="flex flex-col items-start">
                        <div class="flex items-center gap-4">
                            <svg class="w-16 h-16 text-gray-500 p-2.5 mb-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 50 50">
                                <path
                                    d="M26.0417 4.6875H23.9583C21.0229 4.6875 19.2708 6.43958 19.2708 9.375V40.625C19.2708 43.5604 21.0229 45.3125 23.9583 45.3125H26.0417C28.9771 45.3125 30.7292 43.5604 30.7292 40.625V9.375C30.7292 6.43958 28.9771 4.6875 26.0417 4.6875ZM27.6042 40.625C27.6042 41.8521 27.2687 42.1875 26.0417 42.1875H23.9583C22.7312 42.1875 22.3958 41.8521 22.3958 40.625V9.375C22.3958 8.14792 22.7312 7.8125 23.9583 7.8125H26.0417C27.2687 7.8125 27.6042 8.14792 27.6042 9.375V40.625ZM40.625 15.1042H38.5417C35.6062 15.1042 33.8542 16.8562 33.8542 19.7917V40.625C33.8542 43.5604 35.6062 45.3125 38.5417 45.3125H40.625C43.5604 45.3125 45.3125 43.5604 45.3125 40.625V19.7917C45.3125 16.8562 43.5604 15.1042 40.625 15.1042ZM42.1875 40.625C42.1875 41.8521 41.8521 42.1875 40.625 42.1875H38.5417C37.3146 42.1875 36.9792 41.8521 36.9792 40.625V19.7917C36.9792 18.5646 37.3146 18.2292 38.5417 18.2292H40.625C41.8521 18.2292 42.1875 18.5646 42.1875 19.7917V40.625ZM11.4583 23.4375H9.375C6.43958 23.4375 4.6875 25.1896 4.6875 28.125V40.625C4.6875 43.5604 6.43958 45.3125 9.375 45.3125H11.4583C14.3937 45.3125 16.1458 43.5604 16.1458 40.625V28.125C16.1458 25.1896 14.3937 23.4375 11.4583 23.4375ZM13.0208 40.625C13.0208 41.8521 12.6854 42.1875 11.4583 42.1875H9.375C8.14792 42.1875 7.8125 41.8521 7.8125 40.625V28.125C7.8125 26.8979 8.14792 26.5625 9.375 26.5625H11.4583C12.6854 26.5625 13.0208 26.8979 13.0208 28.125V40.625Z"
                                    fill="#00A500" />
                            </svg>

                            <h5 class="mb-2 lg:text-3xl font-medium tracking-tight text-gray-900 text-2xl">Manfaat &
                                <span class="text-primary-900">Keuntungan</span>
                            </h5>
                        </div>
                        <hr class="h-0.5 w-full bg-gray-700">
                        <ul class="my-3 max-w-md space-y-1 text-gray-500 list-inside">
                            <li class="flex items-center">
                                <svg class="w-3.5 h-3.5 me-2 text-primary-900 flex-shrink-0"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                Mengumpulkan biaya umroh lebih ringan
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3.5 h-3.5 me-2 text-primary-900 flex-shrink-0"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                Dana tersimpan dengan aman
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3.5 h-3.5 me-2 text-primary-900  flex-shrink-0"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                Setoran lebih fleksibel
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3.5 h-3.5 me-2 text-primary-900 flex-shrink-0"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                Kepastian keberangkatan
                            </li>
                        </ul>
                    </div>
                    <div class="items-center justify-center flex">
                        <!-- Modal toggle -->
                        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button"
                            class="flex text-white bg-gradient-to-r justify-center items-center from-[#7AD800] to-[#00A500] hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-primary-300 shadow shadow-primary-900/30 font-normal md:font-medium rounded-lg text-base px-10 lg:px-32 py-2.5 text-center mt-5 me-2 mb-2 tracking-wide"><svg
                                xmlns="http://www.w3.org/2000/svg" class="w-5 mr-2 text-white" fill="currentColor"
                                viewBox="0 0 18 18">
                                <path
                                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg></span>
                            Mulai Menyimpan
                        </button>
                        <!-- Main modal -->
                        <div id="crud-modal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center p-4 md:p-5 border-b border-primary-900 rounded-t">
                                        <h3 class="text-2xl font-semibold text-gray-700">
                                            Mulai <span class="text-primary-900">Simpanan Umroh</span>
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-primary-200 hover:text-primary-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                            data-modal-toggle="crud-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form class="pb-4">
                                        <div
                                            class=" h-64 overflow-y-auto border rounded-lg m-5 border-primary-900 px-4 pt-2 grid grid-cols-2">
                                            <div class="col-span-2">
                                                <label for="nomor-anggota"
                                                    class="block mb-1 text-sm font-medium text-primary-900">Nomor
                                                    Anggota</label>
                                                <input type="text" id="nomor-anggota" name="nomor-anggota"
                                                    maxlength="8" oninput="validateInput()"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-900 focus:border-primary-900 block w-full p-2.5"
                                                    placeholder="Nomor Anggota Koperasi" required="">
                                                <p id="error-message" class="mt-2 text-xs text-red-600"></p>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="nama"
                                                    class="block mb-1 text-sm font-medium text-primary-900">Nama
                                                    Lengkap</label>
                                                <input type="text" name="nama" id="nama"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-900 focus:border-primary-900 block w-full p-2.5"
                                                    placeholder="Tulis nama lengkap anda..." required="">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="nomor-telepon"
                                                    class="block mb-1 text-sm font-medium text-primary-900">Nomor
                                                    Telepon</label>
                                                <input type="text" name="nomor-telepon" id="nomor-telepon"
                                                    min="00000000" max="00000000"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-900 focus:border-primary-900 block w-full p-2.5"
                                                    placeholder="Nomor telepon yang dapat dihubungi" required="">
                                            </div>
                                        </div>
                                        <button type="submit" id="submit-button"
                                            class="text-white bg-gradient-to-r from-[#7AD800] to-[#00A500] hover:bg-gradient-to-br mx-auto flex items-center px-28 rounded-lg py-2 justify-center shadow shadow-primary-900/30 font-medium">
                                            <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 17 17"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                            </svg>
                                            Mulai Menyimpan
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
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
