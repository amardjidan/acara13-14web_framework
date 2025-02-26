<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::resource('/dashboard',DashboardController::class);
