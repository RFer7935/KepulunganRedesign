<div>
    {{-- Header section with breadcrumbs and primary button --}}
    <x-header title="Data Karyawan" separator progress-indicator>
        <x-slot:middle class="justify-start!">
            <x-breadcrumbs :items="[['label' => 'Manajemen SDM'], ['label' => 'Data Karyawan']]" />
        </x-slot:middle>
        <x-slot:actions>
            <x-button label="Tambah Karyawan" icon="o-plus" class="btn-primary bg-blue-900 border-none px-8 text-white" />
        </x-slot:actions>
    </x-header>

    {{-- Filter Bar --}}
    <div class="flex flex-wrap gap-4 mb-6">
        <x-input placeholder="Cari nama atau NIP..." wire:model.live="search" icon="o-magnifying-glass" class="w-80 bg-white" />
        <x-select :options="[['id'=>1, 'name'=>'Semua Jabatan'], ['id'=>2, 'name'=>'Manager'], ['id'=>3, 'name'=>'Staff']]" wire:model="selectedJabatan" class="bg-white" />
    </div>

    {{-- Employee Table Card --}}
    <x-card shadow class="rounded-2xl border-none">
        {{-- <x-table :headers="$headers" :rows="$rows" with-pagination class="text-sm"> --}}
        <x-table :headers="$headers" :rows="$rows" class="text-sm">
            {{-- Custom Status Badge Logic --}}
            @scope('cell_status', $row)
                @php
                    $badgeColor = match($row['status']) {
                        'Aktif' => 'badge-success',
                        'Cuti' => 'badge-warning',
                        'Non-Aktif' => 'badge-error',
                        default => 'badge-ghost'
                    };
                @endphp
                <div class="flex items-center gap-2">
                    <span class="badge badge-xs {{ $badgeColor }}"></span>
                    <span class="font-medium">{{ $row['status'] }}</span>
                </div>
            @endscope

            {{-- Action Buttons --}}
            @scope('cell_action', $row)
                <div class="flex gap-2">
                    <x-button icon="o-pencil-square" class="btn-ghost btn-sm text-blue-900" tooltip="Edit" />
                    <x-button icon="o-trash" class="btn-ghost btn-sm text-red-500" tooltip="Hapus" />
                </div>
            @endscope

        </x-table>
        
        <div class="mt-4 flex justify-between items-center text-slate-500 text-xs">
            <span>Showing {{ count($rows) }} of 120 Karyawan</span>
        </div>
    </x-card>
</div>
