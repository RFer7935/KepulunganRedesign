<x-container class="py-32">
    <div class="w-full bg-[#FBE9D2]">
{{-- 
        @php
            $slides = [
                [
                    'image' => '/images/umkm/hero.png',
                ],
                [
                    'image' => '/images/umkm/hero.png',
                ],
                [
                    'image' => '/images/umkm/hero.png',
                ],
                [
                    'image' => '/images/umkm/hero.png',
                ],
            ];
        @endphp
        <x-carousel :slides="$slides" class="md:h-96 object-cover"/> --}}

        <div class="carousel rounded-box">
            <div class="carousel-item">
                <img
                src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp"
                alt="Burger" />
            </div>
            <div class="carousel-item">
                <img
                src="https://img.daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.webp"
                alt="Burger" />
            </div>
            <div class="carousel-item">
                <img
                src="https://img.daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.webp"
                alt="Burger" />
            </div>
            <div class="carousel-item">
                <img
                src="https://img.daisyui.com/images/stock/photo-1494253109108-2e30c049369b.webp"
                alt="Burger" />
            </div>
            <div class="carousel-item">
                <img
                src="https://img.daisyui.com/images/stock/photo-1550258987-190a2d41a8ba.webp"
                alt="Burger" />
            </div>
            <div class="carousel-item">
                <img
                src="https://img.daisyui.com/images/stock/photo-1559181567-c3190ca9959b.webp"
                alt="Burger" />
            </div>
            <div class="carousel-item">
                <img
                src="https://img.daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.webp"
                alt="Burger" />
            </div>
        </div>

        <!-- Section Title -->
        <h2 class="text-xl font-semibold mt-6">
            Temukan UMKM setempat
        </h2>

        <!-- UMKM Card Section -->
        <div class="space-y-8 mt-4">

            <!-- UMKM Card Container -->
            <div class="bg-white rounded-3xl shadow p-4">

                <!-- UMKM Header -->
                <div class="flex items-center space-x-3 mb-4 px-4">
                    <img src="/images/umkm/profil1.png" class="w-10 h-10 rounded-full" />
                    <h3 class="font-semibold">Umkm Bu Lasmi</h3>
                </div>

                <!-- Food Cards Grid -->
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @for ($i = 0; $i < 4; $i++)
                        <x-product-card 
                            url="/images/umkm/nasiayamgeprek.png"
                            alt="Nasi Ayam Geprek"
                            title="Nasi Ayam Geprek"
                            subtitle="Nasi Ayam Geprek + sambal" 
                            price="Rp 12.000"
                            link="{{ route('umkm.detail', ['testajah']) }}"
                        />
                    @endfor
                </div>

                <!-- See More Button -->
                <div class="flex justify-center mt-4">
                    <button class="px-4 py-2 rounded-full bg-orange-500 text-white text-sm">
                        Lihat Lebih Banyak
                    </button>
                </div>
            </div>

            <!-- SECOND UMKM CARD (same structure, duplicate this block) -->
            <div class="bg-white rounded-3xl shadow p-4">

                <div class="flex items-center space-x-3 mb-4 px-4">
                    <img src="/images/umkm/profil1.png" class="w-10 h-10 rounded-full" />
                    <h3 class="font-semibold">Umkm Bu Asidi</h3>
                </div>

                <!-- Food Cards Grid -->
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @for ($i = 0; $i < 4; $i++)
                        <x-product-card 
                            url="/images/umkm/nasiayamgeprek.png"
                            alt="Nasi Ayam Geprek"
                            title="Nasi Ayam Geprek"
                            subtitle="Nasi Ayam Geprek + sambal" 
                            price="Rp 12.000"
                        />
                    @endfor
                </div>

                <div class="flex justify-center mt-4">
                    <button class="px-4 py-2 rounded-full bg-orange-500 text-white text-sm">
                        Lihat Lebih Banyak
                    </button>
                </div>
            </div>
        </div>
    </div>

</x-container>