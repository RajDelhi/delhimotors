<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('about', [HomeController::class, 'about']);
Route::get('services', [HomeController::class, 'services']);
Route::get('contact-us', [HomeController::class, 'contact']);
Route::post('book-service', [HomeController::class, 'sendbookingemail']);
