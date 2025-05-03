<?php

use App\Livewire\Products\ProductCreate;
use App\Livewire\Products\ProductEdit;
use App\Livewire\Products\ProductIndex;
use App\Livewire\Roles\RoleCreate;
use App\Livewire\Roles\RoleEdit;
use App\Livewire\Roles\RoleIndex;
use App\Livewire\Users\UserCreate;
use App\Livewire\Users\UserEdit;
use App\Livewire\Users\UserIndex;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('users',UserIndex::class)->name('user.index')->middleware('permission:user.create|user.edit|user.delete');
    Route::get('users/create',UserCreate::class)->name('user.create')->middleware('permission:user.create');
    Route::get('users/{id}/edit',UserEdit::class)->name('user.edit')->middleware('permission:user.edit');

    Route::get('products',ProductIndex::class)->name('product.index')->middleware('permission:product.create|product.edit|product.delete');
    Route::get('products/create',ProductCreate::class)->name('product.create')->middleware('permission:product.create');
    Route::get('products/{id}/edit',ProductEdit::class)->name('product.edit')->middleware('permission:product.edit');

    Route::get('roles',RoleIndex::class)->name('role.index')->middleware('permission:role.create|role.edit|role.delete');
    Route::get('roles/create',RoleCreate::class)->name('role.create')->middleware('permission:role.create');
    Route::get('roles/{id}/edit',RoleEdit::class)->name('role.edit')->middleware('permission:role.edit');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
