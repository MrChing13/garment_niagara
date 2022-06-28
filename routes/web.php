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
    return view('auth.login');
});

Auth::routes();

Route::get('/protected', [App\Http\Controllers\ProtectedController::class, 'index'])->middleware('auth');

// SUPERADMIN
//-----home-----
Route::get('/superadmin', [App\Http\Controllers\SuperadminController::class, 'index'])->middleware('auth');
Route::get('/superadmin', [App\Http\Controllers\SuperadminController::class,'view_inv'])->middleware('auth');
Route::get('/home', [App\Http\Controllers\SuperadminController::class,'view_inv'])->middleware('auth');
//-----inventory-----
Route::get('/superadmin_inventory1', [App\Http\Controllers\SuperadminController::class,'view_invv'])->middleware('auth');
Route::get('superadmin_inventory', [App\Http\Controllers\SuperadminController::class,'test1'])->middleware('auth');
Route::post('tambahproduk', [App\Http\Controllers\SuperadminController::class,'tambahproduk'])->middleware('auth');
//-----manufaktur-----
Route::get('superadmin_manufaktur',[App\Http\Controllers\SuperadminController::class, 'test'])->middleware('auth');
Route::post('superadmin_simpanproduk',[App\Http\Controllers\SuperadminController::class, 'superadmin_simpanproduk'])->middleware('auth');
//-----payroll-----
Route::get('/superadmin_payroll', [App\Http\Controllers\SuperadminController::class,'view_jahit'])->middleware('auth');
Route::get('superadmin_payroll1', [App\Http\Controllers\SuperadminController::class,'superadmin_payroll1'])->middleware('auth');
Route::patch('superadmin_tambahpenjahit', [App\Http\Controllers\SuperadminController::class,'superadmin_tambahpenjahit'])->middleware('auth');
//-----taylor-----
Route::get('/superadmin_detailtaylor',[App\Http\Controllers\SuperadminController::class,'dtpr'])->middleware('auth');
Route::get('cekpenjahit',[App\Http\Controllers\SuperadminController::class, 'cekpenjahit'])->middleware('auth');
//-----add user-----
Route::get('/superadmin_adduser', function () {
    return view('superadmin.superadmin_adduser');
})->middleware('auth');
Route::post('adduser', [App\Http\Controllers\SuperadminController::class,'adduser'])->middleware('auth');
//-----accounting-----
Route::get('/superadmin_accounting', function () {
    return view('superadmin_accounting');
})->middleware('auth');
Route::get('/superadmin_accounting', [App\Http\Controllers\SuperadminController::class,'view_users'])->middleware('auth');
Route::get('superadmin_updateuser', [App\Http\Controllers\SuperadminController::class,'superadmin_updateuser'])->middleware('auth');
Route::get('superadmin_deleteuser', [App\Http\Controllers\SuperadminController::class,'superadmin_deleteuser'])->middleware('auth');
Route::post('superadmin_simpanuser', [App\Http\Controllers\SuperadminController::class,'superadmin_simpanuser'])->middleware('auth');

//===============================================================================================================================
// TUKANG POTONG
Route::get('/tukangpotong', [App\Http\Controllers\TukangpotongController::class, 'index'])->middleware('auth');
Route::get('/tukangpotong', [App\Http\Controllers\TukangpotongController::class,'view_inv'])->middleware('auth');
Route::get('/home', [App\Http\Controllers\TukangpotongController::class,'view_inv'])->middleware('auth');
//-----manufaktur-----
Route::get('tukangpotong_manufaktur',[App\Http\Controllers\TukangpotongController::class, 'test'])->middleware('auth');
Route::post('tukangpotong_simpanproduk',[App\Http\Controllers\TukangpotongController::class, 'tukangpotong_simpanproduk'])->middleware('auth');

//===============================================================================================================================
// SUPERVISOR PABRIK
Route::get('/supervisorpabrik', [App\Http\Controllers\SupervisorpabrikController::class, 'index'])->middleware('auth');
Route::get('/supervisorpabrik', [App\Http\Controllers\SupervisorpabrikController::class,'view_inv'])->middleware('auth');
Route::get('/home', [App\Http\Controllers\SupervisorpabrikController::class,'view_inv'])->middleware('auth');
//-----payroll-----
Route::get('/supervisorpabrik_payroll', [App\Http\Controllers\SupervisorpabrikController::class,'view_jahit'])->middleware('auth');
Route::get('supervisorpabrik_payroll1', [App\Http\Controllers\SupervisorpabrikController::class,'supervisorpabrik_payroll1'])->middleware('auth');
Route::patch('supervisorpabrik_tambahpenjahit', [App\Http\Controllers\SupervisorpabrikController::class,'supervisorpabrik_tambahpenjahit'])->middleware('auth');
//-----taylor-----
Route::get('/supervisorpabrik_detailtaylor',[App\Http\Controllers\SupervisorpabrikController::class,'dtpr'])->middleware('auth');
Route::get('cekpenjahit',[App\Http\Controllers\SupervisorpabrikController::class, 'cekpenjahit'])->middleware('auth');


//===============================================================================================================================
// ACCOUNTING
Route::get('/accountingg', [App\Http\Controllers\AccountingController::class, 'index'])->middleware('auth');
Route::get('/accountingg', [App\Http\Controllers\AccountingController::class,'view_inv'])->middleware('auth');
Route::get('/home', [App\Http\Controllers\AccountingController::class,'view_inv'])->middleware('auth');
Route::get('/accountingg_accounting', function () {
    return view('accountingg/accounting');
})->middleware('auth');
Route::get('/accountingg_accounting', [App\Http\Controllers\AccountingController::class,'view_users'])->middleware('auth');

Route::get('accountingg_updateuser', [App\Http\Controllers\AccountingController::class,'accountingg_updateuser'])->middleware('auth');
Route::get('accountingg_deleteuser', [App\Http\Controllers\AccountingController::class,'accountingg_deleteuser'])->middleware('auth');
Route::post('accountingg_simpanuser', [App\Http\Controllers\AccountingController::class,'accountingg_simpanuser'])->middleware('auth');