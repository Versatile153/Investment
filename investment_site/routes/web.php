<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
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

//////////////dash
Route::get('/help',[DashboardController::class,'help']);
Route::get('/earn',[DashboardController::class,'earn']);
Route::get('/ref',[DashboardController::class,'ref']);
Route::get('/withdraw',[DashboardController::class,'withdraw']);
Route::get('/view_with',[DashboardController::class,'view']);
Route::get('/dash',[DashboardController::class,'dash']);






