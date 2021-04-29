<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;


Route::get('/all',[studentController :: class,'allSelect']);
Route::get('/count',[studentController :: class,'count']);
Route::get('/name',[studentController :: class,'nameData']);
Route::get('/insert',[studentController :: class,'insertData']);
