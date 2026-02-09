<?php

use App\Livewire\Homepage\Index;
use App\Livewire\Umkm\Checkout;
use App\Livewire\Umkm\Detail;
use App\Livewire\Umkm\Index as UmkmIndex;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class);
Route::get('/umkm', UmkmIndex::class)->name('umkm.index');
Route::get('/umkm/{slug}', Detail::class)->name('umkm.detail');
Route::get('/umkm/cart/checkout', Checkout::class)->name('umkm.checkout');

include_once 'admin.php';