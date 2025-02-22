<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ItemController;

Route::get('/user', [ItemController::class, 'index']);

Route::get('/user/{id}', [ItemController::class, 'show']);

Route::post('/user', [ItemController::class, 'store']);

Route::put('/user/{id}', [ItemController::class, 'update']);

Route::delete('/user/{id}', [ItemController::class, 'destroy']);
