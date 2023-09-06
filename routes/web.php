<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\User\UserDashboardController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/user-dashboard', [UserDashboardController::class, 'index'])->name('user-dashboard');




    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard')->middleware('is_admin');
    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');

