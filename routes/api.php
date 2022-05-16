<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\MarathonController;
use App\Http\Controllers\ActivitieController;
use App\Models\Activitie;
use App\Models\Marathon;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function(){
    Route::apiResource('/problema', ProblemController::class);
});

Route::prefix('v1')->group(function(){
    Route::apiResource('/maratona', MarathonController::class);
});

Route::prefix('v1')->group(function(){
    Route::apiResource('/atividade', ActivitieController::class);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
