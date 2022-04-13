<?php

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
// ->name('home'); //jd login

Route::get('/protected', [App\Http\Controllers\ProtectedController::class, 'index'])->middleware('auth');


Route::get('/home', [App\Http\Controllers\TestController::class,'view_inv'])->middleware('auth');

Route::get('manufaktur','App\Http\Controllers\TestController@test')->middleware('auth');

Route::post('simpanproduk','App\Http\Controllers\TestController@simpanproduk')->middleware('auth');

Route::post('tambahproduk', [App\Http\Controllers\TestController::class,'tambahproduk'])->middleware('auth');

Route::get('inventory', 'App\Http\Controllers\TestController@test1')->middleware('auth');

Route::get('/inventory1', [App\Http\Controllers\TestController::class,'view_invv'])->middleware('auth');

Route::get('/payroll', function () {
    return view('payroll');
})->middleware('auth');

Route::get('/payroll+', function () {
    return view('payroll+');
})->middleware('auth');

Route::post('tambahpenjahit', [App\Http\Controllers\TestController::class,'tambahpenjahit'])->middleware('auth');

Route::get('/detailtaylor',[App\Http\Controllers\TestController::class,'dtpr'])->middleware('auth');

Route::post('cekpenjahit','App\Http\Controllers\TestController@cekpenjahit')->middleware('auth');

Route::get('/payroll', [App\Http\Controllers\TestController::class,'view_jahit'])->middleware('auth');

Route::get('/adduser', function () {
    return view('adduser');
})->middleware('auth');

Route::post('adduser', [App\Http\Controllers\TestController::class,'adduser'])->middleware('auth');



