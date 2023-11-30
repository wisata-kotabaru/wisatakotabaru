<?php

use App\Http\Controllers\AccommodationController;
use App\Http\Controllers\CulinaryController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PlanTravelController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middlewa9re group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/akomodasi', [\App\Http\Controllers\Admin\AccommodationController::class, 'index'])->name('adminAkomodasi');
Route::get('/admin/tambahAkomodasi', [\App\Http\Controllers\Admin\AccommodationController::class, 'create'])->name('adminTambahAkomodasi');
Route::post('/admin/insertAkomodasi', [\App\Http\Controllers\Admin\AccommodationController::class, 'store'])->name('adminInsertAkomodasi');

Route::get('/admin/tampilkandata/{id}', [\App\Http\Controllers\Admin\AccommodationController::class, 'show'])->name('adminTampilkanData');
Route::post('/admin/updatedata/{id}', [\App\Http\Controllers\Admin\AccommodationController::class, 'update'])->name('adminUpdateData');

Route::get('/delete/{id}', [\App\Http\Controllers\Admin\AccommodationController::class, 'destroy'])->name('delete');

});

Route::get('/akomodasi', [AccommodationController::class, 'index'])->name('akomodasi');
Route::get('/destinasi', [DestinationController::class, 'index'])->name('destinasi');
Route::get('/kuliner', [CulinaryController::class, 'index'])->name('kuliner');
Route::get('/acara', [EventController::class, 'index'])->name('acara');
Route::get('/rencanakanPerjalanan', [PlanTravelController::class, 'index'])->name('rencanakanPerjalanan');

require __dir__."/auth.php";