<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\CategoryController;

Route::get('/',[TodoController::class,'index']);
Route::post('/todos',[TodoController::class,'store']);
Route::get('/category',[CategoryController::class,'index']);
Route::post('/category',[CategoryController::class,'store']);