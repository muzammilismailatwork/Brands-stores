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
Route::get("/manage-brands", [\App\Http\Controllers\BrandsController::class,"manage_brands"])->name("manage_brands");
Route::get("/create-brand",[\App\Http\Controllers\BrandsController::class,"create"])->name("create_brand");
Route::post("/brand-created",[\App\Http\Controllers\BrandsController::class,"add_brand"])->name("add_brand");
Route::get("/edit-brand/{brand}",[\App\Http\Controllers\BrandsController::class,"edit_brand"])->name("edit_brand");
Route::post("/update-brand/{brand}",[\App\Http\Controllers\BrandsController::class,"update_brand"])->name("update_brand");
Route::post("/brand-deleted/{brand}",[\App\Http\Controllers\BrandsController::class,"delete_brand"])->name("delete_brand");
