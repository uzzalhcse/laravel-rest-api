<?php

use App\Http\Controllers\AdsController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Customization\FaqController;
use App\Http\Controllers\Customization\PageController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\Share\UtilsController;
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

Route::get('/statuses',                     [UtilsController::class, 'statuses']);
Route::get('/countries',                    [UtilsController::class, 'countries']);
Route::get('/blogs',                        [BlogController::class, 'index']);
Route::get('/blogs/{blog}',                 [BlogController::class, 'show']);
Route::get('/homepage',                     [UtilsController::class, 'homepage']);
Route::get('/campaigns',                          [AdsController::class, 'index']);
Route::get('/popular-campaigns',                          [AdsController::class, 'popularAds']);
Route::get('/faq',                          [UtilsController::class, 'faq']);
Route::get('/packages',                     [UtilsController::class, 'packages']);
Route::get('/service-providers',            [UtilsController::class, 'serviceProviders']);
Route::post('/newsletter',                     [NewsletterController::class, 'store']);











Route::get('/clear',                     [UtilsController::class, 'clear']);

