<?php

use App\Http\Controllers\AccommodationController;
use App\Http\Controllers\CulinaryController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PlanTravelController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth'])->prefix('admin')->group(function(){
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/akomodasi', [\App\Http\Controllers\Admin\AccommodationController::class, 'index'])->name('adminAkomodasi');
    Route::get('/tambahAkomodasi', [\App\Http\Controllers\Admin\AccommodationController::class, 'create'])->name('tambahAkomodasi');
    Route::post('/insertAkomodasi', [\App\Http\Controllers\Admin\AccommodationController::class, 'store'])->name('insertAkomodasi');

    Route::get('/tampilkandata/{id}', [\App\Http\Controllers\Admin\AccommodationController::class, 'show'])->name('tampilAkomodasi');
    Route::post('/updatedata/{id}', [\App\Http\Controllers\Admin\AccommodationController::class, 'update'])->name('updateAkomodasi');

    Route::get('/delete/{id}', [\App\Http\Controllers\Admin\AccommodationController::class, 'destroy'])->name('delete');
});


Route::get('/akomodasi', [AccommodationController::class, 'index'])->name('akomodasi');
Route::get('/destinasi', [DestinationController::class, 'index'])->name('destinasi');
Route::get('/kuliner', [CulinaryController::class, 'index'])->name('kuliner');
Route::get('/acara', [EventController::class, 'index'])->name('acara');
Route::get('/rencanakanPerjalanan', [PlanTravelController::class, 'index'])->name('rencanakanPerjalanan');

require __dir__."/auth.php";