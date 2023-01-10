<?php

use App\Http\Controllers\ApiUserController;
use App\Http\Controllers\BinaryController;
use App\Http\Controllers\ClientMonitorController;
use App\Http\Controllers\CostumeController;
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

Route::post('/v1/auth/login', [ApiUserController::class, 'login']);
Route::get('/v1/version', [BinaryController::class, 'get_loader_version']);
Route::post('/v1/logging', [ClientMonitorController::class, 'receive_log']);
Route::post('/v1/costume', [CostumeController::class, 'costumes']);

Route::group(['middleware' => 'auth:sanctum'], function() {

    Route::get('/v1/binary/all', [BinaryController::class, 'all_games']);
    Route::get('/v1/auth/logout', [ApiUserController::class, 'logout']);
});

Route::group(['middleware' => ['auth:sanctum', 'ownership', 'subscription']], function() {
    Route::post('/v1/binary/version', [BinaryController::class, 'binary_version']);
    Route::post('/v1/binary/shellcode', [BinaryController::class, 'binary']);
});
/*
TSQ ulang / Resubmit / Munculkan di WFM
Copy Order -> Check di OSM -> jika sudah abort & TSQ/Deliver -> Lanjut ke EAI copy ordernya
check carent sudah pernah TSQ ulang atau belum -> check status telkom metro node -> lalu diubah ke failed
TSQ maka TSQ failed bila deliver maka Provision failed -> Milestone TSQ in progress ke TSQ Failed.
Check siebel apakah tombol cancel udah muncul atau belum -> lalu submit & tunggu 1-2 menit. -> check OSM lagi.
bila belum muncul IN_PROGRESS pada ORDER STATUS -> lalu buka EAI dan lakukan Retry

Jika proses TSQ di OSM sudah in progress maka cek WFM bagian LAST STEP = STARTWORK jika sudah langsung resolve

BASO
Buka Sygap -> check OSM statusnya Completed & deliver -> buka EAI buka child  bila service id tidak ada maka check carent
copy INT ID -> lalu paste di OSM -> click preview -> bila progress sudah BASO maka langsung resolve
bila sudah baso check di Carent untuk meyakinkan



Belajar NCX dasar & cari SID dari antara 2 line item berbeda & resolve tiket di sygap

CA : 2-9950675091
2-9950683200

SA: 2-9950683355
SA Site: 2-4KKDOEZ
Oppor: 2-9950683399
Quote ID :2-9950735437
*/
