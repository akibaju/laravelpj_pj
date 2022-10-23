<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WorkedController;
use App\Http\Controllers\BraketimeController;
use App\Http\Controllers\ListDisplayController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';

Route::get('/register', [UserController::class,'index']);
Route::post('/register', [UserController::class,'store']);
Route::get('/login', [LoginController::class,'index']);
Route::post('/login', [LoginController::class,'login']);
Route::get('/logout', [LoginController::class,'logout']);
Route::get('/work_started', [WorkedController::class,'start']);
Route::get('/work_finished', [WorkedController::class,'finish']);
Route::get('/breaktime_started', [BreaktimeController::class,'start']);
Route::post('/breaktime_finished', [BreaktimeController::class,'finish']);
Route::get('/list_display', [ListDisplayController::class,'index']);
Route::get('/auth', [AuthorController::class,'check']);
Route::post('/auth', [AuthorController::class,'checkUser']);