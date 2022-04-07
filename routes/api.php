<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BejegyzesController;
use App\Http\Controllers\TevekenysegController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('bejegyzesek', [BejegyzesController::class, 'index']);
Route::get('bejegyzesek/osztaly_id', [BejegyzesController::class, 'index']);
Route::post('bejegyzes', [BejegyzesController::class, 'ujBejegyzes']);
Route::get('tevekenyseg', [TevekenysegController::class, 'index']);
