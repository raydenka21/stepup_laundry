<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BookingController;

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::post('/booking/create', [BookingController::class, 'create'])->name('booking.create');
Route::get('/menu-navbar', [MenuController::class, 'navbar'])->name('layout.menu-navbar');
Route::get('/menu-footer', [MenuController::class, 'footer'])->name('layout.menu-footer');
Route::get('/menu-share', [MenuController::class, 'share'])->name('layout.menu-share');
Route::get('/menu-colors', [MenuController::class, 'colors'])->name('layout.menu-colors');
