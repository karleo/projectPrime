<?php

use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EmployeeStatusController;


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


//designation
Route::get('/designation',[DesignationController::class, 'index'])->name('designation.index');
Route::get('/designation/create',[DesignationController::class, 'create'])->name('designation.create');
Route::post('/designation/create', [DesignationController::class, 'store'])->name('designation.store');
Route::get('/designation/{designation}', [DesignationController::class, 'edit'])->name('designation.edit');
Route::post('/designation/{designation}', [DesignationController::class, 'update'])->name('designation.update');

//choice
Route::get('/choice',[ChoiceController::class, 'index'])->name('choice.index');
Route::get('/choice/create',[ChoiceController::class, 'create'])->name('choice.create');
Route::post('/choice/create', [ChoiceController::class, 'store'])->name('choice.store');
Route::get('/choice/{choice}', [ChoiceController::class, 'edit'])->name('choice.edit');
Route::post('/choice/{choice}', [ChoiceController::class, 'update'])->name('choice.update');


//employeestatus
Route::get('/employeestatus',[EmployeeStatusController::class, 'index'])->name('employeestatus.index');
Route::get('/employeestatus/create',[EmployeeStatusController::class, 'create'])->name('employeestatus.create');
Route::post('/employeestatus/create', [EmployeeStatusController::class, 'store'])->name('employeestatus.store');
Route::get('/employeestatus/{employeestatus}', [EmployeeStatusController::class, 'edit'])->name('employeestatus.edit');
Route::post('/employeestatus/{employeestatus}', [EmployeeStatusController::class, 'update'])->name('employeestatus.update');

//country
Route::get('/country',[CountryController::class, 'index'])->name('country.index');
Route::get('/country/create',[CountryController::class, 'create'])->name('country.create');
Route::post('/country/create', [CountryController::class, 'store'])->name('country.store');
Route::get('/country/{employcountryeestatus}', [CountryController::class, 'edit'])->name('country.edit');
Route::post('/country/{country}', [CountryController::class, 'update'])->name('country.update');


