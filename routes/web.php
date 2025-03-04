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
use App\Http\Controllers\LoginController;


Route::get('/', [LoginController::class, 'showForm']);
Route::post('/submit', [LoginController::class, 'submitForm'])->middleware('validateUser');
Route::get('/success', [LoginController::class, 'successPage']);
Route::get('/fail', [LoginController::class, 'failPage']);
