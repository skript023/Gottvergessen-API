<?php

use App\Http\Controllers\UserController;
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
    Route::get('/dashboard', [UserController::class, 'dashboard']);
    Route::get('/dashboard/users', [UserController::class, 'view_user']);
    Route::post('/dashboard/users/add', [UserController::class, 'add_user']);
    Route::get('/dashboard/users?page={page}', [UserController::class, 'view_user']);
    Route::post('/dashboard/users/update/{selected_user}', [UserController::class, 'update_user']);
    Route::post('/dashboard/users/delete/{selected_user}', [UserController::class, 'update_user']);
});

Route::group(['middleware' => 'auth'], function()
{
    Route::post('/dashboard/users/profile/update/{selected_user}', [UserController::class, 'update_profile']);
    Route::get('/dashboard/profile', [UserController::class, 'profile']);
});
