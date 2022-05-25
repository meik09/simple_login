<?php

use Illuminate\Support\Facades\Route;
use Simple\Login\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'login']);
