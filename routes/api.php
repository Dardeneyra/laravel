<?php

use App\Http\Controllers\ReportController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\BookController;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Auth\AuthSanctumController;

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);
Route::post('/books', [BookController::class, 'store']);
Route::patch('/books/{id}', [BookController::class, 'update']);
Route::delete('/books/{id}', [BookController::class, 'destroy']);
Route::apiResource('/articles', ArticleController::class);

Route::post('/login',[AuthSanctumController::class,'login']);
Route::post('/register',[AuthSanctumController::class,'register']);
Route::post('/logout',[AuthSanctumController::class,'logout'])->middleware('auth:sanctum');;

Route::get('/profile',[AuthSanctumController::class,'show'])->middleware('auth:sanctum');

Route::get('/',[reportController::class,'index']);
