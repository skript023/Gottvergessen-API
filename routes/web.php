<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientMonitorController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UserController::class, 'home'])->name('login');
Route::post('/login', [UserController::class, 'login']);

Route::get('/register', fn() => view('register'));
Route::post('/signup', [UserController::class, 'user_registration']);

Route::get('/logout', [UserController::class, 'logout']);

Route::group(['middleware' => ['auth', 'admin', 'verified']], function()
{
    Route::get('/dashboard/logging',[ClientMonitorController::class, 'load_logs']);
    Route::get('/dashboard', [UserController::class, 'dashboard']);
    Route::get('/dashboard/users', [UserController::class, 'view_user']);
    Route::post('/dashboard/users/add', [UserController::class, 'add_user']);
    Route::get('/dashboard/users?page={page}', [UserController::class, 'view_user']);
    Route::post('/dashboard/users/update/{selected_user}', [UserController::class, 'update_user']);
    Route::post('/dashboard/users/delete/{selected_user}', [UserController::class, 'update_user']);
});

Route::group(['middleware' => ['auth', 'verified']], function()
{
    Route::post('/dashboard/users/profile/update/{selected_user}', [UserController::class, 'update_profile']);
    Route::get('/dashboard/profile', [UserController::class, 'profile']);
});


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard/profile');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');