<?php

use App\Http\Controllers\ApiUserController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/test', function () {
    return response()->json(['message' => 'Test API Success']);
})->middleware('auth:sanctum');

// Route::group(['middleware' => 'auth:sanctum'], function() {
    
// });

Route::post('/v1/costume', [ApiUserController::class, 'costumes']);
Route::post('/v1/binary/version', [ApiUserController::class, 'binary_version']);

Route::post('/v1/auth/login', [ApiUserController::class, 'login']);