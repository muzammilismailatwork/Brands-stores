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

Route::get("/",[\App\Http\Controllers\DashboardController::class,"view"])->name("home");
Route::get("/dashboard", function () {
    return view("frontend.dashboard");
})->middleware(["auth", "verified"])->name("dashboard");
Route::get("/signup", [\App\Http\Controllers\DashboardController::class,"signup"])->name("signup");
Route::get("/signin", [\App\Http\Controllers\DashboardController::class,"signin"])->name("signin");
Route::get("/forgot-your-password", [\App\Http\Controllers\DashboardController::class,"forgot"])->name("forgot_password");

