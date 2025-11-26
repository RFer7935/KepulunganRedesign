<?php

namespace App\Livewire\Umkm;

use Livewire\Component;

class Product extends Component
{
    public string $slug;

    public function render()
    {
        return view('livewire.umkm.product');
    }
}
