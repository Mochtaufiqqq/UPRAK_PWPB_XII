<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\PlayerController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/playershow',[PlayerController::class,'index']);
Route::get('/playeradd',[PlayerController::class,'add']);
Route::post('/playeradd',[PlayerController::class,'store']);
Route::get('/playeredit/{player}',[PlayerController::class,'edit']);
Route::post('/playeredit/{player}',[PlayerController::class,'update']);
Route::delete('/deleteplayer/{player}',[PlayerController::class,'delete']);
Route::get('/detailplayer/{player}',[PlayerController::class,'detail']);

Route::get('/countryshow',[CountryController::class,'show']);
Route::get('/countryadd',[CountryController::class,'add']);
Route::post('/countryadd',[CountryController::class,'store']);
Route::get('/countryedit/{country}',[CountryController::class,'edit']);
Route::post('/countryedit/{country}',[CountryController::class,'update']);
Route::delete('/deletecountry/{country}',[CountryController::class,'delete']);

Route::get('/countrydetail/{country}',[CountryController::class,'detail']);





