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
Route::get("/create-store", [\App\Http\Controllers\StoresController::class,"create"])->name("create_store");
