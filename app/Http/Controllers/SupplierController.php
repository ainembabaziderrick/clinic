<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SupplierModel;

class SupplierController extends Controller
{
    public function suppliers_list(Request $request){
        $data['getRecord'] = SupplierModel::get();
        return view('admin.suppliers.list', $data);
    }

    public function add_suppliers(Request $request){
        return view('admin.suppliers.add');
    }

    public function insert_add_suppliers(Request $request){
        $save = new SupplierModel;
        $save->supplier_name = trim($request->supplier_name);
        $save->supplier_email = trim($request->supplier_email);
        $save->address = trim($request->address);
                
        $save->save();

        return redirect('admin/suppliers')->with('success', 'Supplier successfully created');
        
    }

    public function EditSuppliers($id){
        $suppliers = SupplierModel::find($id);
        return view('admin.suppliers.edit', compact('suppliers'));
     
     }

     public function UpdateSuppliers(Request $request, $id){
    
        $update =   SupplierModel::find($id)->update([
               'supplier_name' => $request->supplier_name,
               'supplier_email' => $request->supplier_email,
               'address' => $request->address,
                            
                      
           ]);
           return redirect('admin/suppliers')->with('success','Supplier Updated succcessfully');
        
        }

        public function DeleteSuppliers($id){
            $delete = SupplierModel::find($id)->Delete();
            return Redirect()->back()->with('success','Supplier Deleted succcessfully');
         }


}
