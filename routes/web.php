<?php

use App\Http\Controllers\CatatanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndikatorKinerjaController;
use App\Http\Controllers\KinerjaUtamaController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProfileController;
use App\Models\IndikatorKinerja;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


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

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::middleware('auth')->group(function () {

    
    Route::get('/dashboards', [DashboardController::class, 'index'])->name('dashboards.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/laporans', \App\Http\Controllers\LaporanController::class);

Route::middleware('admin')->group(function () {
    
    Route::resource('/catatans', \App\Http\Controllers\CatatanController::class);
    Route::get('/catatans/{catatan}/edit/{tw}', [CatatanController::class, 'edit'])->name('catatans.edit');
    Route::resource('/kinerja', \App\Http\Controllers\KinerjaUtamaController::class);
    // Tambahkan route untuk input data kinerja utama
    // Route::get('/kinerjas/create', [KinerjaUtamaController::class, 'create'])->name('kinerja.create');
    // Route::get('kinerjas/{kinerjaUtama}/edit', [IndikatorKinerjaController::class, 'edit'])->name('kinerjas.edit');
    // Route::delete('/kinerjas/{kinerjaUtama}', [KinerjaUtamaController::class, 'destroy'])->name('kinerja.destroy');
    // Route::post('/kinerja', [KinerjaUtamaController::class, 'store'])->name('kinerja.store');
    // Route::get('/kinerja', [KinerjaUtamaController::class, 'index'])->name('kinerja.index');
    Route::post('/kinerja', [KinerjaUtamaController::class, 'store'])->name('kinerja.store');
    Route::get('/kinerja', [KinerjaUtamaController::class, 'index'])->name('kinerja.index');
    Route::delete('kinerja/{id}', [KinerjaUtamaController::class, 'destroy'])->name('kinerja.destroy');
    Route::get('/kinerja/{id}/edit', [KinerjaUtamaController::class, 'edit'])->name('kinerja.edit');
    Route::put('/kinerja/{id}', [KinerjaUtamaController::class, 'update'])->name('kinerja.update');
    Route::get('/indikator/create', [IndikatorKinerjaController::class, 'create'])->name('indikator.create');
    Route::post('/indikator/store', [IndikatorKinerjaController::class, 'store'])->name('indikator.store');
    Route::delete('indikator/{id}', [IndikatorKinerjaController::class, 'destroy'])->name('indikator.destroy');
    Route::get('/indikator/{id}/edit', [IndikatorKinerjaController::class, 'edit'])->name('indikator.edit');
    Route::put('/indikator/{id}', [IndikatorKinerja::class, 'update'])->name('indikator.update');
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/pegawai/{id}', [PegawaiController::class, 'show'])->name('pegawai.show');
Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::put('/pegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');

    
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('/laporans', \App\Http\Controllers\LaporanController::class);
Route::get('/cetak-pdf', [LaporanController::class, 'cetakPDF'])->name('cetak.pdf');
// Tambahkan route untuk input data kinerja utama
// Pindahkan route laporans ke dalam middleware user
    
});



Route::middleware('user')->group(function () {  
    
});



require __DIR__.'/auth.php';
