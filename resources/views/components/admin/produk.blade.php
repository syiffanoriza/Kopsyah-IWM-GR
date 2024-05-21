<div class="snap-start flex flex-col gap-1 p-2 bg-gray-50 border border-gray-300 rounded-md shadow-md min-w-60 max-w-60 min-h-72 text-clip">
    <div class="relative">
        <img class="object-cover h-40 w-full rounded-sm shadow-sm" alt="">
        @include('components.admin.modal', ['action' => 'update'])
    </div>
    <p class="text-sm font-light">{{ $kode }}</p>
    <p class="text-md font-medium">{{ $produk }}</p>
    <p class="text-sm font-medium text-gray-500">Rp <span class="text-primary-900">{{ number_format($harga, 0, '.', ',') }}</span>
    </p>
</div>
