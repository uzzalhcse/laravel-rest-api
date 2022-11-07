<?php

use App\Http\Controllers\Acl\RolePermissionController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RoleController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\MessageController;
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


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware(['auth:api'])->group(function () {
    // our routes to be protected will go in here

    Route::get('/info', [AuthController::class, 'info']);
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/billing-address', [AuthController::class, 'billingAddress']);
    Route::post('/save-billing-address', [AuthController::class, 'saveBillingAddress']);

    Route::post('/update-profile', [AuthController::class, 'updateProfile']);
    Route::post('/update-password', [AuthController::class, 'updatePassword']);

    Route::get('/get-modules',     [RolePermissionController::class, 'allModules'])->name('role-and-permissions.allModules');
    Route::get('/get-modules',     [RolePermissionController::class, 'allModules'])->name('role-and-permissions.allModules');

    Route::apiResource('/users',   UserController::class);
    Route::apiResource('/roles',   RoleController::class);


    Route::post('/purchase-package', [UserController::class, 'purchasePackage']);
    Route::post('/payout-request', [UserController::class, 'payoutRequest']);
    Route::post('/payout-history',   [UserController::class,'payoutHistory']);

    Route::get('/contacts',   [MessageController::class,'contacts']);
    Route::get('/fetch-messages/{sender_id}',   [MessageController::class,'fetchMessages']);
    Route::post('/send-message',   [MessageController::class,'sendMessage']);
    Route::get('/get-payment-indent',   [AuthController::class,'getPaymentIndent']);


    Route::get('/my-notifications',   [AuthController::class,'myNotifications']);
    Route::get('/delete-my-account',   [AuthController::class,'deleteMyAccount']);

    Route::get('/test',                     [\App\Http\Controllers\TestController::class, 'test']);

});

