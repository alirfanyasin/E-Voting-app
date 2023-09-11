<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KandidatController;
use App\Http\Controllers\Admin\MonitoringController;
use App\Http\Controllers\Admin\PemilihController;
use App\Http\Controllers\Admin\TokenController;
use App\Http\Controllers\VoteController;
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

Route::get('/', [VoteController::class, 'index']);
Route::get('/vote-kandidat', [VoteController::class, 'vote_kandidat']);

Route::prefix('app')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('app.dashboard');
    Route::get('/candidate', [KandidatController::class, 'index'])->name('app.candidate');
    Route::get('/candidate/create', [KandidatController::class, 'create'])->name('app.candidate.create');
    Route::get('/token', [TokenController::class, 'index'])->name('app.token');
    Route::get('/pemilih', [PemilihController::class, 'index'])->name('app.pemilih');
    Route::get('/monitoring', [MonitoringController::class, 'index'])->name('app.monitoring');
});
