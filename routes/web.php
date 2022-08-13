<?php

use App\Http\Controllers\Auth\AuthController;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/authentification')->group(function () {
    Route::get('/etudiant', function () {
        return view('auth.etudiant-login');
    });
    Route::get('/admin', function () {
        return view('auth.admin-login');
    });
    Route::get('inscription', function () {
        return view('auth.etudiant-register');
    });
});
