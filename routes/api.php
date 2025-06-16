<?php

use App\Http\Controllers\Api\jenis_kendaraanController as ApiJenis_kendaraanController;
use App\Http\Controllers\Api\detail_serviceController as ApiDetail_serviceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//route jenis kendaraan
Route::get('/jenis-kendaraan',[ApiJenis_kendaraanController::class,'index']);
Route::post('/jenis-kendaraan',[ApiJenis_kendaraanController::class,'store']);
Route::get('/jenis-kendaraan/{id}',[ApiJenis_kendaraanController::class,'show']);
Route::post('/jenis-kendaraan/{id}',[ApiJenis_kendaraanController::class,'update']);
Route::get('/jenis-kendaraan/delete/{id}',[ApiJenis_kendaraanController::class,'destroy']);
// Route::get('/jenis-kendaraan/add',[ApiJenis_kendaraanController::class,'create'])->name('jenis-kendaraan.create');
// Route::get('/jenis-kendaraan/edit/{id}',[ApiJenis_kendaraanController::class,'edit'])->name('jenis-kendaraan.edit');


Route::get('/detail-service',[ApiDetail_serviceController::class,'index']);
Route::post('/detail-service',[ApiDetail_serviceController::class,'store']);
Route::get('/detail-service/{id}',[ApiDetail_serviceController::class,'show']);
Route::post('/detail-service/{id}',[ApiDetail_serviceController::class,'update']);
Route::get('/detail-service/delete/{id}',[ApiDetail_serviceController::class,'destroy']);


