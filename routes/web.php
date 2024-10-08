<?php

use App\Http\Controllers\PortfolioController; // Pastikan ini sudah sesuai
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/project/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');
