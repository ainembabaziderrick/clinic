<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicinesModel;
use App\Models\MedicinesStockModel;


class MedicinesController extends Controller
{
    public function medicines(Request $request){
        $data['getRecord'] = MedicinesModel::get();
        return view('admin.medicines.list', $data);
    }

    public function add_medicines(Request $request){
        return view('admin.medicines.add');
    }

    public function insert_add_medicines(Request $request){
        $save = new MedicinesModel;
        $save->name = trim($request->name);
        $save->packing = trim($request->packing);
        $save->generic_name = trim($request->generic_name);
        $save->supplier_name = trim($request->supplier_name);
        
        $save->save();

        return redirect('admin/medicines')->with('success', 'Medicine successfully created');
        
    }

    public function EditMedicines($id){
        $medicines = MedicinesModel::find($id);
        return view('admin.medicines.edit', compact('medicines'));
     
     }

     public function UpdateMedicines(Request $request, $id){
    
        $update =   MedicinesModel::find($id)->update([
               'name' => $request->name,
               'packing' => $request->packing,
               'generic_name' => $request->generic_name,
               'supplier_name' => $request->supplier_name,
               'doctor_address' => $request->doctor_address,
              
                      
           ]);
           return redirect('admin/medicines')->with('success','Medicine Updated succcessfully');
        
        }

        public function DeleteMedicines($id){
            $delete = MedicinesModel::find($id)->Delete();
            return Redirect()->back()->with('success','Medicine Deleted succcessfully');
         }

         public function medicines_stock_list(){
            $data['getRecord'] = MedicinesStockModel::get();
            return view('admin.medicine_stock.list', $data);
         }

         public function add_medicines_stock(Request $request){
            $data['getRecord'] = MedicinesModel::get();
            return view('admin.medicine_stock.add', $data);
        }

        public function insert_add_medicines_stock(Request $request){
            $save = new MedicinesStockModel;
            $save->medicines_id = $request->medicines_id;
            $save->batch_id = $request->batch_id;
            $save->expiry_date = $request->expiry_date;
            $save->quantity = $request->quantity;
            $save->mrp = $request->mrp;
            $save->rate = $request->rate;
            
            $save->save();
    
            return redirect('admin/medicines_stock')->with('success', 'Medicine Stock successfully created');
            
        }

        public function EditMedicines_stock($id){
            $data['getRecord'] = MedicinesModel::get();
            $data['oldRecord'] = MedicinesStockModel::find($id);
            return view('admin.medicine_stock.edit', $data);
         
         }

         public function UpdateMedicines_stock(Request $request, $id){
    
            $update =   MedicinesStockModel::find($id)->update([
                   'medicines_id' => $request->medicines_id,
                   'batch_id' => $request->batch_id,
                   'expiry_date' => $request->expiry_date,
                   'quantity' => $request->quantity,
                   'mrp' => $request->mrp,
                   'rate' => $request->rate,
                  
                          
               ]);
               return redirect('admin/medicines_stock')->with('success','Medicine Stock Updated succcessfully');
            
            }

            public function DeleteMedicines_stock($id){
                $delete = MedicinesStockModel::find($id)->Delete();
                return Redirect()->back()->with('success','Medicine Stock Deleted succcessfully');
             }
    
    
  
}
