<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomeresModel;

class CustomersController extends Controller
{
    public function customers(Request $request){
        $data['getRecord'] = CustomeresModel::get();
        return view('admin.customers.list', $data);
    }

    public function add_customers(Request $request){
        return view('admin.customers.add');
    }

    public function insert_add_customers(Request $request){
        $save = new CustomeresModel;
        $save->name = trim($request->name);
        $save->contact_number = trim($request->contact_number);
        $save->address = trim($request->address);
        $save->doctor_name = trim($request->doctor_name);
        $save->doctor_address = trim($request->doctor_address);
        $save->save();

        return redirect('admin/customers')->with('success', 'Customer successfully created');
        
    }

    public function EditCustomer($id){
        $customers = CustomeresModel::find($id);
        return view('admin.customers.edit', compact('customers'));
     
     }
    
     public function UpdateCustomer(Request $request, $id){
    
        $update =   CustomeresModel::find($id)->update([
               'name' => $request->name,
               'contact_number' => $request->contact_number,
               'address' => $request->address,
               'doctor_name' => $request->doctor_name,
               'doctor_address' => $request->doctor_address,
              
                      
           ]);
           return redirect('admin/customers')->with('success','Customer Updated succcessfully');
        
        }
    
        public function DeleteCustomer($id){
            $delete = CustomeresModel::find($id)->Delete();
            return Redirect()->back()->with('success','Customer Deleted succcessfully');
         }

}
