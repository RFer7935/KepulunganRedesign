<div>
    <x-header title="Data UMKM" separator progress-indicator>
        <x-slot:middle class="justify-start!">
            <x-breadcrumbs :items="[['label' => 'Data Master'], ['label' => 'UMKM']]" />
        </x-slot:middle>
        <x-slot:actions>
            <x-button label="Daftarkan UMKM" icon="o-plus" class="btn-primary bg-blue-900 border-none px-8 text-white" />
        </x-slot:actions>
    </x-header>

    {{-- Filter Area --}}
    <div class="flex flex-wrap gap-4 mb-6">
        <x-input placeholder="Cari nama UMKM atau pemilik..." wire:model.live="search" icon="o-magnifying-glass" class="w-80 bg-white" />
        
        <x-select 
            wire:model="selectedKategori" 
            icon="o-tag"
            placeholder="Semua Bidang Usaha"
            :options="[['id'=>'kuliner','name'=>'Kuliner'], ['id'=>'fashion','name'=>'Fashion'], ['id'=>'kerajinan','name'=>'Kerajinan']]" 
            class="bg-white" 
        />
    </div>

    {{-- Table Card --}}
    <x-card shadow class="rounded-2xl border-none">
        {{-- <x-table :headers="$headers" :rows="$rows" with-pagination class="text-sm"> --}}
        <x-table :headers="$headers" :rows="$rows" class="text-sm">
            
            {{-- Badge styling for Business Sectors --}}
            @scope('cell_bidang', $row)
                <span class="badge badge-ghost rounded-md font-semibold text-xs py-3">
                    {{ $row['bidang'] }}
                </span>
            @endscope

            {{-- Status Dot styling --}}
            @scope('cell_status', $row)
                <div class="flex items-center gap-2">
                    <div class="badge badge-xs {{ $row['status'] == 'Aktif' ? 'badge-success' : 'badge-error' }}"></div>
                    <span>{{ $row['status'] }}</span>
                </div>
            @endscope

            {{-- Action Row --}}
            @scope('cell_action', $row)
                <div class="flex gap-1">
                    <x-button icon="o-eye" class="btn-ghost btn-sm text-slate-400" tooltip="Lihat Detail" />
                    <x-button icon="o-pencil-square" class="btn-ghost btn-sm text-blue-900" />
                </div>
            @endscope

        </x-table>

        <div class="mt-4 text-slate-400 text-xs">
            * Data diperbarui secara real-time berdasarkan pendaftaran wilayah.
        </div>
    </x-card>
</div>
