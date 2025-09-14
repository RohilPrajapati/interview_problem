<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MultipleContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/contact', [ContactController::class,'store']);
Route::post('/contact/multi', [MultipleContactController::class,'store']);