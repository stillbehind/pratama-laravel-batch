<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

Route::get('/', [DashboardController::class, 'dashboard']);
Route::get('/register', [FormController::class,'register']);
Route::post('/welcome', [FormController::class, 'welcome']);

