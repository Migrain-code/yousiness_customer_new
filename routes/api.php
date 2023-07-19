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
use \App\Http\Controllers\Api\AdsController;
use App\Http\Controllers\Api\AppointmentController;
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
    Route::post('/verify/code', [AuthController ::class, 'verifyCode']);
});
Route::prefix('customer')->group(function (){
    Route::get('/get', [CustomerController::class, 'getUser']);
    Route::get('/favorite/list', [CustomerController::class, 'getFavorites']);
    Route::get('/deal/list', [CustomerController::class, 'getDealList']);
    Route::get('/order/list', [CustomerController::class, 'getOrderList']);
    Route::get('/packet/list', [CustomerController::class, 'getPacketList']);
    Route::get('/appointment/list', [CustomerController::class, 'getAppointmentList']);
    Route::post('/appointment/get', [CustomerController::class, 'getAppointmentDetail']);
    Route::get('/appointment/upcoming/list', [CustomerController::class, 'getAppointmentUpcomingList']);
    Route::get('/comment/list', [CustomerController::class, 'getCommentList']);
    Route::post('update/profile', [CustomerController::class, 'updateProfile']);
    Route::post('update/password', [CustomerController::class, 'updatePassword']);
    Route::post('update/image', [CustomerController::class, 'updateImage']);
});
Route::prefix('appointment')->group(function (){
    Route::post('/business/get', [AppointmentController::class, 'businessGet']);
    Route::post('/personal/get', [AppointmentController::class, 'personalGet']);
    Route::post('/date/get', [AppointmentController::class, 'getDate']);
    Route::post('/clock/get', [AppointmentController::class, 'getClock']);
});
Route::prefix('city')->group(function (){
   Route::get('list', [CityController::class, 'index']);
   Route::post('get', [CityController::class, 'get']);
});

Route::prefix('activity')->group(function (){
    Route::get('list', [ActivityController::class, 'index']);
    Route::post('get', [ActivityController::class, 'get']);
    Route::post('join', [ActivityController::class, 'personelControl']);
});
Route::prefix('ads')->group(function (){
   Route::get('list', [AdsController::class, 'list']);
});
Route::prefix('blog')->group(function (){
    Route::get('list', [BlogController::class, 'index']);
    Route::post('get', [BlogController::class, 'get']);
});

Route::prefix('services')->group(function (){
    Route::get('list' ,[ServiceController::class, 'index']);
});

Route::prefix('salons')->group(function (){
    Route::get('all', [SalonController::class, 'all']);
    Route::post('get', [SalonController::class, 'get']);
    Route::get('list', [SalonController::class, 'index']);
    Route::get('popular', [SalonController::class, 'popular']);
    Route::post('hizmet', [SalonController::class, 'popularServices']);
});

Route::prefix('search')->group(function (){
   Route::post('service', [SearchController::class, 'searchService']);
   Route::post('business/type', [SearchController::class, 'searchBusinessType']);
   Route::post('business/name', [SearchController::class, 'searchBusinessName']);
});
