<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Enoni Cell Gadai</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            


        <div class="bg-green-800 text-white py-3">
            <h1 class="text-center text-3xl font-bold">ENONI CELL</h1>
        </div>

            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white ">
            <div class="p-4 text-center font-bold text-lg border-b border-gray-700">
                Menu
            </div>
            <ul class="mt-4">
                <li class="px-4 py-2 hover:bg-gray-700">
                    <a href="{{ route('dashboard') }}" class="block">Dashboard</a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-700">
                    <a href="{{ route('transaksi.index') }}" class="block">Transaksi</a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-700">
                    <a href="{{ route('mutasi.index') }}" class="block">Mutasi</a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-700">
                    <a href="{{ route('saham-barang.index') }}" class="block">Saham Barang</a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-700">
                    <a href="{{ route('nilai-akhir.index') }}" class="block">Nilai Akhir</a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-700">
                    <a href="{{ route('laporan.index') }}" class="block">Laporan</a>
                </li>
            </ul>
        </aside>

            <!-- Page Content -->
            <main>
            @yield('content')
            </main>
        </div>
    </body>
</html>
