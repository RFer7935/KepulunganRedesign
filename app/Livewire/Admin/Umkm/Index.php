<?php

namespace App\Livewire\Admin\Umkm;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use Mary\Traits\Toast;

#[Layout('components.layouts.admin')]
class Index extends Component
{
    use WithPagination, Toast;

    public string $search = '';
    public ?string $selectedKategori = null;

    // Table headers for UMKM
    public function headers(): array
    {
        return [
            ['key' => 'id', 'label' => 'No', 'class' => 'w-10'],
            ['key' => 'nama_bisnis', 'label' => 'Nama UMKM'],
            ['key' => 'pemilik', 'label' => 'Pemilik'],
            ['key' => 'bidang', 'label' => 'Bidang Usaha'],
            ['key' => 'alamat', 'label' => 'Lokasi/Alamat'],
            ['key' => 'status', 'label' => 'Status'],
            ['key' => 'action', 'label' => 'Action', 'sortable' => false],
        ];
    }

    // Mock data function - Ready to be swapped with UMKM::query() later
    public function rows()
    {
        return [
            ['id' => 1, 'nama_bisnis' => 'Keripik Tempe Barokah', 'pemilik' => 'Hj. Siti', 'bidang' => 'Kuliner', 'alamat' => 'Malang, Jawa Timur', 'status' => 'Aktif'],
            ['id' => 2, 'nama_bisnis' => 'Batik Sekar Jagad', 'pemilik' => 'Bpk. Ahmad', 'bidang' => 'Fashion/Kerajinan', 'alamat' => 'Solo, Jawa Tengah', 'status' => 'Aktif'],
            ['id' => 3, 'nama_bisnis' => 'Kopi Lereng Gunung', 'pemilik' => 'Rian Wijaya', 'bidang' => 'Pertanian', 'alamat' => 'Toraja, Sulawesi Selatan', 'status' => 'Tidak Aktif'],
            ['id' => 4, 'nama_bisnis' => 'Anyaman Rotan Jaya', 'pemilik' => 'Made Putu', 'bidang' => 'Furniture', 'alamat' => 'Ubud, Bali', 'status' => 'Aktif'],
        ];
    }

    public function render()
    {
        return view('livewire.admin.umkm.index', [
            'headers' => $this->headers(),
            'rows' => $this->rows(),
        ]);
    }
}
