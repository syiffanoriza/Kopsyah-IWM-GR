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
    <section id="privilage" class="pt-2 pb-12">
        <div class="flex flex-wrap my-20">
            <div class="w-full space-y-5 items-center">
                <h2 class="text-center text-primary-800 text-4xl font-medium tracking-wide md:text-5xl lg:text-6xl">
                    S&K, serta <span class="text-gray-800">Keuntungan</span>
                </h2>
                <p class="text-lg lg:w-2/3 mx-auto text-center font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48">
                    Telusuri Syarat & Ketentuan (S&K) serta Keuntungan menjadi bagian dari Koperasi Syariah IWM GR.
                    Bergabunglah dengan kami untuk <span class="text-primary-700">#BersamaMembangunEkonomiUmat</span>
                </p>
            </div>
        </div>
        <div class="container">
            <div class="flex-wrap flex px-4 justify-center items-center">
                <div class="w-full p-5 my-3 rounded-md items-center justify-center bg-white shadow-lg border border-gray-700">
                    <h2 class="mb-5 text-lg font-semibold text-primary-900 dark:text-white">Syarat Menjadi Anggota</h2>
                    <ol class="max-w-full space-y-1 text-gray-900 list-decimal list-inside ">
                        <li>
                            <span class="font-normal text-gray-900">Diutamakan berdomisili sekitaran operasional Graha
                                Raya</span>
                        </li>
                        <li>
                            <span class="font-normal text-gray-900 ">Mengisi link pendaftaran Anggota</span>
                        </li>
                        <li>
                            <span class="font-normal text-gray-900 ">Menyerahkan Foto copy KTP dan KK</span>
                        </li>
                    </ol>
                </div>
                <div class="w-full p-5 my-3 rounded-md items-center justify-center bg-white shadow-lg border border-gray-700">
                    <h2 class="mb-5 text-lg font-semibold text-primary-900 dark:text-white">Prosedur Pelaksanaan</h2>
                    <ol class="max-w-full space-y-1 text-gray-900 list-decimal list-inside ">
                        <li>
                            <span class="font-normal text-gray-900 ">Anggota melengkapi semua perlengkapan administrasi
                                yang dibutuhkan </span>
                        </li>
                        <li>
                            <span class="font-normal text-gray-900 ">Staf akan memverifikasi data yang diterima dari
                                calon anggota</span>
                        </li>
                        <li>
                            <span class="font-normal text-gray-900 ">Setelah di Approve, calon anggota wajib membayar
                                simpanan pokok sebesar Rp 100.000 atau Rp. 500.000 sesuai dengan kemauan dan kemampuan
                                Anggota</span>
                        </li>
                        <li>
                            <span class="font-normal text-gray-900 ">Anggota wajib melakukan iuran simpanan wajib
                                sebesar Rp. 20.000 atau Rp. 50.000 per bulan sesuai dengan kemauan dan kemampuan
                                Anggota</span>
                        </li>
                        <li>
                            <span class="font-normal text-gray-900 ">Jika sudah mengisi link pendaftaran silahkan
                                konfirmasi ke nomor 0811884747 (Admin Kopsyah IWM GR)</span>
                        </li>
                    </ol>
                </div>
                <div class="w-full p-5 my-3 rounded-md items-center justify-center bg-white shadow-lg border border-gray-700">
                    <h2 class="mb-5 text-lg font-semibold text-primary-900 dark:text-white">Keuntungan Menjadi Anggota
                    </h2>
                    <ol class="max-w-full space-y-1 text-gray-900 list-decimal list-inside ">
                        <li>
                            <span class="font-normal text-gray-900 ">Sebagai pemilik Koperasi (Kepemilikan simpanan
                                pokok dan simpanan wajib)</span>
                        </li>
                        <li>
                            <span class="font-normal text-gray-900 ">Sebagai pengguna jasa pembiayaan dan simpanan yang
                                disediakan koperasi (makin besar simpanan wajib maka akan semakin besar perolehan
                                SHU)</span>
                        </li>
                        <li>
                            <span class="font-normal text-gray-900 ">Memiliki kesempatan pemasaran produk</span>
                        </li>
                        <li>
                            <span class="font-normal text-gray-900 ">Menerima keuntungan SHU setiap akhir tahun</span>
                        </li>
                        <li>
                            <span class="font-normal text-gray-900 ">Dapat mengikuti pelatihan-pelatihan usaha yang
                                diadakan koperasi</span>
                        </li>
                    </ol>
                </div>
                <a href="form-daftar">
                    <button type="button" class="text-white bg-gradient-to-r from-[#7AD800] to-[#00A500] hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-primary-300 shadow-lg shadow-primary-900/30 font-medium rounded-lg text-lg px-10 py-3 text-center my-16 me-2 mb-2 tracking-wide">Daftar
                        Kopsyah IWM</button>
                </a>
            </div>
        </div>
    </section>
    <hr class="h-px my-20 mx-12 bg-gray-700 border-0">

    <footer>
        <x-footer />
    </footer>
</body>

</html>