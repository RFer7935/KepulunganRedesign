<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Product\Index;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function() {
   Route::get('products', Index::class)->name('products');
   Route::get('dashboard', Dashboard::class)->name('dashboard');
   Route::prefix('umkm')->name('umkm.')->group(function() {
   });
});