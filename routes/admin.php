<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Employee\Index as EmployeeIndex;
use App\Livewire\Admin\Product\Index;
use App\Livewire\Admin\Umkm\Index as UmkmIndex;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function() {
   Route::prefix('dashboard')->name('dashboard.')->group(function() {
      Route::get('/', Dashboard::class)->name('index');
   });
   Route::prefix('product')->name('product.')->group(function() {
      Route::get('/', Index::class)->name('index');
   });
   Route::prefix('employee')->name('employee.')->group(function() {
      Route::get('/', EmployeeIndex::class)->name('index');
   });
   Route::prefix('umkm')->name('umkm.')->group(function() {
      Route::get('/', UmkmIndex::class)->name('index');
   });
});