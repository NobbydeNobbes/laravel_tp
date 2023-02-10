<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [HomePageController::class, 'index']);

Route::get('/connexion', [AuthController::class, 'login']);

Route::post('/connexion', [AuthController::class, 'authenticate'])->name('connexion');

Route::post('/deconnexion', [AuthController::class, 'logout']);

Route::get('/inscription', [RegisterController::class, 'register']);
