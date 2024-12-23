<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;


Route::get('/', [HomeController::class, 'index']);
Route::get('about', [HomeController::class, 'about']);
Route::get('services', [HomeController::class, 'services']);
Route::get('contact-us', [HomeController::class, 'contact']);
Route::get('winter-car-maintenance-tips', [HomeController::class, 'winter_car_maintenance_tips']);
Route::post('book-service', [HomeController::class, 'sendbookingemail']);

Route::get('Audi-Service-Center-In-Delhi', [ServicesController::class, 'audi_service_center_in_delhi']);
