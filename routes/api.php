<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BlogController;

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

Route::post('register', 'App\Http\Controllers\API\AuthController@signup');
Route::post('login', 'App\Http\Controllers\API\AuthController@signin');     

/*Route::middleware('auth:sanctum')->group( function () {
    Route::resource('blogs', BlogController::class);
});*/

Route::apiResource('blogs', 'App\Http\Controllers\API\BlogController')->middleware('auth:sanctum');
