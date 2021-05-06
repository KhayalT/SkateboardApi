<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('/products')->group(function () {
    Route::get('/', [\App\Http\Controllers\SkateboardController::class, 'index'])
        ->name('skateboard.all');
});

Route::prefix('/orders')->group(function () {
    Route::get('/', [\App\Http\Controllers\OrderController::class, 'index'])
        ->name('order.all');

    Route::post('/', [\App\Http\Controllers\OrderController::class, 'store'])
        ->name('order.post');
});
