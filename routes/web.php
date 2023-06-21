<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jualController;
use App\Http\Controllers\beliController;

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

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('jual',[jualController::class,'show']);
Route::get('jual/add',[jualController::class,'add']);
Route::post('jual/create',[jualController::class,'create']);
Route::post('jual/update/{id}',[jualController::class,'update']);
Route::get('jual/edit/{id}',[jualController::class,'edit']);
Route::get('jual/hapus/{id}',[jualController::class,'hapus']);

Route::get('beli',[beliController::class,'show']);


