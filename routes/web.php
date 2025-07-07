<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    CarouselController,
    CatatanController,
    DashboardController,
    IndikatorKinerjaController,
    KinerjaUtamaController,
    LandingController,
    LaporanController,
    PegawaiController,
    ProfileController
};
use App\Http\Middleware\AdminMiddleware;

// Landing Page
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Route untuk user yang sudah login
Route::middleware('auth')->group(function () {

    Route::get('/dashboards', [DashboardController::class, 'index'])->name('dashboards.index');
    Route::resource('/laporans', LaporanController::class);
    Route::get('/cetak-pdf', [LaporanController::class, 'cetakPDF'])->name('cetak.pdf');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route admin
    Route::middleware(AdminMiddleware::class)->group(function () {

        // Catatan
        Route::resource('/catatans', CatatanController::class);
        Route::get('/catatans/{catatan}/edit/{tw}', [CatatanController::class, 'edit'])->name('catatans.edit');

        // Kinerja
        Route::resource('/kinerja', KinerjaUtamaController::class)->except(['show']);
        Route::post('/kinerja', [KinerjaUtamaController::class, 'store'])->name('kinerja.store');
        Route::get('/kinerja', [KinerjaUtamaController::class, 'index'])->name('kinerja.index');
        Route::delete('/kinerja/{id}', [KinerjaUtamaController::class, 'destroy'])->name('kinerja.destroy');
        Route::get('/kinerja/{id}/edit', [KinerjaUtamaController::class, 'edit'])->name('kinerja.edit');
        Route::put('/kinerja/{id}', [KinerjaUtamaController::class, 'update'])->name('kinerja.update');

        // Indikator
        Route::get('/indikator/create', [IndikatorKinerjaController::class, 'create'])->name('indikator.create');
        Route::post('/indikator/store', [IndikatorKinerjaController::class, 'store'])->name('indikator.store');
        Route::get('/indikator/{id}/edit', [IndikatorKinerjaController::class, 'edit'])->name('indikator.edit');
        Route::put('/indikator/{id}', [IndikatorKinerjaController::class, 'update'])->name('indikator.update');
        Route::delete('/indikator/{id}', [IndikatorKinerjaController::class, 'destroy'])->name('indikator.destroy');

        // Pegawai
        Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
        Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
        Route::post('/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
        Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
        Route::put('/pegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
        Route::get('/pegawai/{id}', [PegawaiController::class, 'show'])->name('pegawai.show');
        Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');

        // Carousel
        Route::get('/carousels', [CarouselController::class, 'index'])->name('carousels.index');
        Route::get('/carousels/create', [CarouselController::class, 'create'])->name('carousels.create');
        Route::post('/carousels', [CarouselController::class, 'store'])->name('carousels.store');
        Route::get('/carousels/{carousel}/edit', [CarouselController::class, 'edit'])->name('carousels.edit');
        Route::put('/carousels/{carousel}', [CarouselController::class, 'update'])->name('carousels.update');
        Route::delete('/carousels/{carousel}', [CarouselController::class, 'destroy'])->name('carousels.destroy');
    });

    // Placeholder jika ada fitur khusus user
    Route::middleware('user')->group(function () {
        //
    });
});

require __DIR__ . '/auth.php';
