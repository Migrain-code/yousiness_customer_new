<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Customer\AuthController;
use App\Http\Controllers\Api\Customer\CustomerController;
use App\Http\Controllers\Api\City\CityController;
use App\Http\Controllers\Api\Activity\ActivityController;
use App\Http\Controllers\Api\Blog\BlogController;
use App\Http\Controllers\Api\Service\ServiceController;
use \App\Http\Controllers\Api\Salon\SalonController;
use App\Http\Controllers\Api\Search\SearchController;
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

Route::prefix('auth')->group(function (){
    Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:10,1');
    Route::post('/register', [AuthController::class, 'register'])->middleware('throttle:10,1');
    Route::post('/password-reset', [AuthController::class, 'passwordReset'])->middleware('throttle:10,1');
});
Route::prefix('customer')->group(function (){
    Route::get('/get', [CustomerController::class, 'getUser']);
    Route::get('/favorite/list', [CustomerController::class, 'getFavorites']);
    Route::get('/deal/list', [CustomerController::class, 'getDealList']);
    Route::get('/order/list', [CustomerController::class, 'getOrderList']);
    Route::get('/packet/list', [CustomerController::class, 'getPacketList']);
    Route::get('/appointment/list', [CustomerController::class, 'getAppointmentList']);

    Route::post('update/profile', [CustomerController::class, 'updateProfile']);
    Route::post('update/password', [CustomerController::class, 'updatePassword']);
});

Route::prefix('city')->group(function (){
   Route::get('list', [CityController::class, 'index']);
   Route::post('get', [CityController::class, 'get']);
});

Route::prefix('activity')->group(function (){
    Route::get('list', [ActivityController::class, 'index']);
    Route::post('get', [ActivityController::class, 'get']);
});

Route::prefix('blog')->group(function (){
    Route::get('list', [BlogController::class, 'index']);
    Route::post('get', [BlogController::class, 'get']);
});

Route::prefix('services')->group(function (){
    Route::get('list' ,[ServiceController::class, 'index']);
});

Route::prefix('salons')->group(function (){
    Route::get('list', [SalonController::class, 'index']);
});

Route::prefix('search')->group(function (){
   Route::post('service', [SearchController::class, 'searchService']);
   Route::post('business/type', [SearchController::class, 'searchBusinessType']);
   Route::post('business/name', [SearchController::class, 'searchBusinessName']);
});
