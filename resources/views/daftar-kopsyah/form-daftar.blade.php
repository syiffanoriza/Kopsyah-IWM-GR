<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Anggota</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar />
    <section>
        <div class="flex flex-wrap my-20">
            <div class="w-full space-y- 3 items-center">
                <h2 class="text-center text-primary-800 text-4xl font-semibold tracking-wide md:text-4xl lg:text-4xl">
                    Daftar <span class="text-gray-800">Anggota</span>
                </h2>
                <p class="text-lg lg:w-2/3 mx-auto text-center font-normal text-gray-500 lg:text-lg sm:px-16 xl:px-48">
                    Dengan ini saya mengajukan Permohonan Menjadi Anggota Koperasi Syariah IWM GR dan bersedia memenuhi ketentuan-ketentuan dan persyaratan yang berlaku.
                </p>
            </div>
        </div>

        <div id="form-container" class="mb-10 px-10">
            <form class="max-w-3xl mx-auto">
                <div class="mb-5">
                    <label for="large-input" class="block mb-2 text-md font-bold text-primary-900 dark:text-white">Nama Lengkap</label>
                    <input type="text" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-500 rounded-lg bg-gray-50 text-base focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-600 dark:focus:border-primary-600" placeholder="Tulis nama lengkap anda" required>
                </div>
                <div class="mb-5">
                    <label for="large-input" class="block mb-2 text-md font-bold text-primary-900 dark:text-white">Alamat Domisili</label>
                    <input type="text" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-500 rounded-lg bg-gray-50 text-base focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-600 dark:focus:border-primary-600" placeholder="Tulis alamat anda" required>
                </div>
                <div class="mb-5">
                    <label for="large-input" class="block mb-2 text-md font-bold text-primary-900 dark:text-white">Nomor Telepon</label>
                    <input type="text" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-500 rounded-lg bg-gray-50 text-base focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-600 dark:focus:border-primary-600" placeholder="Tulis nomor telepon anda" required>
                </div>
                <div class="mb-9">
                    <label class="block mb-2 text-md font-bold text-primary-900 dark:text-white" for="large_size">Foto KTP</label>
                    <input class="block w-full text-lg text-gray-500 border border-gray-500 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="large_size" type="file" required>
                </div>
                <div class="mb-9">
                    <label class="block mb-2 text-md font-bold text-primary-900 dark:text-white" for="large_size">Bukti Transfer Simpanan Anggota</label>
                    <input class="block w-full text-lg text-gray-500 border border-gray-500 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="large_size" type="file" required>
                </div>
                <div class="mb-9">
                    <label class="block mb-2 text-md font-bold text-primary-900 dark:text-white" for="large_size">Foto Tanda Tangan</label>
                    <input class="block w-full text-lg text-gray-500 border border-gray-500 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="large_size" type="file" required>
                </div>
                <div class="mb-5">
                    <label class="block mb-2 text-md font-bold text-primary-900 dark:text-white" for="large_size">Akad</label>
                    <div class="border border-gray-500 rounded-lg p-4 text-md font-medium">
                        <p>Dengan Ini saya menyatakan bersepakat dan mengikatkan diri satu terhadap yang lain dalam akad Syirkah/Musyarakah dengan menyetorkan simpanan pokok dan simpanan wajib ke <strong>Rekening Bank Mualamalat Koperasi Syariah IWM GR</strong></p>
                    </div>
                </div>
                <div class="mb-5">
                    <label class="block mb-2 text-md font-bold text-primary-900 dark:text-white" for="large_size">Informasi Penggunaan Rekening</label>
                    <div class="border border-gray-500 rounded-lg p-4 text-md font-medium">
                        <p>Bank Muamalat : 3300010872 (Pembayaran Simpanan Pokok/Wajib)</p>
                    </div>
                </div>
                <div class="">
                    <label class="block mb-2 text-md font-bold text-primary-900 dark:text-white" for="large_size">Kontak Info</label>
                    <div class="border border-gray-500 rounded-lg p-4 text-md font-medium">
                        <a href="http://wa.me/62811884747">
                            <p>0811884747 (Admin Pembiayaan)</p>
                        </a>
                    </div>
                </div>
                <a href="#">
                    <button type="submit" class="text-white bg-gradient-to-r from-[#7AD800] to-[#00A500] hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-primary-300 shadow-lg shadow-primary-900/30 font-medium rounded-lg text-lg px-10 py-3 text-center my-16 me-2 mb-4 tracking-wide w-full">Submit</button>
                </a>
            </form>

        </div>
    </section>

    <footer>
        <x-footer />
    </footer>
</body>

</html>