<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;


Route::get('/', [HomeController::class, 'index']);
Route::get('about', [HomeController::class, 'about']);
Route::get('services', [HomeController::class, 'services']);
Route::get('contact-us', [HomeController::class, 'contact']);
Route::get('winter-car-maintenance-tips', [HomeController::class, 'winter_car_maintenance_tips']);
Route::get('best-car-repair-in-mohan-estate', [HomeController::class, 'best_car_repair_in_mohan_estate']);
Route::get('luxury-car-repair-shop-in-delhi-ncr', [HomeController::class, 'luxury_car_repair_shop_in_delhi_ncr']);
Route::get('top-rated-car-garage-near-me-in-delhi-ncr', [HomeController::class, 'top_rated_car_garage_near_me_in_delhi']);
Route::get('car-service-and-repair-in-delhi-ncr', [HomeController::class, 'car_service_and_repair_in_delhi_ncr']);
Route::get('top-rated-car-garage-near-me-delhi', [HomeController::class, 'top_rated_car_garage_near_me_delhi']);


Route::post('book-service', [HomeController::class, 'sendbookingemail']);

Route::get('Audi-Service-Center-In-Delhi', [ServicesController::class, 'audi_service_center_in_delhi']);
Route::get('BMW-Sevice-Center-In-Delhi', [ServicesController::class, 'bmw_sevice_center_in_delhi']);
Route::get('Land-Rover-Service-Center-In-Delhi', [ServicesController::class, 'land_rover_service_center_in_delhi']);
Route::get('Best-Mercedes-Service-Center-In-Delhi', [ServicesController::class, 'best_mercedes_service_center_in_delhi']);
Route::get('Volvo-Service-Center-In-Delhi', [ServicesController::class, 'volvo_service_center_in_delhi']);
