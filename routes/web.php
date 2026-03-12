<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

//session1
Route::get("/insert",[StudentController::class,'insertData']);
Route::get("/get",[StudentController::class,'getall']);
Route::get("/getsingle/{id}",[StudentController::class,'getsinglerecord']);
Route::get("/update/{id}",[StudentController::class,'update']);
Route::get("/delete/{id}",[StudentController::class,'deleterecord']);

//session2
Route::get("/user/getall",[UserController::class,'getall']);