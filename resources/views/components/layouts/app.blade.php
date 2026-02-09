<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta name="description" content="Wisata Air Panas Wong Pulungan - Rileksasi Alami di Jantung Alam di Pasuruan. Nikmati kolam air panas, destinasi wisata, dan berbagai fasilitas menarik.">
    <meta name="keywords" content="wisata air panas, wong pulungan, pasuruan, kolam air panas, wisata alam, destinasi wisata">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>Wisata Air Panas Wong Pulungan - Rileksasi Alami di Pasuruan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="{{ request()->is('umkm*')? 'bg-[#FFEACE] text-gray-900' : 'bg-[#0d0805] text-white' }}">
{{-- @dump(request()->is('umkm')) --}}
{{-- <body> --}}
    <!-- Navigation -->
    <livewire:components.navigation />

    <main class="">
        {{ $slot }}
    </main>

    {{-- @if (request()->is('umkm*'))
        <livewire:umkm.checkout >
    @endif --}}

    <x-footer />
    
    @livewireScripts
    @stack('scripts')
</body>
</html>

{{-- @pushOnce('scripts')
    
@endPushOnce --}}