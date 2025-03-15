<aside class="w-52 bg-gray-900 text-white h-screen fixed">
    <div class="p-4 text-center text-lg font-bold border-b border-white-700">
        MENU
    </div>
    <nav class="mt-4">
        <ul class="space-y-2">
            <li>
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class=" text-white hover:bg-gray-700 block px-4 py-2 rounded">
                    {{ __('Dashboard') }}
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('transaksi.index')" :active="request()->routeIs('transaksi.*')" class=" text-white hover:bg-gray-700 block px-4 py-2 rounded">
                    {{ __('Transaksi') }}
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('mutasi.index')" :active="request()->routeIs('mutasi.*')" class=" text-white hover:bg-gray-700 block px-4 py-2 rounded">
                    {{ __('Mutasi') }}
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('saham-barang.index')" :active="request()->routeIs('saham-barang.*')" class=" text-white hover:bg-gray-700 block px-4 py-2 rounded">
                    {{ __('Saham Barang') }}
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('nilai-akhir.index')" :active="request()->routeIs('nilai-akhir.*')" class=" text-white hover:bg-gray-700 block px-4 py-2 rounded">
                    {{ __('Nilai Akhir') }}
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('laporan.index')" :active="request()->routeIs('laporan.*')" class=" text-white hover:bg-gray-700 block px-4 py-2 rounded">
                    {{ __('Laporan') }}
                </x-nav-link>
            </li>
        </ul>
    </nav>
</aside>
