<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PayMentController;
use App\Http\Controllers\UsersController;
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
return view('welcome1');
});

Auth::routes();
Route::post('/reg',[UsersController::class,'create']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//////////////dash
Route::get('/help',[DashboardController::class,'help']);
Route::get('/earn',[DashboardController::class,'earn']);
Route::get('/ref',[DashboardController::class,'ref']);
Route::get('/withdraw',[DashboardController::class,'withdraw']);
Route::get('/view_with',[DashboardController::class,'view']);
Route::get('/dash',[DashboardController::class,'dash']);
Route::get('/deposit',[DashboardController::class,'deposit']);
Route::get('/view_deposit',[DashboardController::class,'view_deposit']);
// Route::get('/set_up_payement',[DashboardController::class,'set_up']);
Route::get('/profile',[DashboardController::class,'profile']);
Route::get('/payment_account',[DashboardController::class,'payment_account']);
Route::get('/security',[DashboardController::class,'security']);

////payment
// Route::post('/payment',[PayMentController::class,'store']);

//withdrawals
Route::get('/withdraw',[PayMentController::class,'withdraw']);
Route::get('/view',[PayMentController::class,'view']);


///deposits
Route::get('/deposit',[PayMentController::class,'deposit']);
Route::get('/new_deposit',[PayMentController::class,'new_deposit']);


//post routes
Route::post('/plan',[PayMentController::class,'plan']);
Route::post('/set_up',[PayMentController::class,'set_up']);
Route::post('/profile',[PayMentController::class,'profile']);
Route::post('/security',[PayMentController::class,'security']);
Route::post('/money_withdrawal',[PayMentController::class,'money_withdrawal']);

///pages routes
Route::get('/forex',[PagesController::class,'forex']);
Route::get('/crypto',[PagesController::class,'crypto']);
Route::get('/stock',[PagesController::class,'stock']);
Route::get('/stake',[PagesController::class,'stake']);
Route::get('/commo',[PagesController::class,'commo']);
Route::get('/spot',[PagesController::class,'spot']);
Route::get('/bot',[PagesController::class,'bot']);
Route::get('/margin',[PagesController::class,'margin']);
Route::get('/career',[PagesController::class,'career']);
Route::get('/story',[PagesController::class,'story']);
Route::get('/price',[PagesController::class,'price']);
Route::get('/forex_price',[PagesController::class,'forex_price']);































Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
