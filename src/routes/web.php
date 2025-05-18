<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
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
    // Route::view('dashboard', 'dashboard')
    // ->middleware(['auth', 'verified'])
    // ->name('dashboard');

    // Route::view('profile', 'profile')
    // ->middleware(['auth'])
    // ->name('profile');

Route::view('/dashboard', 'dashboard')->name('dashboard'); // ✅ 認証なしで表示できるように！
Route::view('/profile', 'profile')->name('profile'); // ✅ 認証なしで表示できるように！
Route::view('/attendance', 'pages.attendance')->name('attendance');
Route::view('/attendance/list', 'pages.attendance-list')->name('attendance.list');
Route::view('/attendance/{id}', 'pages.attendance-details')->name('attendance.details');

Route::view('/stamp_correction_request/list', 'pages.stamp_correction_request_list')->name('stamp_correction_request.list');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


// });

require __DIR__.'/auth.php';
