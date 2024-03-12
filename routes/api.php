<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiEditorialController;
use App\Http\Controllers\API\ApiBookController;

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

Route::get('/editorials', [ApiEditorialController::class, 'index']);
Route::post('editorials/create', [ApiEditorialController::class, 'store']);
Route::put('editorials/{id}/update', [ApiEditorialController::class, 'update']);

Route::get('/books', [ApiBookController::class, 'index']);
Route::get('books/show/{id}', [ApiBookController::class, 'show']);
Route::delete('books/delete/{id}', [ApiBookController::class, 'destroy']);
