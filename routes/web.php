<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\ActivitieController;
use App\Http\Controllers\MarathonController;
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

Route::get('/problema',[ProblemController::class,'create']);
//Route::view('/problema','problema');
Route::post('problema', [ProblemController::class,'store']);

Route::get('/actividade',[ActivitieController::class,'create']);
Route::post('actividade', [ActivitieController::class,'store']);

Route::get('/maratona',[MarathonController::class,'create']);
Route::post('maratona', [MarathonController::class,'store']);

Route::view('/upload','upload');
Route::post('upload',[UploadController::class,'index']);
