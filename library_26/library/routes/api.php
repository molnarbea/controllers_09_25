<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::put('/users/{user}', [UserController::class, 'update']);

Route::post('/users', [UserController::class, 'store']);

Route::delete('/users/{user}', [UserController::class, 'destroy']);

//book routes
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{book}', [BookController::class, 'show']);
Route::put('/books/{book}', [BookController::class, 'update']);

Route::post('/books', [BookController::class, 'store']);

Route::delete('/books/{book}', [BookController::class, 'destroy']);