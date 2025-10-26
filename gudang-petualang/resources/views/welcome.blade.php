<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <title>Gudang Petualang</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="bg-gray-50 text-gray-900">

    {{-- ✅ Tambahkan test box untuk memastikan Tailwind aktif --}}
    <div class="p-6 bg-green-600 text-white rounded-lg m-6">
        Tailwind aktif ✅
    </div>

    {{-- ✅ Panggil komponen Livewire --}}
    {{-- <livewire:homepage /> --}}

    @livewireScripts
</body>

</html>