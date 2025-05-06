<?php

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('login');
Route::post('/login', [PageController::class, 'login'])->name('login.submit');


Route::get('/dashboard', [PageController::class, 'showDashboard'])->name('dashboard');
Route::get('/profile', [PageController::class, 'showProfile'])->name('profile');
Route::get('/pengelolaan', [PageController::class, 'showPengelolaan'])->name('pengelolaan');
