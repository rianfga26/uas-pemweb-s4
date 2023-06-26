<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ManajemenController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// beranda
Route::get('/', function () {
    return view('index');
});
// tentang kami
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});
Route::get('/visi-misi', function () {
    return view('visi-misi');
});
// unit bisnis
Route::get('/galeri-investasi-syariah', function () {
    return view('galeri-inves');
});
Route::get('/si-pinter-keuangan-jatim', function () {
    return view('si-pinter');
});
// layanan
Route::get('/konsultasi-keuangan', function () {
    return view('konsultasi-keuangan');
});
Route::get('/konsultasi-perpajakan', function () {
    return view('konsultasi-perpajakan');
});
Route::get('/jasa-pelaporan-e-filing', function () {
    return view('pelaporan-e-filing');
});
// produk
Route::get('/data-keuangan', function () {
    return view('data-keuangan');
});


// admin
Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/anggota', [ManajemenController::class, 'viewAnggota'])->name('manajemen.anggota');

Route::get('/upload-gambar', [ManajemenController::class, 'viewUploadGambar'])->name('manajemen.upload');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
