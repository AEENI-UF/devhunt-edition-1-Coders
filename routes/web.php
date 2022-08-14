<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ConfigurationController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::group('/authentification', function () {
//     Route::get('/etudiant', function () {
//         return view('auth.etudiant-login');
//     });
//     Route::get('/admin', function () {
//         return view('auth.admin-login');
//     });
// });

Route::prefix('/authentification')->group(function () {
    Route::get('/etudiant', function () {
        return view('auth.etudiant-login');
    });
    Route::get('/admin', function () {
        return view('auth.login');
    });
    Route::get('inscription', function () {
        return view('auth.etudiant-register');
    });
});

Route::get('/compte', function(){
    return view('Admin/compte/index');
});

Route::get('/list-user', [AuthController::class, 'index']);

Route::get('/dashboard',[DashboardController::class,'list']);
Route::get('/list-config', [ConfigurationController::class,'index'])->name('list-config');
Route::post('/add-config', [ConfigurationController::class, 'store'])->name('add-config');
Route::get('/show-config/{id}', [ConfigurationController::class, 'show'])->name('show-config');
Route::put('/update-config/{id}', [ConfigurationController::class, 'update'])->name('update-config');
Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/liste', [DashboardController::class, 'liste']);

