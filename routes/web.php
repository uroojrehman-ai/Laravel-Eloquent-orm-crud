<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/insert",[StudentController::class,'insertData']);
Route::get("/get",[StudentController::class,'getall']);
Route::get("/getsingle/{id}",[StudentController::class,'getsinglerecord']);
Route::get("/update/{id}",[StudentController::class,'update']);
Route::get("/delete/{id}",[StudentController::class,'deleterecord']);