<?php

use App\Http\Controllers\SmsTransactionController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('/send-sms', [SmsTransactionController::class, 'send_smsform'])->name('sms.show')
->middleware(['auth', 'verified']);

Route::get('/import-users', [UsersController::class, 'import_file_form'])->name('import.users')
->middleware(['auth', 'verified']);

Route::post('/import-users', [UsersController::class, 'request_import_file'])->name('import.users')
->middleware(['auth', 'verified']);
