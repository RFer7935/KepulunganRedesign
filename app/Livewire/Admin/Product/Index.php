<?php

namespace App\Livewire\Admin\Product;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use Mary\Traits\Toast;

#[Layout('components.layouts.admin')]
class Index extends Component
{
    use WithPagination, Toast;

    public string $search = '';
    public ?string $dateRange = '1 Sept - 30 Sept 2024';
    public ?string $selectedWilayah = null;
    // Define table headers
    public function headers(): array
    {
        return [
            ['key' => 'id', 'label' => 'No', 'class' => 'w-10'],
            ['key' => 'nama_barang', 'label' => 'Nama barang'],
            ['key' => 'wilayah', 'label' => 'Wilayah'],
            ['key' => 'kuantitas', 'label' => 'Kuantitas'],
            ['key' => 'total_harga', 'label' => 'Total Harga'],
            ['key' => 'status', 'label' => 'Status'],
            ['key' => 'created_at', 'label' => 'Dibuat Tanggal & Jam'],
            ['key' => 'action', 'label' => 'Action', 'sortable' => false],
        ];
    }

    // Mock data for the demonstration
    public function items()
    {
        return [
            ['id' => 1, 'nama_barang' => 'Makanan & Minuman', 'wilayah' => 'Jawa Timur', 'kuantitas' => 25, 'total_harga' => 'Rp 1.250.000', 'status' => 'Aktif', 'created_at' => 'Sen, 23 Sept 2024 - 17:00'],
            ['id' => 2, 'nama_barang' => 'Pakaian', 'wilayah' => 'Sulawesi Utara', 'kuantitas' => 25, 'total_harga' => 'Rp 1.250.000', 'status' => 'Aktif', 'created_at' => 'Sen, 23 Sept 2024 - 17:00'],
            ['id' => 3, 'nama_barang' => 'Tanaman', 'wilayah' => 'Jawa Timur', 'kuantitas' => 25, 'total_harga' => 'Rp 1.250.000', 'status' => 'Tidak Aktif', 'created_at' => 'Sen, 23 Sept 2024 - 17:00'],
            // Add more rows as per the image...
        ];
    }

    public function render()
    {
        return view('livewire.admin.product.index', [
            'headers' => $this->headers(),
            'rows' => $this->items()
        ]);
    }
}
