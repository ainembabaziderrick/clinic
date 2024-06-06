<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\MedicinesController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PurchasesController;


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

Route::get('/', [AuthController::class, 'Login']);
Route::get('forgot', [AuthController::class, 'forgot']);

Route::post('login_post', [AuthController::class, 'login_post']);


Route::group(['middleware' => 'admin'], function () {

    //admin

    Route::get('admin/dashboard', [DashboardController::class, 'Dashboard']);
    Route::get('admin/my_account', [DashboardController::class, 'my_account_list']);
    Route::post('admin/my_account', [DashboardController::class, 'update_my_account']);


    // Customers
    Route::get('admin/customers', [CustomersController::class, 'customers']);
    Route::get('admin/customers/add', [CustomersController::class, 'add_customers']);
    Route::post('admin/customers/add', [CustomersController::class, 'insert_add_customers']);
    Route::get('/admin/customers/edit/{id}', [CustomersController::class, 'EditCustomer']);
    Route::post('/admin/customers/update/{id}', [CustomersController::class, 'UpdateCustomer']);
    Route::get('/admin/customers/delete/{id}', [CustomersController::class, 'DeleteCustomer']);

    // User
    Route::get('admin/user', [UserController::class, 'user']);
    Route::get('admin/user/add', [UserController::class, 'add_user']);
    Route::post('admin/user/add', [UserController::class, 'insert_add_user']);
    Route::get('/admin/user/edit/{id}', [UserController::class, 'Edituser']);
    Route::post('/admin/user/update/{id}', [UserController::class, 'Updateuser']);
    Route::get('/admin/user/delete/{id}', [UserController::class, 'Deleteuser']);

    // Medicines
    Route::get('admin/medicines', [MedicinesController::class, 'medicines']);
    Route::get('admin/medicines/add', [MedicinesController::class, 'add_medicines']);
    Route::post('admin/medicines/add', [MedicinesController::class, 'insert_add_medicines']);
    Route::get('/admin/medicines/edit/{id}', [MedicinesController::class, 'EditMedicines']);
    Route::post('/admin/medicines/update/{id}', [MedicinesController::class, 'UpdateMedicines']);
    Route::get('/admin/medicines/delete/{id}', [MedicinesController::class, 'DeleteMedicines']);

    // Medicines Stock
    Route::get('admin/medicines_stock', [MedicinesController::class, 'medicines_stock_list']);
    Route::get('admin/medicines_stock/add', [MedicinesController::class, 'add_medicines_stock']);
    Route::post('admin/medicines_stock/add', [MedicinesController::class, 'insert_add_medicines_stock']);
    Route::get('/admin/medicines_stock/edit/{id}', [MedicinesController::class, 'EditMedicines_stock']);
    Route::post('/admin/medicines_stock/update/{id}', [MedicinesController::class, 'UpdateMedicines_stock']);
    Route::get('/admin/medicines_stock/delete/{id}', [MedicinesController::class, 'DeleteMedicines_stock']);

    // Suppliers
    Route::get('admin/suppliers', [SupplierController::class, 'suppliers_list']);
    Route::get('admin/suppliers/add', [SupplierController::class, 'add_suppliers']);
    Route::post('admin/suppliers/add', [SupplierController::class, 'insert_add_suppliers']);
    Route::get('/admin/suppliers/edit/{id}', [SupplierController::class, 'EditSuppliers']);
    Route::post('/admin/suppliers/update/{id}', [SupplierController::class, 'UpdateSuppliers']);
    Route::get('/admin/suppliers/delete/{id}', [SupplierController::class, 'DeleteSuppliers']);

    // Invoices
    Route::get('admin/invoices', [InvoiceController::class, 'invoices_list']);
    Route::get('admin/invoices/add', [InvoiceController::class, 'add_invoices']);
    Route::post('admin/invoices/add', [InvoiceController::class, 'insert_add_invoices']);
    Route::get('/admin/invoices/edit/{id}', [InvoiceController::class, 'EditInvoices']);
    Route::post('/admin/invoices/update/{id}', [InvoiceController::class, 'UpdateInvoices']);
    Route::get('/admin/invoices/delete/{id}', [InvoiceController::class, 'DeleteInvoices']);

    // Purchases

    Route::prefix('admin/purchases/')->group(function () {
        Route::get('', [PurchasesController::class, 'purchases_list']);
        Route::get('add', [PurchasesController::class, 'add_purchases']);
        Route::post('add', [PurchasesController::class, 'insert_add_purchases']);
        Route::get('/edit/{id}', [PurchasesController::class, 'EditPurchases']);
        Route::post('/update/{id}', [PurchasesController::class, 'UpdatePurchases']);
        Route::get('/delete/{id}', [PurchasesController::class, 'DeletePurchases']);
    });


    // My Account

    Route::prefix('admin/my_account/')->group(function () {

        Route::post('add', [DashboardController::class, 'insert_add_my_account']);
        Route::get('/edit/{id}', [DashboardController::class, 'Editmy_account']);
        Route::post('/update/{id}', [DashboardController::class, 'Updatemy_account']);
        Route::get('/delete/{id}', [DashboardController::class, 'Deletemy_account']);
    });



});

Route::group(['middleware' => 'doctor'], function () {

    //doctor

    Route::get('doctor/dashboard', [DashboardController::class, 'Doctor_Dashboard']);
    Route::get('doctor/my_account', [DashboardController::class, 'my_account_list']);
    Route::post('doctor/my_account', [DashboardController::class, 'update_my_account']);

     // Customers
     Route::get('doctor/customers', [CustomersController::class, 'Dcustomers']);
     
     Route::get('/doctor/customers/edit/{id}', [CustomersController::class, 'DEditCustomer']);
    Route::post('/doctor/customers/update/{id}', [CustomersController::class, 'DUpdateCustomer']);
    




});

Route::group(['middleware' => 'receptionist'], function () {

    //receptionist

    Route::get('receptionist/dashboard', [DashboardController::class, 'Receptionist_Dashboard']);
    Route::get('receptionist/my_account', [DashboardController::class, 'my_account_list']);
    Route::post('receptionist/my_account', [DashboardController::class, 'update_my_account']);


    // Customers
    Route::get('receptionist/customers', [CustomersController::class, 'Rcustomers']);
    Route::get('receptionist/customers/add', [CustomersController::class, 'Radd_customers']);
    Route::post('receptionist/customers/add', [CustomersController::class, 'Rinsert_add_customers']);
   


});

Route::group(['middleware' => 'lab'], function () {

    //lab

    Route::get('lab/dashboard', [DashboardController::class, 'Lab_Dashboard']);
    Route::get('lab/my_account', [DashboardController::class, 'my_account_list']);
    Route::post('lab/my_account', [DashboardController::class, 'update_my_account']);

     // Customers
     Route::get('lab/customers', [CustomersController::class, 'Lcustomers']);
     
     Route::get('/lab/customers/edit/{id}', [CustomersController::class, 'LEditCustomer']);
    Route::post('/lab/customers/update/{id}', [CustomersController::class, 'LUpdateCustomer']);




});

Route::group(['middleware' => 'cashier'], function () {

    //cashier

    Route::get('cashier/dashboard', [DashboardController::class, 'Cashier_Dashboard']);
    Route::get('cashier/my_account', [DashboardController::class, 'my_account_list']);
    Route::post('cashier/my_account', [DashboardController::class, 'update_my_account']);




});

Route::group(['middleware' => 'dispenser'], function () {

    //dispenser

    Route::get('dispenser/dashboard', [DashboardController::class, 'Dispenser_Dashboard']);
    Route::get('dispenser/my_account', [DashboardController::class, 'my_account_list']);
    Route::post('dispenser/my_account', [DashboardController::class, 'update_my_account']);




});

Route::group(['middleware' => 'radiographer'], function () {

    //radiographer

    Route::get('radiographer/dashboard', [DashboardController::class, 'Radiographer_Dashboard']);
    Route::get('radiographer/my_account', [DashboardController::class, 'my_account_list']);
    Route::post('radiographer/my_account', [DashboardController::class, 'update_my_account']);




});



Route::get('logout', [AuthController::class, 'logout']);
