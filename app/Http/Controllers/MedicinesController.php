<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicinesModel;


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
  
}
