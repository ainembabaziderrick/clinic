<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\MedicinesController;


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

Route::get('/',[AuthController::class,'Login']);
Route::get('forgot',[AuthController::class,'forgot']);

Route::post('login_post',[AuthController::class,'login_post']);


Route::group(['middleware' => 'admin'],function(){

    //admin
    
    Route::get('admin/dashboard',[DashboardController::class,'Dashboard']);


    // Customers
    Route::get('admin/customers',[CustomersController::class,'customers']);
    Route::get('admin/customers/add',[CustomersController::class,'add_customers']);
    Route::post('admin/customers/add',[CustomersController::class,'insert_add_customers']);
    Route::get('/admin/customers/edit/{id}',[CustomersController::class,'EditCustomer']);
    Route::post('/admin/customers/update/{id}',[CustomersController::class,'UpdateCustomer']);
    Route::get('/admin/customers/delete/{id}',[CustomersController::class,'DeleteCustomer']);

     // Medicines
     Route::get('admin/medicines',[MedicinesController::class,'medicines']);
     Route::get('admin/medicines/add',[MedicinesController::class,'add_medicines']);
     Route::post('admin/medicines/add',[MedicinesController::class,'insert_add_medicines']);
     Route::get('/admin/medicines/edit/{id}',[MedicinesController::class,'EditMedicines']);
     Route::post('/admin/medicines/update/{id}',[MedicinesController::class,'UpdateMedicines']);
     Route::get('/admin/medicines/delete/{id}',[MedicinesController::class,'DeleteMedicines']);
    
    });
