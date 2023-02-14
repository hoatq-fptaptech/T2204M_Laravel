<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\WebController::class,'home']);
Route::get("/about-us",[\App\Http\Controllers\WebController::class,"aboutUs"]);

Route::get("admin/product",[\App\Http\Controllers\ProductController::class,"list"]);
Route::get("admin/product/create",[\App\Http\Controllers\ProductController::class,"create"]);
Route::post("admin/product/create",[\App\Http\Controllers\ProductController::class,"store"]);
