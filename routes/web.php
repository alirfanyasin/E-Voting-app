<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KandidatController;
use App\Http\Controllers\Admin\MonitoringController;
use App\Http\Controllers\Admin\PemilihController;
use App\Http\Controllers\Admin\TokenController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\VoteController;
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

Route::middleware('guest')->group(function () {
    Route::get('/', [VoteController::class, 'index']);
    Route::get('/vote-kandidat', [VoteController::class, 'vote_kandidat']);

    // Authentication
    Route::prefix('auth')->group(function () {
        Route::get('/login', [LoginController::class, 'index'])->name('login');
        Route::post('/login', [LoginController::class, 'login'])->name('login');
        Route::get('/register', [RegisterController::class, 'index'])->name('register');
        Route::post('/register', [RegisterController::class, 'register'])->name('register');
    });
});

Route::middleware('auth')->group(function () {
    Route::prefix('app')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('app.dashboard');
        Route::get('/candidate', [KandidatController::class, 'index'])->name('app.candidate');
        Route::get('/candidate/create', [KandidatController::class, 'create'])->name('app.candidate.create');
        Route::post('/candidate/store', [KandidatController::class, 'store'])->name('app.candidate.store');
        Route::get('/candidate/edit/{id}', [KandidatController::class, 'edit'])->name('app.candidate.edit');
        Route::post('/candidate/update/{id}', [KandidatController::class, 'update'])->name('app.candidate.update');
        Route::delete('/candidate/destroy/{id}', [KandidatController::class, 'destroy'])->name('app.candidate.destroy');
        Route::get('/token', [TokenController::class, 'index'])->name('app.token');
        Route::get('/pemilih', [PemilihController::class, 'index'])->name('app.pemilih');
        Route::get('/monitoring', [MonitoringController::class, 'index'])->name('app.monitoring');

        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    });
});
