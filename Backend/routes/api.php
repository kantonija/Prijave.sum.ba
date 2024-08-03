<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;


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

Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
    Route::post('/users/{userId}/assign-role', [UserController::class, 'assignRole']);
    Route::get('/users/{userId}/check-role/{roleName}', [UserController::class, 'checkUserRole']);
});
