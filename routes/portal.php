<?php

use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Share\AdsController;
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
    Route::get('/my-ads',   [AdsController::class,'myAds']);
    Route::get('/ads-info/{ads}',   [AdsController::class,'show']);
    Route::post('/save-my-ads',   [AdsController::class,'store']);
});

