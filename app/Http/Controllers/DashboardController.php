<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Hash;
use Str;
use file;
use App\Models\CustomeresModel;
use App\Models\MedicinesModel;
use App\Models\MedicinesStockModel;
use App\Models\SupplierModel;
use App\Models\InvoiceModel;
use App\Models\PurchaseModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard(){
        $data['TotalCustomers'] = CustomeresModel::count();
        $data['TotalMedicines'] = MedicinesModel::count();
        $data['TotalMedicinesStock'] = MedicinesStockModel::count();
        $data['TotalSuppliers'] = SupplierModel::count();
        $data['TotalInvoices'] = InvoiceModel::count();
        $data['TotalPurchases'] = PurchaseModel::count();
        return view('admin.dashboard.list',$data);
    }

    public function my_account_list(Request $request){
        $data['getRecord'] = User::find(Auth::user()->id);
        return view('admin.my_account.list',$data);
    }

    

        public function update_my_account(Request $request){
            $save = User::find(Auth::user()->id);
            $save->name = trim($request->name);
            $save->email = trim($request->email);
            if(!empty($request->password)){
            $save->password = Hash::make($request->password);
            }

            //profile
            if (!empty($request->file('profile_image'))) {
               if(!empty($save->profile_image) && file_exists('upload/profile/'.$save->profile_image)){
                unlink('upload/profile/'.$save->profile_image);
               }

               $file = $request->file('profile_image');
               $randomStr = str::random(30);
               $filename = $randomStr.'.'.$file->getClientOriginalExtension();
               $file->move('upload/profile/',$filename);
               $save->profile_image = $filename;
            }
            
            $save->save();
    
            return redirect('admin/my_account')->with('success', 'Account successfully Updated');
            
        }


    public function Doctor_Dashboard(){
        $data['TotalCustomers'] = CustomeresModel::count();
        $data['TotalMedicines'] = MedicinesModel::count();
        $data['TotalMedicinesStock'] = MedicinesStockModel::count();
        $data['TotalSuppliers'] = SupplierModel::count();
        $data['TotalInvoices'] = InvoiceModel::count();
        $data['TotalPurchases'] = PurchaseModel::count();
        return view('doctor.dashboard.list',$data);
    }

    public function Receptionist_Dashboard(){
        $data['TotalCustomers'] = CustomeresModel::count();
        $data['TotalMedicines'] = MedicinesModel::count();
        $data['TotalMedicinesStock'] = MedicinesStockModel::count();
        $data['TotalSuppliers'] = SupplierModel::count();
        $data['TotalInvoices'] = InvoiceModel::count();
        $data['TotalPurchases'] = PurchaseModel::count();
        return view('receptionist.dashboard.list',$data);
    }

    public function Lab_Dashboard(){
        $data['TotalCustomers'] = CustomeresModel::count();
        $data['TotalMedicines'] = MedicinesModel::count();
        $data['TotalMedicinesStock'] = MedicinesStockModel::count();
        $data['TotalSuppliers'] = SupplierModel::count();
        $data['TotalInvoices'] = InvoiceModel::count();
        $data['TotalPurchases'] = PurchaseModel::count();
        return view('lab.dashboard.list',$data);
    }

    public function Cashier_Dashboard(){
        $data['TotalCustomers'] = CustomeresModel::count();
        $data['TotalMedicines'] = MedicinesModel::count();
        $data['TotalMedicinesStock'] = MedicinesStockModel::count();
        $data['TotalSuppliers'] = SupplierModel::count();
        $data['TotalInvoices'] = InvoiceModel::count();
        $data['TotalPurchases'] = PurchaseModel::count();
        return view('cashier.dashboard.list',$data);
    }

    public function Dispenser_Dashboard(){
        $data['TotalCustomers'] = CustomeresModel::count();
        $data['TotalMedicines'] = MedicinesModel::count();
        $data['TotalMedicinesStock'] = MedicinesStockModel::count();
        $data['TotalSuppliers'] = SupplierModel::count();
        $data['TotalInvoices'] = InvoiceModel::count();
        $data['TotalPurchases'] = PurchaseModel::count();
        return view('dispenser.dashboard.list',$data);
    }
    

    public function Radiographer_Dashboard(){
        $data['TotalCustomers'] = CustomeresModel::count();
        $data['TotalMedicines'] = MedicinesModel::count();
        $data['TotalMedicinesStock'] = MedicinesStockModel::count();
        $data['TotalSuppliers'] = SupplierModel::count();
        $data['TotalInvoices'] = InvoiceModel::count();
        $data['TotalPurchases'] = PurchaseModel::count();
        return view('radiographer.dashboard.list',$data);
    }
    
}
