<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\companyController;
use App\Http\Controllers\employeeController;

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
    return view('company/create');
});

// ************company crud operation***********

Route::get('/addCompanies',[companyController::class, 'create']);
Route::post('/newCompanies',[companyController::class, 'store']);
Route::get('/displayCompanies',[companyController::class, 'show']);
Route::get('/editCompanies/{id}',[companyController::class, 'edit']);
Route::post('/editCompanies/update',[companyController::class, 'update']);
Route::get('/deleteCompanies/{id}',[companyController::class, 'delete']);

//*********Employee crud operation*****************

Route::get('/addEmployees',[employeeController::class, 'create']);
Route::post('/newEmployees',[employeeController::class, 'store']);
Route::get('/displayEmployees',[employeeController::class, 'show']);
Route::get('/editEmployees/{id}',[employeeController::class, 'edit']);
Route::post('/editEmployees/update',[employeeController::class, 'update']);
Route::get('/deleteEmployees/{id}',[employeeController::class, 'delete']);
Route::post('/destroy/{id}',[employeeController::class, 'destroy']);
