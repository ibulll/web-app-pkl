<?php

use App\Http\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Admin\UserController;
use App\Http\Controllers\AuthenticationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login',[AuthenticationController::class, 'login']);
Route::get('/logout',[AuthenticationController::class, 'logout'])->middleware(['auth:sanctum']);

Route::get('/dashboard',[App\Http\Controllers\Api\Admin\DashboardController::class])->middleware(['auth:sanctum']);

Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show']); 
Route::post('addnew', [UserController::class, 'store']); 
Route::put('usersupdate/{id}', [UserController::class, 'update']);
Route::delete('usersdelete/{id}', [UserController::class, 'destroy']);
   

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('check.user.login')->group(function () {
//     // Rute yang memerlukan otentikasi di sini
//     Route::get('/dashboard', 'ApiController@dashboard');
// });

// Route::post('/login', 'ApiController@login');
// Route::middleware('auth:api')->post('/logout', 'ApiController@logout');

