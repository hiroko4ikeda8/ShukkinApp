<?php

use App\Livewire\Attendance;
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

Route::view('/', 'welcome')->name('home');

// Route::middleware(['auth'])->group(function () {
    Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

    Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    Route::get('/attendance', Attendance::class)->name('attendance');

// });

require __DIR__.'/auth.php';
