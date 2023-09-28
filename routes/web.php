<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UasController;
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
    return view('layout.master');
});

//CRUD CAST
Route::get('/Npm21312113', [UasController::class, 'index']);
Route::post('/Npm21312113', [UasController::class, 'store']);
Route::get('/Npm21312113/create', [UasController::class, 'create']);
Route::get('/Npm21312113/{Npm21312113_id}/edit', [UasController::class, 'edit']);
Route::put('/Npm21312113/{Npm21312113_id}', [UasController::class, 'update']);
Route::delete('/Npm21312113/{Npm21312113_id}', [UasController::class, 'destroy']);
