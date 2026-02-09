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
   <style>
      body {
         font-family: 'Poppins', sans-serif;
      }
   </style>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
   @livewireStyles
</head>

{{-- <body class="{{ request()->is('umkm*')? 'bg-[#FFEACE] text-gray-900' : 'bg-[#0d0805] text-white' }}"> --}}
<body>
   <x-main full-width>
      <x-slot:sidebar drawer="main-drawer" collapsible class="bg-slate-50 border-r-0">
         {{-- Logo --}}
         <div class="p-6 text-2xl font-bold tracking-tight">LOGO</div>

         {{-- Menu --}}
         <x-menu activate-by-route>
            <x-menu-item title="Beranda" icon="o-home" :link="route('admin.dashboard')" />
            <x-menu-item title="Data Barang" icon="o-square-3-stack-3d" :link="route('admin.products')" />
            <x-menu-item title="Data Keuangan" icon="o-banknotes" link="/keuangan" />
            <x-menu-item title="Data Karyawan" icon="o-users" link="/karyawan" />
            <x-menu-item title="Pengaturan" icon="o-cog-6-tooth" link="/pengaturan" />
         </x-menu>

         {{-- User Profile Bottom --}}
         <x-slot:content>
            {{ $slot }}
         </x-slot:content>
      </x-slot:sidebar>
   </x-main>
   {{-- <x-footer /> --}}
   @livewireScripts
   @stack('scripts')
</body>
</html>
