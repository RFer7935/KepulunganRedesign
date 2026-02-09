<x-container class="py-32" boxClass="bg-white p-6 rounded-3xl">
    <x-mary-modal wire:model="showModal" class="backdrop-blur" box-class="max-w-7xl max-h-[80vh] bg-base-100">
        <livewire:umkm.checkout slug='{{ $selectedItemSlug }}' wire:key='checkout-{{ $selectedItemSlug }}'/>
    </x-mary-modal>

    {{-- <button @click="$wire.showModal = true;" wire:click='slug = "{{ $slug }}"' class="fixed left-1/2 bottom-12 -translate-x-1/2 btn border-none bg-[#99582a] hover:bg-[#7f4a23] text-white rounded-full text-xl px-16 py-3 h-auto shadow-xl capitalize transition-transform hover:scale-105 active:scale-95 font-bold z-50">
        Checkout
    </button> --}}

    {{-- <x-modal wire:model="myModal1" title="Hey" class="backdrop-blur">
        <livewire:umkm.product slug='{{ $selectedItemSlug }}' wire:key='{{ $selectedItemSlug }}'/>

        <x-slot:actions>
            <x-button label="Cancel" @click="$wire.myModal1 = false" />
        </x-slot:actions>
    </x-modal> --}}

    <div class="flex items-center space-x-3 mb-6 px-4">
        <img src="/images/umkm/profil1.png" class="w-14 h-14 rounded-full" />
        <h3 class="font-semibold text-xl">Umkm Bu Lasmi {{ $slug }} {{ $selectedItemSlug }}</h3>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @for ($i = 0; $i < 8; $i++)
            <!-- Product Card -->
            <x-product-card  
                url="/images/umkm/nasiayamgeprek.png"
                alt="Nasi Ayam Geprek"
                title="Nasi Ayam Geprek" 
                subtitle="Nasi Ayam Geprek + sambal" 
                price="Rp 12.000"
                wire:click="showModal = true; $wire.set('selectedItemSlug', {{ $i }});"
            />
        @endfor
    </div>
</x-container>
