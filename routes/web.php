<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\FirController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Models\Employee;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';

// Route::get('/', function () {
//     return view('employee.auth.login');
// });

/* Employee Routes */
Route::get('/', [AuthenticatedSessionController::class, 'create'])->middleware('guest:employee')->name('employee.login.create');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('employee.login.store');
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('employee.logout.destroy');

Route::name('employee.')->middleware('auth:employee')->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');
    Route::resource('attendance', AttendanceController::class);
    Route::resource('leave', LeaveController::class);
    Route::resource('loan', LoanController::class);
    Route::resource('fir', FirController::class);
    Route::resource('info', InfoController::class);
    Route::resource('bill', BillController::class);
});


/* End Employee Routes */

/*
Route::get('/', [AuthenticatedSessionController::class, 'create'])->middleware('guest')->name('employee.login.create');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('employee.login.store');
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('employee.logout.destroy');

Route::name('employee.')->middleware('auth')->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');
    Route::resource('attendance', AttendanceController::class);
    Route::resource('leave', LeaveController::class);
    Route::resource('loan', LoanController::class);
    Route::resource('fir', FirController::class);
    Route::resource('info', InfoController::class);
    Route::resource('bill', BillController::class);
});
*/
