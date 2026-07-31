<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BackgroundRemovalController;

Route::middleware('auth:sanctum')->post('/v1/remove-bg', [BackgroundRemovalController::class, 'removeBackground']);