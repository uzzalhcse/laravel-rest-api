<?php

use App\Http\Controllers\Acl\RolePermissionController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Services\Payment\Ekpay\PaymentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/pay', [PaymentController::class, 'payNow']);
Route::get('/payment/{status}/{appId}', [PaymentController::class, 'paymentStatus']);
Route::get('/api/ipn-handler', [PaymentController::class, 'ipnHandler']);
Route::get('/test', [\App\Http\Controllers\TestController::class, 'test']);
Route::get('/test-email', [\App\Http\Controllers\TestController::class, 'testEmail']);
Route::get('/modules', [RolePermissionController::class, 'allModules']);

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/pricing',[HomeController::class,'pricing'])->name('pricing');
Route::get('/globalcoverage',[HomeController::class,'globalcoverage'])->name('globalcoverage');
Route::get('/whyatc',[HomeController::class,'whyatc'])->name('whyatc');

Route::get('/viewall',[HomeController::class,'viewall'])->name('viewall');
//Route::get('/enable-maintenance-mode/{key}',[HomeController::class,'maintenanceMode']);
//Route::get('/disable-maintenance-mode/{key}',[HomeController::class,'disableMaintenanceMode']);
