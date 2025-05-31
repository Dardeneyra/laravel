<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\TestController;

Route::get('/books',[HomeController::class,'index']);
Route::get('/books/{id}',[BookController::class,'show']);
Route::get('/login',[AuthController::class,'showLoginForm'])->name('loginform');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/register',[AuthController::class,'showRegisterForm'])->name('registerform');
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/profile',[AuthController::class,'profile'])->name('profile');
Route::patch('/profile',[AuthController::class,'updateProfile'])->name('updateProfile');
Route::get('/change-password',[AuthController::class,'showChangePaswordForm'])->name('changePasword');
Route::post('/change-password',[AuthController::class,'changePassword'])->name('changePassword');
Route::get('/test-relations',[TestController::class,'testRelations']);
