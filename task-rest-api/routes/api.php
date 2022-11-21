<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;
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

Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('/animals', [AnimalController::class, 'index'])->middleware('auth:sanctum');

    Route::post('/animals', [AnimalController::class, 'store']);

    Route::put('/animals/{id}', [AnimalController::class, 'update']);

    Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);

    Route::get('/students', [StudentController::class, 'index']);

    Route::get('/students/{id}', [StudentController::class, 'show']);

    Route::post('/students', [StudentController::class, 'store']);

    Route::put('/students/{id}', [StudentController::class, 'update']);

    Route::delete('/students/{id}', [StudentController::class, 'destroy']);
});
