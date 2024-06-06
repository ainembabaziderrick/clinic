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
        $save->attendant = trim($request->attendant);
        $save->nok_name = trim($request->nok_name);
        $save->nok_contact = trim($request->nok_contact);
        $save->nok_address = trim($request->nok_address);
        $save->time = trim($request->time);
        $save->date = trim($request->date);
        $save->reason = trim($request->reason);
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


         // Receptionist

         public function Rcustomers(Request $request){
            $data['getRecord'] = CustomeresModel::get();
            return view('receptionist.customers.list', $data);
        }
    
        public function Radd_customers(Request $request){
            return view('receptionist.customers.add');
        }
    
        public function Rinsert_add_customers(Request $request){
            $save = new CustomeresModel;
            $save->name = trim($request->name);
            $save->contact_number = trim($request->contact_number);
            $save->address = trim($request->address);
            $save->doctor_name = trim($request->doctor_name);
            $save->doctor_address = trim($request->doctor_address);
            $save->attendant = trim($request->attendant);
            $save->nok_name = trim($request->nok_name);
            $save->nok_contact = trim($request->nok_contact);
            $save->nok_address = trim($request->nok_address);
            $save->time = trim($request->time);
            $save->date = trim($request->date);
            $save->reason = trim($request->reason);
            $save->save();
    
            return redirect('receptionist/customers')->with('success', 'Customer successfully created');
            
        }

        public function Dcustomers(Request $request){
            $data['getRecord'] = CustomeresModel::get();
            return view('doctor.customers.list', $data);
        }
    
        
        public function DEditCustomer($id){
            $customers = CustomeresModel::find($id);
            return view('doctor.customers.edit', compact('customers'));
         
         }
        
         public function DUpdateCustomer(Request $request, $id){
        
            $update =   CustomeresModel::find($id)->update([
                   'name' => $request->name,
                   'history' => $request->history,
                   'observation' => $request->observation,
                   'emergency' => $request->emergency,
                   'emergency_treatment' => $request->emergency_treatment,
                   'investigation' => $request->investigation,
                   
                          
               ]);
               return redirect('doctor/customers')->with('success','Customer Updated succcessfully');
            
            }

            public function Lcustomers(Request $request){
                $data['getRecord'] = CustomeresModel::get();
                return view('lab.customers.list', $data);
            }

            public function LEditCustomer($id){
                $customers = CustomeresModel::find($id);
                return view('lab.customers.edit', compact('customers'));
             
             }
            
             public function LUpdateCustomer(Request $request, $id){
            
                $update =   CustomeresModel::find($id)->update([
                       'name' => $request->name,
                       'investigation' => $request->investigation,
                       'results' => $request->results,
                       'impresion' => $request->impresion,
                       'prescription' => $request->prescription,
                              
                   ]);
                   return redirect('lab/customers')->with('success','Customer Updated succcessfully');
                
                }
    
       
        
           
}
