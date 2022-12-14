<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\NiveauController;
use App\Models\Niveau;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::resource('niveau', App\Http\Controllers\NiveauController::class);
Route::post('/upload-content', [EtudiantController::class, 'uploadContent'])->name('import.content');
Route::get('/etudiants', [EtudiantController::class, 'index']);
Route::get('/etudiant/{id}', [EtudiantController::class, 'show']);
Route::put('/etudiant/{id}', [EtudiantController::class, 'update']);
Route::delete('/etudiant/{id}', [EtudiantController::class, 'destroy']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/etudiant', [EtudiantController::class, 'index']);
Route::get('/by-level', [NiveauController::class, 'byLevel']);


Route::prefix("etudiant-auth")->group(function () {
    Route::post("/login", [AuthController::class, "login"]);
    Route::post("/register", [AuthController::class, "register"]);
});
