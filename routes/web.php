<?php

use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\FirController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\BillController;

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
    return view('employee.auth.login');
});

Route::name('employee.')->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');

    Route::resource('attendance', AttendanceController::class);
    Route::resource('leave', LeaveController::class);
    Route::resource('loan', LoanController::class);
    Route::resource('fir', FirController::class);
    Route::resource('info', InfoController::class);
    Route::resource('bill', BillController::class);
});


