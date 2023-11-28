<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StateController;
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


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
        ->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//department
Route::get('/department', [DepartmentController::class, 'index'])->name('dept.index');
Route::get('/department/create', [DepartmentController::class, 'create'])->name('dept.create');
Route::post('/department/create', [DepartmentController::class, 'store'])->name('dept.store');
Route::get('/department/{department}', [DepartmentController::class, 'edit'])->name('dept.edit');
Route::post('/department/{department}', [DepartmentController::class, 'update'])->name('dept.update');



Route::middleware('auth')->prefix('employee')->group(function () {
    Route::get('',[EmployeeController::class,'index'])->name('employee.index');
    Route::get('/create',[EmployeeController::class,'create'])->name('employee.create');
    Route::post('/create',[EmployeeController::class,'store'])->name('employee.store');
    Route::get('/{employee}',[EmployeeController::class,'edit'])->name('employee.edit');
    Route::post('/{employee}',[EmployeeController::class,'update'])->name('employee.update');
    Route::delete('/{employee}',[EmployeeController::class,'destroy'])->name('employee.delete');
});



Route::middleware('auth')->prefix('country')->group(function () {
    Route::get('',[CountryController::class,'index'])->name('country.index');
    Route::get('/create',[CountryController::class,'create'])->name('country.create');
    Route::post('/create',[CountryController::class,'store'])->name('country.store');
    Route::get('/{country}',[CountryController::class,'edit'])->name('country.edit');
    Route::post('/{country}',[CountryController::class,'update'])->name('country.update');
    Route::get('/de/{country}',[CountryController::class,'destroy'])->name('country.destroy');
});

Route::middleware('auth')->prefix('state')->group(function () {
    Route::get('',[StateController::class,'index'])->name('state.index');
    Route::get('/create',[StateController::class,'create'])->name('state.create');
    Route::post('/create',[StateController::class,'store'])->name('state.store');
    Route::get('/{state}',[StateController::class,'edit'])->name('state.edit');
    Route::post('/{state}',[StateController::class,'update'])->name('state.update');
});


Route::get('/choice', function(){
    return view('pages.choice.index');
} )->name('choice.index');
