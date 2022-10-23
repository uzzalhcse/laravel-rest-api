<?php

use App\Http\Controllers\AdsController;
use App\Http\Controllers\AdsSubscriptionController;
use App\Http\Controllers\AuditionController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\BillboardController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Share\UtilsController;
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


Route::middleware(['auth:api'])->group(function () {
    // our routes to be protected will go in here

    Route::get('/dashboard',   [AuthController::class,'adminDashboard']);

    Route::apiResource('/blogs',   BlogController::class);
    Route::apiResource('/ads',   AdsController::class);
    Route::get('/update-ads-status/{ads}/{status}',   [AdsController::class,'updateStatus']);

    Route::apiResource('/billboards',   BillboardController::class);
    Route::get('/update-billboard-status/{billboard}/{status}',   [BillboardController::class,'updateStatus']);
    Route::get('/users',   [UserController::class,'index']);
    Route::get('/update-user-status/{user}/{status}',   [UserController::class,'updateStatus']);


    Route::get('/activity-logs',   [UtilsController::class,'activityLogs']);



    Route::get('/transaction-history',   [TransactionController::class,'index']);
    Route::get('/payout-history',   [TransactionController::class,'payoutHistory']);
    Route::post('/payout-status-update',   [TransactionController::class,'payoutStatusUpdate']);
    Route::get('/mark-transaction-as-completed/{transaction}',   [TransactionController::class,'markAsCompleted']);
    Route::get('/add-coverage/{country}',   [AuthController::class,'addCoverage']);


    Route::get('/user-profile/{user}',   [UserController::class,'userProfile']);


    Route::post('/all-ads-report/{user}',   [AuditionController::class,'allAdsReports']);
    Route::get('/all-subscriptions/{user}',   [AdsSubscriptionController::class,'allItems']);
    Route::post('/all-payout-history/{user}',   [UserController::class,'allPayoutHistory']);
});

