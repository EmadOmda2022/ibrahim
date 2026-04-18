<?php

use App\Http\Controllers\SiteContentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteContentController::class, 'home'])->name('site.home');
Route::get('/dashboard', [SiteContentController::class, 'edit'])->name('dashboard.edit');
Route::put('/dashboard/homepage', [SiteContentController::class, 'update'])->name('dashboard.update');
