<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\FailedJobController;
use App\Http\Controllers\PasswordResetTokenController;

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


Route::apiResource('users', UserController::class);

Route::apiResource('personal-access-tokens', TokenController::class);

Route::apiResource('failed-jobs', FailedJobController::class);

Route::apiResource('password-reset-tokens', PasswordResetTokenController::class);
