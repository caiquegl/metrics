<?php

use App\Http\Controllers\AuthLivingController;
use App\Http\Controllers\QrCodeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TwilioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/whats', [TwilioController::class, 'enviarMensagem']);
Route::get('/email', [TwilioController::class, 'enviarEmail']);

Route::prefix('/living')->group(function () {
    Route::post('/auth/login', [AuthLivingController::class, 'login']);
    Route::post('/qr-code/validate/{qr_code_uuid}', QrCodeController::class);
});

