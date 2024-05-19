<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\GroupeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/filiere',[FiliereController::class,'index']);
Route::get('/filiere/create',[FiliereController::class,'create']);


Route::get('/groupe',[GroupeController::class,'index']);
Route::get('/groupe/create',[GroupeController::class,'create']);