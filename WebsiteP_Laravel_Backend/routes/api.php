<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Example of an API route for register
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);

// Example of an API route for login
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);