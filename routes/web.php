<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\HttpController;


Route::get('/all',[studentController :: class,'allSelect']);
Route::get('/count',[studentController :: class,'count']);
Route::get('/name',[studentController :: class,'nameData']);
Route::get('/insert',[studentController :: class,'insertData']);



Route::get('/get',[HttpController :: class,'SimpleGetHttpRequest']);
Route::get('/post',[HttpController :: class,'SimplePostHttpRequest']);
Route::get('/',[HttpController :: class,'jsonGetHttpRequest']);
