<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Customer\AuthController;
use App\Http\Controllers\Api\Customer\CustomerController;
use App\Http\Controllers\Api\City\CityController;
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

