@if ($action === "create")
    <button data-modal-target="toggle-create-modal" data-modal-toggle="toggle-create-modal" class="block border border-gray-900 hover:border-primary-900 hover:text-primary-900 focus:ring-0 focus:outline-none focus:bg-primary-900 focus:text-gray-50 focus:border-primary-900 transition duration-200 font-medium rounded-md text-sm text-center py-2 px-3 min-w-fit" type="button">
        Tambah Produk
    </button>
@elseif ($action === "update")
    <button data-modal-target="toggle-edit-modal" data-modal-toggle="toggle-edit-modal" data-nama-produk="{{$produk}}" data-kategori-produk="{{$kategori}}" data-jenis-produk="{{$keyword}}" data-harga-produk="{{$harga}}" data-kode-produk="{{$kode}}" class="absolute top-2 right-2 transition duration-200 bg-primary-500 text-white p-1 rounded-full hover:bg-primary-800">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 21.7502H6C3.582 21.7502 2.25 20.4182 2.25 18.0002V8.00022C2.25 5.58222 3.582 4.25022 6 4.25022H9C9.414 4.25022 9.75 4.58622 9.75 5.00022C9.75 5.41422 9.414 5.75022 9 5.75022H6C4.423 5.75022 3.75 6.42322 3.75 8.00022V18.0002C3.75 19.5772 4.423 20.2502 6 20.2502H16C17.577 20.2502 18.25 19.5772 18.25 18.0002V15.0002C18.25 14.5862 18.586 14.2502 19 14.2502C19.414 14.2502 19.75 14.5862 19.75 15.0002V18.0002C19.75 20.4182 18.418 21.7502 16 21.7502ZM20.58 5.03022L18.97 3.42023C18.4 2.86023 17.49 2.86021 16.92 3.43021L15.57 4.79023L19.21 8.43021L20.57 7.08021C21.14 6.51021 21.14 5.60022 20.58 5.03022ZM14.51 5.85023L8 12.3902V16.0002H11.61L18.15 9.49021L14.51 5.85023Z"/>
        </svg>        
    </button>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const updateButton = document.querySelectorAll('[data-modal-target="toggle-edit-modal"]');
        
            updateButton.forEach(button => {
                button.addEventListener('click', () => {
                    const namaProduk = button.getAttribute('data-nama-produk');
                    const kategoriProduk = button.getAttribute('data-kategori-produk');
                    const jenisProduk = button.getAttribute('data-jenis-produk');
                    const hargaProduk = button.getAttribute('data-harga-produk');
                    const kodeProduk = button.getAttribute('data-kode-produk');
        
                    const namaInput = document.querySelector('#edit-produk');
                    namaInput.value = namaProduk;
                    
                    const kategoriInput = document.querySelector('#edit-kategori');
                    kategoriInput.value = kategoriProduk;
                    
                    const jenisInput = document.querySelector('#edit-jenis');
                    jenisInput.value = jenisProduk;
                    
                    const hargaInput = document.querySelector('#edit-harga');
                    hargaInput.value = hargaProduk;
                    
                    const kodeInput = document.querySelector('#edit-kode');
                    kodeInput.value = kodeProduk;
                });
            });
        });
        </script>
@endif

<!-- Create Modal -->
<div id="toggle-create-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-gray-50 rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <span class="flex items-center gap-1">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Tambah Produk
                    </h3>    
                </span>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-primary-100 hover:text-primary-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center transition duration-200"
                    data-modal-hide="toggle-modal" onclick="location.reload()">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="">
                <div class="p-4 md:p-5 space-y-4">
                    <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                        <div class="sm:col-span-2">
                            <label for="produk" class="block mb-2 text-sm font-medium text-gray-900">Nama Produk</label>
                            <input type="text" name="produk" id="produk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Ketik Nama Produk" required="">
                        </div>
                        <div>
                            <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900">Kategori</label>
                            <select id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                @foreach ($group as $keyword => $produk)
                                    <option value="{{$keyword}}">{{$keyword}}</option>                                   
                                @endforeach
                                <option value="custom">Ketik baru...</option>
                            </select>
                            <input type="text" name="produk" id="custom-kategori" class="hidden bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full p-2.5" placeholder="Jenis Barang">
                            <script>     
                                const selectKategori = document.getElementById('kategori');
                                const customKategori = document.getElementById('custom-kategori');

                                selectKategori.selectedIndex = 0;
                                selectKategori.addEventListener('change', (e) => {
                                    if (e.target.value === 'custom') {
                                        selectKategori.style.marginBottom = '8px'
                                        customKategori.style.display = 'block'
                                    } else {
                                        selectKategori.style.marginBottom = '0px'
                                        customKategori.style.display = 'none'
                                    }
                                });
                            </script>
                        </div>
                        <div>
                            <label for="jenis" class="block mb-2 text-sm font-medium text-gray-900">Jenis Barang</label>
                            <select id="jenis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                @foreach ($group as $kategori => $produk)
                                    @foreach ($produk as $jenis => $item)
                                        <option value="{{$jenis}}">{{$jenis}}</option>                                       
                                    @endforeach
                                @endforeach
                                <option value="custom">Ketik baru...</option>
                            </select>
                            <input type="text" name="produk" id="custom-jenis" class="hidden bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full p-2.5" placeholder="Jenis Barang">
                            <script>     
                                const selectJenis = document.getElementById('jenis');
                                const customJenis = document.getElementById('custom-jenis');

                                selectJenis.selectedIndex = 0;
                                selectJenis.addEventListener('change', (e) => {
                                    if (e.target.value === 'custom') {
                                        selectJenis.style.marginBottom = '8px'
                                        customJenis.style.display = 'block'
                                    } else {
                                        selectJenis.style.marginBottom = '0px'
                                        customJenis.style.display = 'none'
                                    }
                                });
                            </script>
                        </div>
                        <div>
                            <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Harga (Rp)</label>
                            <input type="number" name="harga" id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Contoh: 20000" required>
                        </div>
                        <div>
                            <label for="kode" class="block mb-2 text-sm font-medium text-gray-900">Kode Produk</label>
                            <input type="number" name="kode" id="kode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Contoh: 010001" required>
                        </div>
                        <div class="sm:col-span-2">
                            <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload Gambar Produk</label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" id="file_input" type="file">
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center gap-2 p-4 md:p-5 border-t border-gray-200 rounded-b">
                    <button data-modal-hide="toggle-modal" type="button"
                        class="text-white bg-primary-500 hover:bg-primary-900 focus:outline-none focus:ring-0 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition duration-200">
                        Tambah Produk
                    </button>
                    <button data-modal-hide="toggle-modal" onclick="location.reload()" type="button"
                        class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-gray-50 rounded-lg border border-gray-200 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100 transition duration-200">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div id="toggle-edit-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-gray-50 rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <span class="flex items-center gap-1">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Edit Produk
                    </h3>    
                </span>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-primary-100 hover:text-primary-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center transition duration-200"
                    data-modal-hide="toggle-edit-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="">
                <div class="p-4 md:p-5 space-y-4">
                    <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                        <div class="sm:col-span-2">
                            <label for="produk" class="block mb-2 text-sm font-medium text-gray-900">Nama Produk</label>
                            <input type="text" name="produk" id="edit-produk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Ketik Nama Produk" required="">
                        </div>
                        <div class="w-full">
                            <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900">Kategori</label>
                            <input type="text" name="kategori" id="edit-kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" value="{{$keyword}}" disabled>
                        </div>
                        <div>
                            <label for="jenis" class="block mb-2 text-sm font-medium text-gray-900">Jenis Barang</label>
                            <select id="edit-jenis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                @foreach ($group as $kategori => $produk)
                                    @foreach ($produk as $jenis => $item)
                                        <option value="{{$jenis}}">{{$jenis}}</option>                                       
                                    @endforeach
                                @endforeach
                                <option value="custom">Ketik baru...</option>
                            </select>
                            <input type="text" name="produk" id="custom-jenis" class="hidden bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full p-2.5" placeholder="Jenis Barang">
                            <script>     
                                const select = document.getElementById('jenis');
                                const customInput = document.getElementById('custom-jenis');

                                // Add an event listener to the select element
                                select.addEventListener('change', (e) => {
                                    if (e.target.value === 'custom') {
                                        // Enable the custom input if the "Custom..." option is selected
                                        select.style.marginBottom = '8px'
                                        customInput.style.display = 'block'
                                    } else {
                                        // Disable the custom input if a different option is selected
                                        select.style.marginBottom = '0px'
                                        customInput.style.display = 'none'
                                    }
                                });
                            </script>
                        </div>
                        <div>
                            <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Harga (Rp)</label>
                            <input type="number" name="harga" id="edit-harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Contoh: 20000" required>
                        </div>
                        <div class="w-full">
                            <label for="kode" class="block mb-2 text-sm font-medium text-gray-900">Kode Produk</label>
                            <input type="number" name="kode" id="edit-kode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Contoh: 010001" required disabled>
                        </div>
                        <div class="sm:col-span-2">
                            <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload Gambar Produk</label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" id="edit-file-input" type="file">
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex justify-between items-center p-4 md:p-5 border-t border-gray-200 w-full rounded-b">
                    <span>
                        <button data-modal-hide="toggle-modal" type="button"
                            class="text-white bg-primary-500 hover:bg-primary-900 focus:outline-none focus:ring-0 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition duration-200">
                            Edit Produk
                        </button>
                        <button data-modal-hide="toggle-modal" type="button"
                            class="ms-2 text-white bg-red-400 hover:bg-red-500 focus:outline-none focus:ring-0 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition duration-200">
                            Delete Produk
                        </button>
                    </span>
                    <button data-modal-hide="toggle-edit-modal" type="button"
                        class=" py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-gray-50 rounded-lg border border-gray-200 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100 transition duration-200">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>