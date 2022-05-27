<?php

use Illuminate\Support\Facades\Route;
use Simple\Login\App\Http\Controllers\LoginController;

Route::group(['prefix' => 'api/v1/auth'], function () {
    Route::post('/login', [LoginController::class, 'login']);
});
Route::get('/test', [LoginController::class, 'test']);
