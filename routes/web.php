<?php

use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;

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

Route::middleware('auth')->prefix('employee')->group(function () {
    Route::get('',[EmployeeController::class,'index'])->name('employee.index');
    Route::get('/create',[EmployeeController::class,'create'])->name('employee.create');
    Route::post('/create',[EmployeeController::class,'store'])->name('employee.store');
    Route::get('/{employee}',[EmployeeController::class,'edit'])->name('employee.edit');
    Route::post('/{employee}',[EmployeeController::class,'update'])->name('employee.update');
    Route::delete('/{employee}',[EmployeeController::class,'destroy'])->name('employee.delete');
});

Route::get('/choice', function(){
    return view('pages.choice.index');
} )->name('choice.index');
