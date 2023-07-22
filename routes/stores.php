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

Route::get("/stores", [\App\Http\Controllers\StoresController::class,"stores"])->name("stores");
Route::get("/manage-stores", [\App\Http\Controllers\StoresController::class,"manage_stores"])->name("manage_stores");
Route::get("/create-store", [\App\Http\Controllers\StoresController::class,"create"])->name("create_store");
Route::post("/store-created", [\App\Http\Controllers\StoresController::class,"add_store"])->name("add_store");
Route::get("/edit-store/{store}",[\App\Http\Controllers\StoresController::class,"edit_store"])->name("edit_store");
Route::post("/update-store/{store}",[\App\Http\Controllers\StoresController::class,"update_store"])->name("update_store");
Route::post("/store-deleted/{store}",[\App\Http\Controllers\StoresController::class,"delete_store"])->name("delete_store");
