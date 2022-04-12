<?php

use App\Http\Controllers\ItemsApiController;
use App\Models\Item;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/items', [ItemsApiController::class, 'index']);

Route::post('/items', [ItemsApiController::class, 'store']);

Route::put('/items/{item}', [ItemsApiController::class, 'update']);

Route::delete('/items/{item}', [ItemsApiController::class, 'destroy']);

Route::get('/items/{item}', [ItemsApiController::class, 'show']);
