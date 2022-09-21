<?php

use App\Http\Controllers\AdsController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\BillboardController;
use App\Http\Controllers\Blog\BlogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware(['auth:sanctum'])->group(function () {
    // our routes to be protected will go in here

//    Route::get('/info', [AuthController::class, 'info']);

    Route::apiResource('/blogs',   BlogController::class);
    Route::apiResource('/ads',   AdsController::class);
    Route::get('/update-ads-status/{ads}/{status}',   [AdsController::class,'updateStatus']);

    Route::apiResource('/billboards',   BillboardController::class);
    Route::get('/update-billboard-status/{billboard}/{status}',   [BillboardController::class,'updateStatus']);
    Route::get('/users',   [UserController::class,'index']);
    Route::get('/update-user-status/{user}/{status}',   [UserController::class,'updateStatus']);
});

