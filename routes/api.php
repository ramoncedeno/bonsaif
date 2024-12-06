<?php

use App\Http\Controllers\SmsTransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/send-sms/{phone}/{message}', [SmsTransactionController::class, 'sendSMS'])->name('sms.send');
Route::post('/send-sms/{phone}/{message}', [SmsTransactionController::class, 'sendSMS'])->name('sms.send');
