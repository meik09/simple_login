<?php

use Illuminate\Support\Facades\Route;
use Simple\Login\App\Http\Controllers\Auth\LoginController;

Route::group(['prefix' => 'api/v1/auth'], function () {
    Route::post('/login', [LoginController::class, 'login']);
});
