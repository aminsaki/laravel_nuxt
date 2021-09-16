<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\Api\Users as Api;
use App\Http\Controllers\V1\Api\Auth as Auth;



/*Auth LOGIN */
Route::post('login', [Auth\LoginController::class, 'login']);
Route::post('reigster', [Auth\ReigsterController::class, 'reigster']);

//Route::middleware('auth:api')->group(function () {
    /* ACTION Users */
    Route::get('users', [Api\UserController::class, 'index']);
    Route::post('users', [Api\UserController::class, 'create']);
    Route::get('users/{id}', [Api\UserController::class, 'edit']);
    Route::put('users/{id}', [Api\UserController::class, 'update']);
    Route::DELETE('users/{id}', [Api\UserController::class, 'delete']);
    Route::post('users/serach', [Api\UserController::class, 'serach']);
//});
