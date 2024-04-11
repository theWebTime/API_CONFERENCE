<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

// Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
// Route::post('user-login', [AuthController::class, 'userLogin']);
Route::group(['middleware' => ['auth:api', 'checkRole:admin']],  function () {


});
Route::group(['middleware' => ['auth:api', 'checkRole:conferenceOwner']],  function () {


});
Route::group(['middleware' => ['auth:api', 'checkRole:admin,conferenceOwner']],  function () {


});

Route::group(['middleware' => ['auth:api']],  function () {
    Route::post('logout', [AuthController::class, 'logout']);
    // Profile Routes
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::post('/profile_update', [AuthController::class, 'profile_update']);
});