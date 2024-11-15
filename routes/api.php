<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/projects', [App\Http\Controllers\Api\ProjectController::class, 'index']);

Route::get('/projects/{id}', [App\Http\Controllers\Api\ProjectController::class, 'show']);

Route::get('/types', [App\Http\Controllers\Api\TypeController::class, 'index']);
Route::get('/technologies', [App\Http\Controllers\Api\TechnologyController::class, 'index']);
