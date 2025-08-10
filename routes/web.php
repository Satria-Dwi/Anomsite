<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Query\IndexHint;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Models\Marketplace;

Route::get('/', function () {
    return view('mainmenu',[
        'title' => 'Profile',
        'active' => 'profile'
    ]);
});

Route::get('/portofolio', function () {
    return view('portofolio', [
    'title' => 'Portofolio',
    'active' => 'portofolio',
    'marketplaces' => Marketplace::all()
    ]);
});


Route::get('/signin', [SigninController::class, 'index']);
Route::get('/signup', [SignupController::class, 'index']);

Route::get('/marketplace', [MarketplaceController::class, 'index']);


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
