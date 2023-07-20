<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get("/brands", [\App\Http\Controllers\BrandsController::class,"brands"])->name("brands");
Route::get("/create-brand",[\App\Http\Controllers\BrandsController::class,"create"])->name("create_brand");
