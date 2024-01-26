<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\AdminPermohonanController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Siswa\DashboardController;
use App\Http\Controllers\Siswa\PermohonanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[LoginController::class,'index'])->name('login.index');

Route::get('login',[LoginController::class,'index'])->name('login.index');
Route::post("login",[LoginController::class,'login'])->name('login.post');
Route::post("logout",[LoginController::class,'logout'])->name('logout');

Route::get("register",[RegisterController::class,'index'])->name('register.index');
Route::post('register',[RegisterController::class, 'store'])->name('register.store');


Route::middleware('auth')->group(function(){
    Route::prefix('siswa')->name('siswa.')->group(function(){
        Route::get("dashboard",[DashboardController::class,'index'])->name('dashboard');
        Route::get("permohonan",[PermohonanController::class,'index'])->name('permohonan.index');
        Route::post("permohonan",[PermohonanController::class,'store'])->name('permohonan.store');
    });
    Route::prefix('admin')->name('admin.')->group(function(){
        Route::get("dashboard",[AdminDashboard::class,'index'])->name('dashboard');
        Route::get("permohonan",[AdminPermohonanController::class,'index'])->name('permohonan.index');
    });

});


Route::get('/src', function(){
    return view('pages.indexsrc');
});
