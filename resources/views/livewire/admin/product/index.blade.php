<div>
    <x-header title="Data Barang" separator progress-indicator>
        <x-slot:middle class="justify-start!">
            <x-breadcrumbs :items="[['label' => 'Data Barang']]" />
        </x-slot:middle>
        <x-slot:actions>
            <x-button label="Tambah Data" class="btn-primary bg-blue-900 border-none px-8" />
        </x-slot:actions>
    </x-header>

    {{-- Filters --}}
    <div class="flex flex-wrap gap-4 mb-6">
        <x-input placeholder="cari nama barang" wire:model.live="search" icon="o-magnifying-glass" class="w-80 bg-white" />
        <x-datepicker wire:model="dateRange" icon="o-calendar" class="bg-white" />
        <x-select :options="[['id' => 1, 'name' => 'Semua Wilayah']]" wire:model="selectedWilayah" class="bg-white" />
    </div>

    {{-- Table --}}
    <x-card shadow class="rounded-2xl border-none">
        {{-- <x-table :headers="$headers" :rows="$rows" with-pagination class="text-sm"> --}}
        <x-table :headers="$headers" :rows="$rows" class="text-sm">
            {{-- Status Cell Customization --}}
            @scope('cell_status', $row)
                <div class="flex items-center gap-2">
                    <span class="badge badge-xs {{ $row['status'] == 'Aktif' ? 'badge-success' : 'badge-error' }}"></span>
                    {{ $row['status'] }}
                </div>
            @endscope

            {{-- Action Cell Customization --}}
            @scope('cell_action', $row)
                <x-button icon="o-pencil-square" class="btn-ghost btn-sm text-blue-900" />
            @endscope
        </x-table>
        
        <div class="mt-4 text-slate-500 text-xs">
            Showing 8 of 1000 Records
        </div>
    </x-card>
</div>
