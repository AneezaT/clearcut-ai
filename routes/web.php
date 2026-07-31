<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\ImageReviser;
use Illuminate\Support\Facades\Route;

// Home URL (http://127.0.0.1:8000/) - Open for Guests (10 Free Credits) & Logged-in Users
Route::get('/', ImageReviser::class)->name('home');

// Dashboard URL ko Home route par redirect kar diya taake login ke baad bhi yehin aaye
Route::get('/dashboard', function () {
    return redirect()->route('home');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes for logged-in users
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';