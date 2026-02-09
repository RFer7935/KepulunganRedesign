<?php

namespace App\Livewire\Admin\Employee;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use Mary\Traits\Toast;

#[Layout('components.layouts.admin')]
class Index extends Component
{
    use WithPagination, Toast;

    public string $search = '';
    public ?string $selectedJabatan = null;

    // Table headers specific to Employees
    public function headers(): array
    {
        return [
            ['key' => 'id', 'label' => 'No', 'class' => 'w-10'],
            ['key' => 'nama', 'label' => 'Nama Karyawan'],
            ['key' => 'jabatan', 'label' => 'Jabatan'],
            ['key' => 'email', 'label' => 'Email'],
            ['key' => 'telepon', 'label' => 'No. Telepon'],
            ['key' => 'status', 'label' => 'Status'],
            ['key' => 'tgl_masuk', 'label' => 'Tanggal Masuk'],
            ['key' => 'action', 'label' => 'Action', 'sortable' => false],
        ];
    }

    public function items()
    {
        return [
            ['id' => 1, 'nama' => 'Budi Santoso', 'jabatan' => 'Manager Operasional', 'email' => 'budi@perusahaan.com', 'telepon' => '08123456789', 'status' => 'Aktif', 'tgl_masuk' => '12 Jan 2022'],
            ['id' => 2, 'nama' => 'Siti Aminah', 'jabatan' => 'Staff Gudang', 'email' => 'siti@perusahaan.com', 'telepon' => '08129876543', 'status' => 'Aktif', 'tgl_masuk' => '05 Mar 2023'],
            ['id' => 3, 'nama' => 'Agus Prayogo', 'jabatan' => 'Admin Keuangan', 'email' => 'agus@perusahaan.com', 'telepon' => '08133344455', 'status' => 'Cuti', 'tgl_masuk' => '20 Nov 2021'],
            // Add more rows as needed
        ];
    }
    
    public function render()
    {
        return view('livewire.admin.employee.index', [
            'headers' => $this->headers(),
            'rows' => $this->items()
        ]);
    }
}
