<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified',])
    ->name('dashboard');

Route::middleware(['is-admin', 'auth'])->group(function () {
    Route::view('dashboard/products', 'livewire.admin.product.index')->name('dashboard.products');
});    
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
