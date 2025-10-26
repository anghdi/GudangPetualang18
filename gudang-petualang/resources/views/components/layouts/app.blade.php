<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gudang Petualang</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />


    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    {{-- ✅ Vite (Tailwind + JS) --}}
    @vite('resources/css/app.css')

    @livewireStyles
</head>

<body class="bg-gray-50 text-gray-900">

    {{-- 🌲 Navbar --}}
    <header class="bg-white shadow-sm fixed sticky top-0 z-5">
        <div class="max-w-7xl mx-auto flex items-center justify-between py-4 px-6">
            {{-- Kiri: Logo & Nama --}}
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Gudang Petualang"
                    class="w-12 h-12 rounded-full border border-gray-200">
                <div>
                    <h1 class="text-lg font-bold text-gray-900 leading-tight">Gudang Petualang</h1>
                    <p class="text-sm text-gray-500 -mt-1">Rent Outdoor Equipment</p>
                </div>
            </div>

            {{-- Kanan: Navigasi --}}
            <nav class="hidden md:flex items-center space-x-8 font-medium">
                <a href="#" class="text-gray-700 hover:text-green-700 transition">Beranda</a>
                <a href="#" class="text-gray-700 hover:text-green-700 transition">Tentang Kami</a>
            </nav>

            {{-- Tombol Menu Mobile --}}
            <div class="md:hidden">
                <button id="menu-toggle" class="text-gray-700 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Menu dropdown untuk mobile --}}
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
            <nav class="flex flex-col py-2">
                <a href="#"
                    class="px-6 py-2 text-gray-700 hover:bg-green-50 hover:text-green-700 transition">Beranda</a>
                <a href="#" class="px-6 py-2 text-gray-700 hover:bg-green-50 hover:text-green-700 transition">Tentang
                    Kami</a>
            </nav>
        </div>
    </header>

    {{-- Konten Halaman --}}
    <main class="min-h-screen">
        {{ $slot }}
    </main>

    @livewireScripts

    {{-- JS kecil untuk toggle menu mobile --}}
    <script>
        document.getElementById('menu-toggle').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>

</html>