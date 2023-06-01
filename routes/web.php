<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrutaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Formulario',[FrutaController::class,'index']);
Route::get('/FormEdit/{id}',[FrutaController::class,'edit']);
Route::post('/Form',[FrutaController::class,'store']);
Route::delete('/Eliminar/{id}',[FrutaController::class,'destroy']);
Route::post('/update/{id}',[FrutaController::class,'update']);