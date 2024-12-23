<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsapiController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('add-products',[ProductsapiController::class,'adding']);
Route::put('edit-products',[ProductsapiController::class,'edit']);
Route::delete('delete-products',[ProductsapiController::class,'delete']);
Route::get('getdata',[ProductsapiController::class,'getdata']);

Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);