<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;

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
//Route Backend
Route::prefix('/admin')->group(function (){
    Route::get('/register', [BackendController::class, 'register']);
    Route::post('/register/submit', [BackendController::class, 'register_submit']);
    Route::get('/login', [BackendController::class, 'login_user'])->name('login');
    Route::post('/login/submit', [BackendController::class, 'login_submit']);
    Route::middleware('auth')->group(function (){
        Route::get('/dashboard', [BackendController::class, 'form_user'])->name('dashboard');
        Route::get('/table', [BackendController::class, 'table_user'])->name('table');
        Route::get('/modal', [BackendController::class, 'modal_user'])->name('modal');
    });
    Route::get('/logout', [BackendController::class, 'logout_user'])->name('logout');
});

//Route Frontend
Route::get('/home', [FrontendController::class, 'home']);
Route::get('/shop', [FrontendController::class, 'shop']);
Route::get('/product_detail', [FrontendController::class, 'product_detail']);
