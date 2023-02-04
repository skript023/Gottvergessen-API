<?php

use App\Http\Controllers\ApiUserController;
use App\Http\Controllers\BinaryController;
use App\Http\Controllers\ClientMonitorController;
use App\Http\Controllers\CostumeController;
use App\Http\Controllers\IntegrationTask;
use App\Http\Controllers\ScheduledTask;
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

Route::get('/v1/test', function () 
{
    return response()->json(['message' => 'Test API Success']);
})->middleware('auth:sanctum');

Route::post('/v1/auth/login', [ApiUserController::class, 'login']);
Route::get('/v1/version', [BinaryController::class, 'get_loader_version']);
Route::post('/v1/logging', [ClientMonitorController::class, 'receive_log']);
Route::get('v1/scheduled', [ScheduledTask::class, 'scheduled_task']);
Route::post('/v1/integration/grants-access', [IntegrationTask::class, 'validate_injection']);


Route::group(['middleware' => ['auth']], function() 
{
    
});

Route::group(['middleware' => 'auth:sanctum'], function() 
{
    Route::post('/v1/costume', [CostumeController::class, 'costumes']);
    Route::get('/v1/binary/all', [BinaryController::class, 'all_games']);
    Route::get('/v1/auth/logout', [ApiUserController::class, 'logout']);
});

Route::group(['middleware' => ['auth:sanctum', 'ownership', 'subscription']], function() 
{
    Route::post('/v1/binary/version', [BinaryController::class, 'binary_version']);
    Route::post('/v1/binary/shellcode', [BinaryController::class, 'binary']);
    Route::get('/v1/heartbeat/device-check', [IntegrationTask::class, 'update_login_time']);
});

