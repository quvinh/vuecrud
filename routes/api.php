<?php

use App\Http\Controllers\TransactionController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/transactions', [TransactionController::class, 'index']);
Route::post('/transactions/store', [TransactionController::class, 'store']);
Route::get('/transactions/edit/{id}', [TransactionController::class, 'edit']);
Route::put('/transactions/update/{id}', [TransactionController::class, 'update']);
Route::delete('/transactions/delete/{id}', [TransactionController::class, 'delete']);
