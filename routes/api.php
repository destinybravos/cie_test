<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

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

Route::post('/register-user', [UserController::class, 'register']);

Route::prefix('user')->group(function(){
    Route::post('/update_profile', [UserController::class, 'update']);
    Route::post('/fetch_friends', [UserController::class, 'fetch_friends']);
});

Route::prefix('posts')->group(function(){
    Route::post('/sharefeed', [PostController::class, 'share']);
    Route::post('/fetchfeeds', [PostController::class, 'fetchfeeds']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
