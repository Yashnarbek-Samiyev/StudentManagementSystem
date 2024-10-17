<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/students', [\App\Http\Controllers\Api\UserContoller::class, 'index']);
Route::post('students-create', [\App\Http\Controllers\Api\UserContoller::class, 'create']);
Route::post('/students-edit', [\App\Http\Controllers\Api\UserContoller::class, 'edit']);
Route::delete('/students-delete/{id}', [\App\Http\Controllers\Api\UserContoller::class, 'destroy']);
//
//Route::get('/students', [StudentController::class, 'index']);  // Barcha talabalar
//Route::post('/students', [StudentController::class, 'store']);  // Talaba yaratish
//Route::get('/students/{id}', [StudentController::class, 'show']);  // Talabani ko'rish
//Route::put('/students/{id}', [StudentController::class, 'update']);  // Talabani yangilash
//Route::delete('/students/{id}', [StudentController::class, 'destroy']);  // Talabani o'chirish
