<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiAuthController;
use App\Http\Controllers\Api\ApiMemberController;

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

// Public routes
Route::prefix('auth')->group(function () {
    Route::post('/register', [ApiAuthController::class, 'register'])->name('api.auth.register');
    Route::post('/login', [ApiAuthController::class, 'login'])->name('api.auth.login');
});

// Protected routes (require token)
Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::get('/me', [ApiAuthController::class, 'me'])->name('api.auth.me');
        Route::post('/logout', [ApiAuthController::class, 'logout'])->name('api.auth.logout');
    });

    Route::prefix('members')->group(function () {
        Route::get('/', [ApiMemberController::class, 'index'])->name('api.members.index');
        Route::get('/{id}', [ApiMemberController::class, 'show'])->name('api.members.show');
        Route::put('/{id}', [ApiMemberController::class, 'update'])->name('api.members.update');
        Route::delete('/{id}', [ApiMemberController::class, 'destroy'])->name('api.members.destroy');
    });
});
