<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Register route
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);

// Login route
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);