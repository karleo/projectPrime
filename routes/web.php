<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\EmployeeStatusController;
use Faker\Extension\CountryExtension;

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
Route::get('/designation', [DesignationController::class, 'index'])->name('desgnt.index');
Route::get('/designation/create', [DesignationController::class, 'create'])->name('desgnt.create');
Route::post('/designation/create', [DesignationController::class, 'store'])->name('desgnt.store');
Route::get('/designation/{designation}', [DesignationController::class, 'edit'])->name('desgnt.edit');
Route::post('/designation/{designation}', [DesignationController::class, 'update'])->name('desgnt.update');

//gender 
Route::get('/gender', [GenderController::class, 'index'])->name('gender.index');
Route::get('/gender/create', [GenderController::class, 'create'])->name('gender.create');
Route::post('/gender/create', [GenderController::class, 'store'])->name('gender.store');
Route::get('/gender/{gender}', [GenderController::class, 'edit'])->name('gender.edit');
Route::post('/gender/{gender}', [GenderController::class, 'update'])->name('gender.update');

//Employee Status 
Route::get('/employeestatus', [EmployeeStatusController::class, 'index'])->name('employeestatus.index');
Route::get('/employeestatus/create', [EmployeeStatusController::class, 'create'])->name('employeestatus.create');
Route::post('/employeestatus/create', [EmployeeStatusController::class, 'store'])->name('employeestatus.store');
Route::get('/employeestatus/{employeestatus}', [EmployeeStatusController::class, 'edit'])->name('employeestatus.edit');
Route::post('/employeestatus/{employeestatus}', [EmployeeStatusController::class, 'update'])->name('employeestatus.update');

//country
Route::get('/country', [CountryController::class, 'index'])->name('country.index');
Route::get('/country/create', [CountryController::class, 'create'])->name('country.create');
Route::post('/country/create', [CountryController::class, 'store'])->name('country.store');
Route::get('/country/{country}', [CountryController::class, 'edit'])->name('country.edit');
Route::post('/country/{country}', [CountryController::class, 'update'])->name('country.update');

//states
Route::get('/states', [StateController::class, 'index'])->name('states.index');
Route::get('/states/create', [StateController::class, 'create'])->name('states.create');
Route::post('/states/create', [StateController::class, 'store'])->name('states.store');
Route::get('/states/{states}', [StateController::class, 'edit'])->name('states.edit');
Route::post('/states/{states}', [StateController::class, 'update'])->name('states.update');

//Cities
Route::get('/city', [CityController::class, 'index'])->name('cities.index');
Route::get('/city/create', [CityController::class, 'create'])->name('cities.create');
Route::post('/city/create', [CityController::class, 'store'])->name('cities.store');
Route::get('/city/{city}', [CityController::class, 'edit'])->name('cities.edit');
Route::post('/city/{city}', [CityController::class, 'update'])->name('cities.update');








