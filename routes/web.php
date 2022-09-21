<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\PagesController::class,'home']);
Route::get('/profile',[\App\Http\Controllers\PagesController::class,'profile']);
Route::get('/create',[\App\Http\Controllers\PagesController::class,'create']);
Route::post('/create',[\App\Http\Controllers\PagesController::class,'store']);
Route::get('/list',[\App\Http\Controllers\PagesController::class,'list']);
Route::get('/edit/{id}',[\App\Http\Controllers\PagesController::class,'edit']);
Route::post('edit',[\App\Http\Controllers\PagesController::class,'update']);

