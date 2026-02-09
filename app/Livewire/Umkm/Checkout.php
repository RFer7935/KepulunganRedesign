<?php

namespace App\Livewire\Umkm;

use Livewire\Component;

class Checkout extends Component
{
    public $slug;
    public function render()
    {
        return view('livewire.umkm.checkout');
    }
}
