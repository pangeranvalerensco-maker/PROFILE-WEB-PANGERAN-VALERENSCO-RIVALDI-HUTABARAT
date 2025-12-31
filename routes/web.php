<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController; 

Route::get('/', [ProfileController::class, 'index']);
Route::get('/about', [ProfileController::class, 'about']);
Route::get('/services', [ProfileController::class, 'services']);
Route::get('/portfolio', [ProfileController::class, 'portfolio']);
Route::get('/contact', [ProfileController::class, 'contact']);