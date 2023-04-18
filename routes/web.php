<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\UserController;
Route::get('/', [UserController::class, 'index']);
Route::resource('users', UserController::class)->parameters([ 'users' => 'user']);
Route::delete('/users/{id}', 'UserController@destroy')->name('users.destroy');