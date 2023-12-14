<?php

use App\Http\Controllers\AccommodationController;
use App\Http\Controllers\CulinaryController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PlanTravelController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth'])->prefix('admin')->group(function(){

    // Route Admin Akomodasi
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/akomodasi', [\App\Http\Controllers\Admin\AccommodationController::class, 'index'])->name('adminAkomodasi');
    Route::get('/tambahAkomodasi', [\App\Http\Controllers\Admin\AccommodationController::class, 'create'])->name('tambahAkomodasi');
    Route::post('/insertAkomodasi', [\App\Http\Controllers\Admin\AccommodationController::class, 'store'])->name('insertAkomodasi');
    Route::get('/akomodasi/{id}', [\App\Http\Controllers\Admin\AccommodationController::class, 'show'])->name('tampilAkomodasi');
    Route::post('/updateAkomodasi/{id}', [\App\Http\Controllers\Admin\AccommodationController::class, 'update'])->name('updateAkomodasi');
    Route::get('/deleteAkomodasi/{id}', [\App\Http\Controllers\Admin\AccommodationController::class, 'destroy'])->name('deleteAkomodasi');

    // Route Admin Kuliner
    Route::get('/kuliner', [\App\Http\Controllers\Admin\CulinaryController::class, 'index'])->name('adminKuliner');
    Route::get('/tambahKuliner', [\App\Http\Controllers\Admin\CulinaryController::class, 'create'])->name('tambahKuliner');
    Route::post('/insertKuliner', [\App\Http\Controllers\Admin\CulinaryController::class, 'store'])->name('insertKuliner');
    Route::get('/kuliner/{id}', [\App\Http\Controllers\Admin\CulinaryController::class, 'show'])->name('tampilKuliner');
    Route::post('/updateKuliner/{id}', [\App\Http\Controllers\Admin\CulinaryController::class, 'update'])->name('updateKuliner');
    Route::get('/deleteKuliner/{id}', [\App\Http\Controllers\Admin\CulinaryController::class, 'destroy'])->name('deleteKuliner');

    // Route Admin Acara
    Route::get('/acara', [\App\Http\Controllers\Admin\EventController::class, 'index'])->name('adminAcara');
    Route::get('/tambahAcara', [\App\Http\Controllers\Admin\EventController::class, 'create'])->name('tambahAcara');
    Route::post('/insertAcara', [\App\Http\Controllers\Admin\EventController::class, 'store'])->name('insertAcara');
    Route::get('/acara/{id}', [\App\Http\Controllers\Admin\EventController::class, 'show'])->name('tampilAcara');
    Route::post('/updateAcara/{id}', [\App\Http\Controllers\Admin\EventController::class, 'update'])->name('updateAcara');
    Route::get('/deleteAcara/{id}', [\App\Http\Controllers\Admin\EventController::class, 'destroy'])->name('deleteAcara');

    // Route Admin Destinasi
    Route::get('/destinasi', [\App\Http\Controllers\Admin\DestinationController::class, 'index'])->name('adminDestinasi');
    Route::get('/tambahDestinasi', [\App\Http\Controllers\Admin\DestinationController::class, 'create'])->name('tambahDestinasi');
    Route::post('/insertDestinasi', [\App\Http\Controllers\Admin\DestinationController::class, 'store'])->name('insertDestinasi');
    Route::get('/destinasi/{id}', [\App\Http\Controllers\Admin\DestinationController::class, 'show'])->name('tampilDestinasi');
    Route::post('/updateDestinasi/{id}', [\App\Http\Controllers\Admin\DestinationController::class, 'update'])->name('updateDestinasi');
    Route::get('/deleteDestinasi/{id}', [\App\Http\Controllers\Admin\DestinationController::class, 'destroy'])->name('deleteDestinasi');
});





Route::get('/homepage', [HomepageController::class, 'index'])->name('homepage');

// Akomodasi
Route::get('/akomodasi', [AccommodationController::class, 'index'])->name('akomodasi');
Route::get('/detailAkomodasi/{id}', [AccommodationController::class, 'detailAkomodasi'])->name('detailAkomodasi');
// Route::get('/detailAkomodasi', [AccommodationController::class, 'detailAkomodasi'])->name('detailAkomdoasi');

// Destinasi
Route::get('/destinasi', [DestinationController::class, 'index'])->name('destinasi');
Route::get('/detailDestinasi', [DestinationController::class, 'detailDestinasi'])->name('detailDestinasi');

// Kuliner
Route::get('/kuliner', [CulinaryController::class, 'index'])->name('kuliner');
Route::get('/detailKuliner', [CulinaryController::class, 'detailKuliner'])->name('detailKuliner');

// Acara
Route::get('/acara', [EventController::class, 'index'])->name('acara');
Route::get('/detailAcara/{id}', [EventController::class, 'detailAcara'])->name('detailAcara');
require __dir__."/auth.php";