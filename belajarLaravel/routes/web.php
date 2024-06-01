<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\CastController;

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

Route::get('/', [HomeController::class,'home']);

Route::get('/register', [AuthController::class,'register']);

Route::post('/home', [AuthController::class,'home']);

Route::get('/table', [TableController::class,'table']);

Route::get('/data-table', [TableController::class,'dataTable']);

Route::resource('cast', CastController::class);