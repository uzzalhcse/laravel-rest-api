<?php

use App\Http\Controllers\AdsController;
use App\Http\Controllers\AdsSubscriptionController;
use App\Http\Controllers\BillboardController;
use App\Http\Controllers\TransactionController;
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
    Route::put('/update-my-ads/{ads}',   [AdsController::class,'update']);


    Route::get('/my-billboards',   [BillboardController::class,'myBillBoard']);
    Route::get('/billboard-info/{billboard}',   [BillboardController::class,'show']);
    Route::post('/save-my-billboard',   [BillboardController::class,'store']);
    Route::put('/update-my-billboard/{billboard}',   [BillboardController::class,'update']);

    Route::get('/my-subscriptions',   [AdsSubscriptionController::class,'index']);
    Route::get('/subscribe-ads/{ads}',   [AdsSubscriptionController::class,'subscribeAds']);
    Route::get('/unsubscribe-ads/{ads}',   [AdsSubscriptionController::class,'unsubscribeAds']);
    Route::post('/submit-rating',   [AdsSubscriptionController::class,'submitRating']);


    Route::get('/purchase-history',   [TransactionController::class,'purchaseHistory']);
});

