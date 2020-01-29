<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::any('dhominic-1', 'Exercise1');
Route::any('dhominic-2', 'Exercise2');
Route::any('dhominic-3', 'Exercise3@index');
Route::any('dhominic-3/store', 'Exercise3@store');
Route::any('dhominic-final', 'ExerciseFinal@login');
Route::any('dhominic-final/store', 'ExerciseFinal@store');
