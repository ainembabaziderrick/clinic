<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomersController;



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
    
    
    });
