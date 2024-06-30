<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Admin\Product\Index;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified',])
    ->name('dashboard');



Route::middleware(['is-admin', 'auth'])->group(function () {
    Route::get('dashboard/products', Index::class )->name('dashboard.products');
});    
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
