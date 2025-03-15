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
    <body class="font-sans antialiased" x-data="{ open: false }">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex">

        <!-- Sidebar -->
        <aside 
            class="fixed inset-y-0 left-0 w-52 bg-gray-900 text-white p-4 transform transition-transform duration-300 md:translate-x-0 z-50"
            :class="open ? 'translate-x-0' : '-translate-x-full'"
        >
            <!-- Tombol Close -->
            <button 
                class="absolute top-2 right-2 text-white text-xl md:hidden"
                @click="open = false"
            >
                ✖
            </button>

            @include('layouts.sidebar')
        </aside>

        <!-- Main Content -->
        <div class="flex-1 md:ml-52">
            <!-- Navbar -->
            <div class="bg-green-800 text-white py-3 flex items-center justify-between px-4 md:px-8">
                <!-- Tombol Hamburger (Mobile Only) -->
                <button 
                    class="md:hidden text-white focus:outline-none"
                    @click="open = true"
                >
                    ☰
                </button>
                <h1 class="text-2xl font-bold text-center flex-1">ENONI CELL</h1>
            </div>

            <!-- Navigation -->
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>



</html>
