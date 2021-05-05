<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Message Routes
Route::get ('/message', [MessageController::class, 'index']);

Route::post ('/message', [MessageController::class, 'store']);

Route::get ('/message/{id}', [MessageController::class, 'show']);

Route::put ('/message/{id}', [MessageController::class, 'update']);

Route::delete ('/message/{id}', [MessageController::class, 'destroy']);

// Chat Routes
Route::get ('/chat', [ChatController::class, 'index']);

Route::post ('/chat', [ChatController::class, 'store']);

Route::get ('/chat/{id}', [ChatController::class, 'show']);

Route::put ('/chat/{id}', [ChatController::class, 'update']);

Route::delete ('/chat/{id}', [ChatController::class, 'destroy']);

// Photo routes
Route::get ('/photo', [PhotoController::class, 'index']);

Route::post ('/photo', [PhotoController::class, 'store']);

Route::get ('/photo/{id}', [PhotoController::class, 'show']);

Route::patch ('/photo/{id}', [PhotoController::class, 'update']);

Route::delete ('/photo/{id}', [PhotoController::class, 'destroy']);

// User routes
Route::get ('/user', [UserController::class, 'index']);

Route::post ('/user', [UserController::class, 'store']);

Route::get ('/user/{id}', [UserController::class, 'show']);

Route::patch ('/user/{id}', [UserController::class, 'update']);

Route::delete ('/user/{id}', [UserController::class, 'destroy']);

// Auth Routes
Route::post ('/login', [AuthController::class, 'login']);
