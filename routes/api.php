<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//  return $request->user();
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('/signup', [\App\Http\Controllers\AuthController::class, 'signup']);
Route::post('/check', [\App\Http\Controllers\AuthController::class, 'check']);
Route::post('/forget_password',[\App\Http\Controllers\AuthController::class,'forget_password']);
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->middleware('auth:api');
Route::get('/profile', [\App\Http\Controllers\AuthController::class, 'profile'])->middleware('auth:api');
Route::post('/update_profile', [\App\Http\Controllers\AuthController::class, 'update'])->middleware('auth:api');
Route::post('/s',[\App\Http\Controllers\SendNotyController::class,'send'])->name('/ss');
Route::middleware('auth:api')->group(function () {
    Route::get('/rest_password',[\App\Http\Controllers\AuthController::class,'rest_password']);
    Route::post('update_phone',[\App\Http\Controllers\AuthController::class,'update_phone']);
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);
    Route::get('/profile', [\App\Http\Controllers\AuthController::class, 'profile']);
    Route::get('/orders',[\App\Http\Controllers\OrderController::class,'index']);
    Route::post('/add_order',[\App\Http\Controllers\OrderController::class,'store']);
    Route::post('/delete_order',[\App\Http\Controllers\OrderController::class,'destroy']);
    Route::post('/update_order',[\App\Http\Controllers\OrderController::class,'update']);
    Route::post('add_offer',[\App\Http\Controllers\OfferController::class,'store']);
    Route::post('/offers',[\App\Http\Controllers\OfferController::class,'index']);
    Route::post('/delete_offer',[\App\Http\Controllers\OfferController::class,'destroy']);
    Route::post('/update_offer',[\App\Http\Controllers\OfferController::class,'update']);
    Route::post('/accept',[\App\Http\Controllers\OfferController::class,'accept']);
    Route::get('/my_orders',[\App\Http\Controllers\OrderController::class,'my_order']);
    Route::get('/my_offers',[\App\Http\Controllers\OfferController::class,'my_offer']);


});

Route::get('send',[\App\Http\Controllers\SendController::class,'send']);

