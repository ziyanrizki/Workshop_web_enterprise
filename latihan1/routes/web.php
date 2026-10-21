<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\API\ProdukApiController;


Route::apiResource('buku', ProdukApiController::class); // route untuk API Buku

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route Group Admin (Proteksi Breeze & Role)
# Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
#     Route::resource('buku', BukuController::class);
#     Route::resource('anggota', AnggotaController::class)->middleware('cek.role');
# });

Route::middleware(['auth', 'verified'])->group(function () {

    // Khusus Admin: Hanya bisa mengakses Data Buku
    Route::middleware(['role:admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::resource('buku', BukuController::class);
    });

    // Khusus User Biasa: Bisa mengakses Data Anggota
    Route::middleware(['role:user'])->prefix('user')->name('user.')->group(function () {
        Route::resource('anggota', AnggotaController::class);
    });
});

Route::get('/demo-api-eksternal', function () {
    $response = Http::withoutVerifying()->get('https://jsonplaceholder.typicode.com/users');
    $data = $response->successful() ? $response->json() : [];
    return view('api-eksternal', compact('data'));
});

require __DIR__ . '/auth.php';
