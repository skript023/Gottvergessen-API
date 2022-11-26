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
Route::post('/signup', [UserController::class, 'add_user']);

Route::get('/logout', [UserController::class, 'logout']);

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/dashboard', [UserController::class, 'dashboard']);
    Route::get('/dashboard/profile', [UserController::class, 'profile']);
    Route::get('/dashboard/users', [UserController::class, 'view_user']);
    Route::post('/dashboard/users/add', [UserController::class, 'add_user']);
    Route::post('/dashboard/users/update/{selected_user}', [UserController::class, 'update_user']);
});
