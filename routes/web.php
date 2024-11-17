<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KandidatController;
use App\Http\Controllers\Admin\MonitoringController;
use App\Http\Controllers\Admin\PemilihController;
use App\Http\Controllers\Admin\TokenController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\VoteController;
use App\Http\Middleware\EnsureHaveToken;
use App\Http\Middleware\EnsureSuccessVote;
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
    Route::post('/start-vote', [VoteController::class, 'start_vote'])->name('start.vote');

    Route::get('/vote-candidate', [VoteController::class, 'vote_kandidat']);
    Route::post('/vote/{id}', [VoteController::class, 'vote'])->name('vote');
    Route::get('/success-vote', [VoteController::class, 'success_vote']);

    // Authentication
    Route::prefix('auth')->group(function () {
        Route::get('/login', [LoginController::class, 'index'])->name('login');
        Route::post('/login', [LoginController::class, 'login'])->name('login');
        // Route::get('/register', [RegisterController::class, 'index'])->name('register');
        // Route::post('/register', [RegisterController::class, 'register'])->name('register');
    });
});

Route::middleware('auth')->group(function () {
    Route::prefix('app')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('app.dashboard');
        Route::get('/candidate', [KandidatController::class, 'index'])->name('app.candidate');
        Route::get('/candidate/create', [KandidatController::class, 'create'])->name('app.candidate.create');
        // Route::post('/upload', [KandidatController::class, 'upload'])->name('upload');
        Route::post('/candidate/store', [KandidatController::class, 'store'])->name('app.candidate.store');
        Route::get('/candidate/edit/{id}', [KandidatController::class, 'edit'])->name('app.candidate.edit');
        Route::post('/candidate/update/{id}', [KandidatController::class, 'update'])->name('app.candidate.update');
        Route::delete('/candidate/destroy/{id}', [KandidatController::class, 'destroy'])->name('app.candidate.destroy');
        Route::get('/token', [TokenController::class, 'index'])->name('app.token');
        Route::post('/token/bulk', [TokenController::class, 'bulk'])->name('app.token.bulk');
        Route::delete('/token/destroy/{status}', [TokenController::class, 'destroy'])->name('app.token.destroy');
        Route::get('/token/export', [TokenController::class, 'export'])->name('app.token.export');
        Route::get('/voters', [PemilihController::class, 'index'])->name('app.voters');
        Route::delete('/voters/destroy/{status}', [PemilihController::class, 'destroy'])->name('app.voters.destroy');
        Route::get('/monitoring', [MonitoringController::class, 'index'])->name('app.monitoring');

        // Logging out
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    });
});
