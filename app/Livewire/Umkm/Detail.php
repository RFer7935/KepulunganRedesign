<?php

namespace App\Livewire\Umkm;

use Livewire\Component;

class Detail extends Component
{
    public string $slug;
    public int $selectedItemSlug = 0;
    
    public $showModal = false;
    public bool $myModal1 = false;

    public function render()
    {
        return view('livewire.umkm.detail');
    }
}
